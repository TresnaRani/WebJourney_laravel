<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\PostController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/session/get',[SessionController::class,'getData']);
Route::get('/session/store',[SessionController::class,'storeData']);
Route::get('/session/destroy',[SessionController::class,'destroyData']);

Route::get('/show-data',[PostController::class,'showData']);
Route::get('/add-data',[PostController::class,'addData']);
Route::post('/store-data',[PostController::class,'storeData']);

