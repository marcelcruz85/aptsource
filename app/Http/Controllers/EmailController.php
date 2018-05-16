<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class EmailController extends Controller
{
    //
    public function send($parameters,Request $request){

        $name = $request->input('name');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $text = $request->input('text');

        $data = [
            'key'     => 'value',
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'text' => $text
        ];
    
        Mail::send('emails.contactemail', $data, function ($message) {
            $message->from('support@dotgital.com', 'Dotgital Technology Solutions for Business');
            $message->subject('Hello my name is Marcel');
            $message->to('support@dotgital.com');
        });
    
        dd(Mail::failures());
    }
}
