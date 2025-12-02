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

    return view('job.index', ['jobs' => $jobs]);
});

Route::post('/jobs', function () {
    Job::create([
        'title' => request('job_title'),
        'salary' => request('salary'),
        'job_description' => request('job_description'),
        'employer_id' => 1//request('employer_id'),

    ]);
    return redirect('/jobs');
});

Route::get('/jobs/create', function () {
    return view('job.create');
});

Route::get('/jobs/{id}', function ($id) {
    $job = Job::find($id);
    if (!$job) {
        abort(404);
    }
    return view('job.show', ['job' => $job]);
});

Route::get('/contact', function () {
    return view('contact');
});
