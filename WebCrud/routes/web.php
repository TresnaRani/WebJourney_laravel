<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Formcontroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/form',[Formcontroller::class,'FormCreate']);
Route::post('/form-submit',[Formcontroller::class,'FormSubmit'])->name('form-submit');
