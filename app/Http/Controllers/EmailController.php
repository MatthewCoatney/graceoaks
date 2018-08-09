<?php

namespace App\Http\Controllers;

use Mail;
use App\Mail\Mailtrap;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function send(Request $request){

                $name = $request->input('name');

                $email = $request->input('email');
                $phone = $request->input('phone');
                $company = $request->input('company');
                $content = $request->input('content');

                Mail::send('emails.send', ['name' => $name, 'email' => $email, 'phone' => $phone, 'company' => $company, 'content' => $content], function ($message) use ($request)
                     {

                         $message->from($request->input('email'), $request->input('name'));

                         $message->to('cvbc@sti.net');

                          $message->subject('CVBaptist.org Contact Form');

                     });


                // testing output
                return response()->view('emails.received');

                // Working Mailtrap
                //Mail::to('matthew@anewcreation.org')->send(new Mailtrap());
                // END MAILTRAP
    }
}
