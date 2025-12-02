<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
    return view('home', [
        'greeting' => 'Hello',
    ]);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/jobs', function () {
    //$jobs = Job::all();
    // $jobs = Job::with('employer')->get();
    // $jobs = Job::with('employer')->paginate(10);
    $jobs = Job::with('employer')->simplePaginate(10);
    // $jobs = Job::with('employer')->cursorPaginate(3);

    return view('jobs', ['jobs' => $jobs]);
});

Route::get('/jobs/{id}', function ($id) {
    $job = Job::find($id);
    if (!$job) {
        abort(404);
    }
    return view('job', ['job' => $job]);
});

Route::get('/contact', function () {
    return view('contact');
});
