<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use Illuminate\Support\Str;


/*
Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts',[PostController::class,'ShowAllPost']);
Route::get('/posts/{id}',[PostController::class,'ShowSinglePage']);
Route::get('/add-post',[PostController::class,'addPost']);
Route::get('/edit-post/{id}',[PostController::class,'editPost']);
Route::get('/delete-post/{id}',[PostController::class,'deletePost']);

*/
Route::get('/',function(){
    $string = "we are learning laravel 9";
    $ucFirst = Str::ucFirst($string);
    echo $ucFirst."<br>";
   // return $string;

   $replaceFirst = Str::$replaceFirst("We","They",$string);
   echo $replaceFirst."<br>";

   $camel = Str::camel($string);
   echo $camel."<br>";
});

Route::view('/about','about');
Route::view('/contact','contact');