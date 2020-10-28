<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    //return view('welcome');
    $to_email = 'dedar3000@gmail.com';

    $data = array('name'=>'dedar', 'body'=> 'Mail Body');

    Mail::send('mail',$data, function($message) use ($to_email){
        $message->to($to_email)
        ->subject('Test Mail');
    });

    echo "Basic Email Sent. Check your inbox.";

});

Route::get('/send', 'sendMail@send');
