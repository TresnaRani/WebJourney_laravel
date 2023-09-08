<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts',[PostController::class,'ShowAllPost']);
Route::get('/posts/{id}',[PostController::class,'ShowSinglePage']);
Route::get('/add-post',[PostController::class,'addPost']);
