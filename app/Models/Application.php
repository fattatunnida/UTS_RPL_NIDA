<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\JobPosting;
use App\Models\Applicant;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function index()
    {
        $applications = Application::with(['jobPosting', 'applicant'])->get();
        return view('applications.index', compact('applications'));
    }

    public function create()
    {
        $job_postings = JobPosting::all();
        $applicants = Applicant::all();
        return view('applications.create', compact('job_postings', 'applicants'));
    }

    public function store(Request $request)
    {
        Application::create($request->all());
        return redirect()->route('applications.index')->with('success', 'Application created successfully.');
    }

    public function edit(Application $application)
    {
        $job_postings = JobPosting::all();
        $applicants = Applicant::all();
        return view('applications.edit', compact('application', 'job_postings', 'applicants'));
    }

    public function update(Request $request, Application $application)
    {
        $application->update($request->all());
        return redirect()->route('applications.index')->with('success', 'Application updated successfully.');
    }

    public function destroy(Application $application)
    {
        $application->delete();
        return redirect()->route('applications.index')->with('success', 'Application deleted successfully.');
    }
}
