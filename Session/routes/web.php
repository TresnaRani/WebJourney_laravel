<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/session/get',[SessionController::class,'getData']);
Route::get('/session/store',[SessionController::class,'storeData']);
Route::get('/session/destroy',[SessionController::class,'destroyData']);
