<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;

//Home Page
Route::view('/', 'home');

//Jobs Page 
//Be sure to have these methods in the JobController class-> index, create, store, show, edit, update, destroy
Route::resource('jobs', JobController::class);

//Contact Page
Route::view('/contact', 'contact');