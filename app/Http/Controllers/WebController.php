<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMailer;
use Illuminate\Http\Request;

class WebController extends Controller {

    public function about() {
        return view('front.about');
    }

    public function contact(Request $request) {
        if ($request->isMethod('post')) {

            $data = $request->validate([
                'c_name' => 'required',
                'c_email' => 'required|email',
                'c_message' => 'required',
            ]);
            Mail::to('info@savemikiundu.org')->send(new ContactMailer());
        } else {
            return view('front.contact');
        }
    }

}
