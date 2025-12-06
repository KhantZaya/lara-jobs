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

// List
Route::get('/jobs', function () {
    //$jobs = Job::all();
    // $jobs = Job::with('employer')->get();
    // $jobs = Job::with('employer')->paginate(10);
    $jobs = Job::with('employer')->latest()->simplePaginate(10);
    // $jobs = Job::with('employer')->cursorPaginate(3);

    return view('job.index', ['jobs' => $jobs]);
});

// Store
Route::post('/jobs', function () {
    // validate
    request()->validate([
        'job_title' => ['required', 'min:3'],
        'salary' => ['required'],
        'job_description' => ['required'],
    ]);

    // save in db
    Job::create([
        'title' => request('job_title'),
        'salary' => request('salary'),
        'job_description' => request('job_description'),
        'employer_id' => 1, //request('employer_id'),
    ]);
    return redirect('/jobs');
});

// Create
Route::get('/jobs/create', function () {
    return view('job.create');
});

// Detail
// Option 1:
// Route::get('/jobs/{id}', function ($id) {
    
//     $job = Job::find($id);
//     if (!$job) {
//         abort(404);
//     }
//     return view('job.show', ['job' => $job]);
// });

// Option 2:
Route::get('/jobs/{job}', function (Job $job) {
    
    // $job = Job::find($id);
    if (!$job) {
        abort(404);
    }
    return view('job.show', ['job' => $job]);
});

// Patch
Route::patch('/jobs/{id}', function ($id) {
    // validate
    request()->validate([
        'job_title' => ['required', 'min:3'],
        'salary' => ['required'],
        'job_description' => ['required'],
    ]);

    $job = Job::findOrFail($id);

    // Option 1:
    // $job->title = request('job_title');
    // $job->salary = request('salary');
    // $job->job_description = request('job_description');
    // $job->save();

    // Option 2:
    $job->update([
        'title' => request('job_title'),
        'salary' => request('salary'),
        'job_description' => request('job_description'),
    ]);

    // psersist

    if (!$job) {
        abort(404);
    }

    // redirect to job page
    return redirect('/jobs/'.$job->id);
    //return view('job.show', ['job' => $job]);
});

Route::delete('/jobs/{id}', function ($id) {
    // authorize

    // delete the job
    $job = Job::findOrFail($id);
    $job->delete();
    // redirect
    return redirect('/jobs');
});

// Edit
Route::get('/jobs/{id}/edit', function ($id) {
    $job = Job::find($id);
    if (!$job) {
        abort(404);
    }
    return view('job.edit', ['job' => $job]);
});

Route::get('/contact', function () {
    return view('contact');
});
