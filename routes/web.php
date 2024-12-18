<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;

Route::get('/', function () {
    return view('home');
});

Route::get('/job-board', [JobController::class, 'index']);
