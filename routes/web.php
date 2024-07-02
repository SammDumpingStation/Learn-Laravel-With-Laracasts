<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use App\Models\RegisteredUser;
use Illuminate\Support\Facades\Route;

//Home Page
Route::view('/', 'home');

//Jobs Page
//Be sure to have these methods in the JobController class-> index, create, store, show, edit, update, destroy
Route::resource('jobs', JobController::class);

//Contact Page
Route::view('/contact', 'contact');

Route::get('/register', [RegisteredUserController::class, 'create']);
Route::post('/register', [RegisteredUserController::class, 'store']);

Route::get('/login', [SessionController::class, 'create']);
Route::post('/login', [SessionController::class, 'store']);
