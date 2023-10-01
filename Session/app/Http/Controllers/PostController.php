<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function showData(){
        $posts = Post::simplepaginate(10);
       // $posts= Post::get()->toArray();
        //echo "<pre>";print_r($posts);die;
        //return $posts;
       return view('showData',compact('posts'));
    }

    public function addData(){
        return view('addData');
    }
    public function storeData(Request $request){    
        if($request->isMethod('post')){
            $data = $request->all();

            $rules = [
                'title'=>'required',
                'description'=>'required',
            ];

            $cm = [
                'title.required'=>'Post title is required',
                'description.required'=>'Post description is required',

            ];
            $this->validate($request,$rules,$cm);
            $post =new Post();
            $post->title = $data['title'];
            $post->description = $data['description'];
            $post->save();
            return redirect('/show-data');
        }


    }
}
