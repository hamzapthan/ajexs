<?php

use App\Mail\MailtrapExample;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\FirstController;



//Route::get('/send-mail', function () {

//    Mail::to('newuser@example.com')->send(new MailtrapExample()); 

  //  return 'A message has been sent to Mailtrap!';
//
//});
Route::get('/',function(){
	return view('welcome');
});
Route::resource('/first',FirstController::class)->middleware('auth');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
