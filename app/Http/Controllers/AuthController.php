<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use Illuminate\Support\Facades\Cookie;
use App\Http\Requests\Register;
use App\Models\User;


class AuthController extends Controller
{
    public function create_user(Request $request)
    {
        $user = User::Where('email', $request->email)->first();
        
        if($user){
          return redirect()->back();
        }
        else{
            $createUser = new User();
            $createUser->name = $request->name;
            $createUser->email = $request->email;
            $createUser->password = $request->password;
    
              $createUser->save();
              return view('Auth.login');
        }
    }



    public function login_into(Request $request)
    {
        $user = User::where('email', $request->email)
            ->where('name', $request->name)
            ->first();

        if($user && password_verify($request->password,$user->password))
        {
            $_SESSION['name'] = $user->name;
            $_SESSION['email'] = $user->email;

            $payload = [
                'sub' => $user->id,
            ];

            // dd($payload);
            
            $jwt = JWT::encode($payload, $_ENV['JWT_SECRET'], $_ENV['JWT_ALGO']);

            // dd($jwt);
            
            $cookie = cookie('token',$jwt,120);

                 return redirect()->to('/dashboard')->withCookie($cookie);
        }
        else{
            return redirect()->back();
        }
    }

    public function logout(){
        Session::flush();
        return redirect('/login');
    }
    
}
