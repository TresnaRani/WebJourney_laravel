<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function getData(Request $request){
        if($request->session()->has('key')){
            return $request->session()->get('key');
        }
        else{
            return 'session has no value';
        }
    }

        public function storeData(Request $request){
            $request->session()->put('key','Web journey');
            return 'value successfuly added to the session';
        }
        public function destroyData(Request $request){
            $request->session()->forget('key');
            return 'Session value successfully destroy';
        }
            
        
      
    }

