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
Route::get('/edit-data/{id}',[PostController::class,'editData']);
Route::post('/store-edit-data/{id}',[PostController::class,'storeEditData']);
Route::get('/delete-data/{id}',[PostController::class,'deleteData']);
Route::get('/restore-data/{id}',[PostController::class,'restoreData']);
Route::get('/parmanentDelete-data/{id}',[PostController::class,'pDeleteData']);
Route::get('/change-status/{id}',[PostController::class,'changeStatus']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
