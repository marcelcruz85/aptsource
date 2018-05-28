<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;

class EmailController extends Controller
{
    //
    public function send(Request $request){

        $form = $request->input('form');
        $name = $request->input('name');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $text = $request->input('text');
        
        $data = [
            'key' => 'value',
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'text' => $text
        ];
    
        Mail::send('emails.contactemail', $data, function ($message) {
            $message->from('support@dotgital.com', 'Apartment Source Chicago');
            $message->subject('You received a message from the website.');
            $message->to('support@dotgital.com');
        });

        // return view($view, [
        //     'success' => $success,
        // ]);

        $response = array(
            'status' => 'success',
            'msg' => 'Setting created successfully',
        );
        //return \Response::json($response);

        return 'success';
    
    }
}
