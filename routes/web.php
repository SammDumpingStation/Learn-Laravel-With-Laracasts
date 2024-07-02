<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;

//Home Page
Route::view('/', 'home');

//Jobs Page
Route::resource('jobs', JobController::class);

//Contact Page
Route::view('/contact', 'contact');