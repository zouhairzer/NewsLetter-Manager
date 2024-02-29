<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\NewsletterController;

use App\Http\Controllers\SendMailController;
use App\Http\Controllers\test;

use App\Http\Controllers\AuthController;

use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
    'emails'=> MailController::class,
]);
// Route::get('/send_emails', [SendMailController::class, 'index']);
Route::get('/send_emails/{id}', [SendMailController::class, 'send_emails']);
Route::get('/updatePage/{id}', [CategoryController::class, 'show']);

// ---------- Alll views --------------- //

Route::get('/' , function(){
return view('Auth.login');
});
Route::get('login' , function(){
return view('Auth.login');
});
Route::get('register' , function(){
return view('Auth.register');
});
Route::get('users' , function(){
return view('tables.user');
});
// --------------------------------------- //

Route::get('/search', [DashboardController::class, 'search']);
Route::get('/filter', [MailController::class, 'filterByEmail'])->name('newletter.filterEmail');
Route::get('dashboard' , [DashboardController::class,'dashboard']);

Route::post('/searchbycategory' , [NewsletterController::class , 'searchbycategory']);





Route::post('/register',[AuthController::class,'create_user']);

Route::post('/login',[AuthController::class,'login_into']);

// Route::middleware([Auth::class])->groupe(function(){

// });

