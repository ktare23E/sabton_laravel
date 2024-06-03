<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/test',[TestController::class,'index']);

Route::get('/show/{test}', [TestController::class, 'show']);

Route::get('/create', [TestController::class, 'create']);
