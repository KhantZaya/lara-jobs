<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
    return view('home', [
        'greeting' => 'Hello',
    ]);
});

// we can app except or only
Route::resource('jobs', JobController::class);

// Route::controller(JobController::class)->group(function () {
//     Route::view('/about', 'about');
//     Route::get('/jobs', 'index');
//     Route::post('/jobs', 'store');
//     Route::get('/jobs/create', 'create');
//     Route::get('/jobs/{job}', 'show');
//     Route::patch('/jobs/{id}', 'update');
//     Route::delete('/jobs/{id}', 'destroy');
// Route::get('/jobs/{id}/edit', 'edit');
// });

// Route::view('/about', 'about');
// Route::get('/jobs', [JobController::class, 'index']);
// Route::post('/jobs', [JobController::class, 'store']);
// Route::get('/jobs/create', [JobController::class, 'create']);
// Route::get('/jobs/{job}', [JobController::class, 'show']);
// Route::patch('/jobs/{id}', [JobController::class, 'update']);
// Route::delete('/jobs/{id}', [JobController::class, 'destroy']);
// Route::get('/jobs/{id}/edit', [JobController::class, 'edit']);

Route::view('/contact', 'contact');
Route::view('/about', 'about');
