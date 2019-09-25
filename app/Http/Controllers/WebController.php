<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function about(){
        return view('front.about');
    }
    
    public function contact(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
        }else{
            return view('front.contact');
        }
    }
}
