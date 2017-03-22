<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use Illuminate\Support\Facades\Mail;

Route::get('/', function () {
    //return view('welcome');

    $data =[

'title'=>'Hi Students',
        'content'=>'I love you Enkosi Myataza. Confidentiality Note: This communication is intended for the addressee only, is privileged and confidential and unauthorised dissemination or copying is prohibited',





    ];

    Mail::send('emails.test',$data,function ($message){

      $message->to('fadzaimuwandi@gmail.com','Fadzai Muwandi')->subject('Hey wats up')  ;


    });

});
