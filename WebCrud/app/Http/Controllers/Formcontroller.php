<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Formcontroller extends Controller
{
    public function FormCreate(){
        return view('form');
    }

    public function FormSubmit(Request $request){
        $rules = [
            'name'=>'required|max.10',
            'email'=>'required|email',
        ];
        
        $customMessage =[
            'name.required'=>'Enter your name',
            'name.max'=>'max ch 10',
            'email.required'=>'Enter your email',
            'email.max'=>'Email must be valid',
        ];
        
        $this->validate($request,$rules,$customMessage);
        return $request->all();
    }
}
