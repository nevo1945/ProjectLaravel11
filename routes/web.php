<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::resource('home', HomeController::class);
Route::get('/', function () {
    return view('welcome');
});
