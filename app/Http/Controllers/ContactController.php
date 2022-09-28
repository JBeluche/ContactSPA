<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    //
    public function Sendmail(Request $request)
    {
        $contactform = $request->json()->all();

        $data = array(
            'first_name' => $contactform['fullname'],
            'last_name' => $contactform['last_name'],
            'email' => $contactform['emailaddress'],
            'msg' => $contactform['message']
        );

        Mail::send('mailtemplate', $data, function ($message) use ($data) {
            $message->from('j.beluche@outlook.com', 'Contact Form');
            $message->sender('j.beluche@outlook.com', 'Contact Form');
            $message->to('j.beluche@outlook.com', "Contact Form");
            $message->subject('Contact form');
          });



    }
  
}