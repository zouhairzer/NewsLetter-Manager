<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\SendMailController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::resources([
    'newsletters'=> NewsletterController::class,
    'categories'=> CategoryController::class,
]);
Route::get('/send_emails', [SendMAilController::class, 'index']);
Route::post('/send_emails', [SendMailController::class, 'send_emails']);

// ---------- Alll views --------------- //
Route::get('dashboard' , function(){
return view('dashboard');
});
Route::get('/' , function(){
return view('Auth.login');
});
Route::get('login' , function(){
return view('Auth.login');
});
Route::get('register' , function(){
return view('Auth.register');
});
Route::get('categorie' , function(){
return view('tables.Categorie');
});
Route::get('emails' , function(){
return view('tables.Emails');
});
Route::get('news_letter' , function(){
return view('tables.News_Letter');
});
Route::get('users' , function(){
return view('tables.user');
});
// --------------------------------------- //