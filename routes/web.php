<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\UserRegistrationController;
use Illuminate\Support\Facades\Route;
use App\Models\Job;
use Database\Factories\UserFactory;

Route::get('/', function () {
    return view('home', [
        'greeting' => 'Hello',
    ]);
});

// we can app except or only
// Route::resource('jobs', JobController::class)->only(['index', 'show'])->middleware('auth');
// Route::resource('jobs', JobController::class);

Route::get('/register', [UserRegistrationController::class, 'create']);
Route::post('/register', [UserRegistrationController::class, 'store']);

Route::get('/login', [SessionController::class, 'create'])->name('login');
Route::post('/login', [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destroy']);


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

Route::get('/jobs', [JobController::class, 'index']);
Route::post('/jobs', [JobController::class, 'store']);
Route::get('/jobs/create', [JobController::class, 'create'])->middleware('auth');
Route::get('/jobs/{job}', [JobController::class, 'show']);
Route::patch('/jobs/{id}', [JobController::class, 'update']);
Route::delete('/jobs/{id}', [JobController::class, 'destroy']);
//Route::get('/jobs/{job}/edit', [JobController::class, 'edit'])->middleware(['auth', 'can:edit-job,job']);

Route::get('/jobs/{job}/edit', [JobController::class, 'edit'])
    ->middleware('auth') 
    ->can('edit-job', 'job');

Route::view('/contact', 'contact');
Route::view('/about', 'about');
