<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

class JobController extends Controller
{
    //
    public function index()
    {
        //$jobs = Job::all();
        // $jobs = Job::with('employer')->get();
        // $jobs = Job::with('employer')->paginate(10);
        $jobs = Job::with('employer')->latest()->simplePaginate(10);
        // $jobs = Job::with('employer')->cursorPaginate(3);

        return view('job.index', ['jobs' => $jobs]);
    }

    public function store()
    {
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
    }

    public function show(Job $job)
    {
        // Detail
        // Option 1:
        // Route::get('/jobs/{id}', function ($id) {

        //     $job = Job::find($id);
        //     if (!$job) {
        //         abort(404);
        //     }
        //     return view('job.show', ['job' => $job]);
        // });
        if (!$job) {
            abort(404);
        }
        return view('job.show', ['job' => $job]);
    }

    public function create()
    {
        return view('job.create');
    }

    public function destroy($id)
    {
        // authorize

        // delete the job
        $job = Job::findOrFail($id);
        $job->delete();
        // redirect
        return redirect('/jobs');
    }

    public function update($id)
    {
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
        return redirect('/jobs/' . $job->id);
    }

    public function edit($id)
    {
        $job = Job::find($id);
        if (!$job) {
            abort(404);
        }
        return view('job.edit', ['job' => $job]);
    }
}
