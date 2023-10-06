<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Toastr;

class PostController extends Controller
{
    public function showData(){
        $posts = Post::latest()->simplepaginate(10);
        $trashPosts = Post::onlyTrashed()->latest()->simplepaginate(10);
       // $posts= Post::get()->toArray();
        //echo "<pre>";print_r($posts);die;
        //return $posts;
       return view('showData',compact('posts','trashPosts'));
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
            Toastr::success('Post successfully added', 'success', ["positionClass" => "toast-top-right","closeButton"=> "true","progressBar"=> "true",]);
            return redirect('/show-data');
        }


    }

    //edit data

    public function editData($id=null){
        $post=Post::findOrFail($id);
        return view('editData',compact('post'));
    }

    public function storeEditData(Request $request,$id=null){    
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
            $post =Post::findOrFail($id);
            $post->title = $data['title'];
            $post->description = $data['description'];
            $post->save();
            Toastr::success('Post successfully updated', 'success', ["positionClass" => "toast-top-right","closeButton"=> "true","progressBar"=> "true",]);
            return redirect('/show-data');
        }
}

    public function deleteData($id=null){
        Post::findOrFail($id)->delete();
        Toastr::success('Post successfully deleted', 'success', ["positionClass" => "toast-top-right","closeButton"=> "true","progressBar"=> "true",]);
        return redirect()-> back();
    }

    public function restoreData($id){
        Post::withTrashed()->findOrFail($id)->restore();
        Toastr::success('Post successfully restored', 'success', ["positionClass" => "toast-top-right","closeButton"=> "true","progressBar"=> "true",]);
        return redirect()-> back();

    }
    public function pDeleteData($id=null){
        Post::onlyTrashed()->findOrFail($id)->forceDelete();
        Toastr::success('Post permanently deleted', 'success', ["positionClass" => "toast-top-right","closeButton"=> "true","progressBar"=> "true",]);
        return redirect()-> back();
    }

    public function changeStatus($id){
        $getStatus = Post::select('status')->where('id',$id)->first();
        return $getStatus;

    }

}
