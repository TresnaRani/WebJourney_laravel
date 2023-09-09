<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PostController extends Controller
{
    public function ShowAllPost(){
        $ShowAllPost = Http::get('https://jsonplaceholder.typicode.com/posts');
        return $ShowAllPost->json();
    }
    public function ShowSinglePage($id){
        $ShowSinglePage =  Http::get('https://jsonplaceholder.typicode.com/posts/'.$id);
        return $ShowSinglePage->json();
    }
    public function addPost(){
        $addPost =  Http::post('https://jsonplaceholder.typicode.com/posts/',[
            'userId'=>4,
            'title'=>'newpost',
            'body'=>'newpost details',
        ]);
        return $addPost->json();
    }

    public function editPost(){
        
    }

}
