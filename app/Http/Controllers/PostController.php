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
}
