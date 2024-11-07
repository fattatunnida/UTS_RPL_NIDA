<?php

use App\Http\Controllers\JobPostingController;
use App\Http\Controllers\ApplicantController;
use App\Http\Controllers\ApplicationController;

Route::get('/', function () {
    return view('welcome');
});

// Job Postings Routes
Route::resource('job_postings', JobPostingController::class);

// Applicants Routes
Route::resource('applicants', ApplicantController::class);

// Applications Routes
Route::resource('applications', ApplicationController::class);
