<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMailer;
use Illuminate\Http\Request;

class WebController extends Controller {

    public function about() {
        return view('front.about');
    }
    public function getCause(){
        return view('front.cause');
    }

    public function contact(Request $request) {
        if ($request->isMethod('post')) {
            $this->$request->validate([
                'c_name' => 'required',
                'c_email' => 'required|email',
                'c_message' => 'required',
            ]);
            Mail::send('emails.contact.contact-template', [
                'mesg' => $request->c_message
                    ], function($mail) use($request) {
                $mail->from($request->c_email, $request->name);
                
                $mail->to('info@savemikiundu.org');
            });
        } else {
            return view('front.contact');
        }
    }

}
