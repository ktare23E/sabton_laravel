<?php

use App\Http\Controllers\CountryController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/test',[TestController::class,'index']);

Route::get('/show/{test}', [TestController::class, 'show']);

Route::get('/create', [TestController::class, 'create']);

Route::get('/post',[PostController::class,'index']);


Route::get('/job',[JobController::class,'index']);
Route::get('/country',[CountryController::class,'index']);

Route::get('/image',[ImageController::class,'index']);