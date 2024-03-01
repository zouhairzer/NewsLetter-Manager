<?php

namespace App\Http\Controllers;

use App\Models\Mail;
use App\Http\Requests\StoreMailRequest;
use App\Http\Requests\UpdateMailRequest;
use App\Models\Category;
use App\Models\Newsletter;
use Illuminate\Http\Request;

class MailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $emails = Mail::all();
        $cherchInput = 1 ;
        
        return view('tables.Emails' , compact('emails','cherchInput'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMailRequest $request)
    {
        Mail::create([
            'email' => $request->email
        ]);
        return back()->with('success', 'Mail created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Mail $mail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mail $mail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMailRequest $request, Mail $mail ,$id)
    {
        $findMail = $mail->findOrfail($id);
        $findMail->email = $request->email;
        $findMail->update();
        return back()->with('success', 'Mail updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mail $mail , $id)
    {
        $findEmail = $mail->findOrFail($id);
        $findEmail->delete();
        return back()->with('success', 'Mail deleted successfully');
    }
    public function filterByEmail(Request $request)
    {
        $email = $request->input('email');
        dd($email);

        $newsletters = Newsletter::join('mails', 'newsletters.mail_id', '=', 'mails.id')
            ->join('users', 'newsletters.user_id', '=', 'users.id')
            ->select('newsletters.*', 'mails.email as mail_email', 'users.name as user_name')
            ->where('mails.email', '=', $email)
            ->paginate(5);



        $categories = Category::all();
        if ($newsletters->isEmpty()) {
            return redirect()->route('newsletter.index')->with('message', 'No newsletters available with this email.');
        }

        return view('newsletter.index', compact('newsletters', 'categories'));
    }
}