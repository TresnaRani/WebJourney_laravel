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
            'name'=>'required|max:10',
            'email'=>'required|email',
        ];
        $this->validate($request,$rules);
        return $request->all();
    }
}
