<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function showData(){
        $posts = Post::all();
       // $posts= Post::get()->toArray();
        //echo "<pre>";print_r($posts);die;
        //return $posts;
       return view('showData',compact('posts'));
    }
}
