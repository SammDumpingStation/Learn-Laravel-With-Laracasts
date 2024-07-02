<?php

use App\Http\Controllers\JobController;
use App\Models\Job;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

//Jobs Route
//Get Requests

//Index -> Shows all the jobs
Route::get('/jobs', [JobController::class, 'index']);

//Create -> Create a Job
Route::get('/jobs/create', [JobController::class, 'create']);

//Show -> Shows the job clicked
Route::get('/jobs/{job}', 'show');

//Edit -> Redirects to the edit job page
Route::get('/jobs/{job}/edit', 'edit');

//Post Request for Jobs
//Store ->  Gets the information from the POST form request and store it in the database
Route::post('/jobs', [JobController::class, 'store']);

//PATCH
//Update ->  Updates the current job
Route::patch('/jobs/{job}', [JobController::class, 'update']);

//Destroy
Route::delete('/jobs/{job}', [JobController::class, 'destroy']);

Route::get('/contact', function () {
    return view('contact');
});
