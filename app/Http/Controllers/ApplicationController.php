<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\JobPosting;
use App\Models\Applicant;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    // Menampilkan daftar aplikasi pekerjaan
    public function index()
    {
        $applications = Application::with(['jobPosting', 'applicant'])->get();
        return view('applications.index', compact('applications'));
    }

    // Menampilkan form untuk membuat aplikasi baru
    public function create()
    {
        $job_postings = JobPosting::all(); // Ambil semua lowongan pekerjaan
        $applicants = Applicant::all(); // Ambil semua pelamar
        return view('applications.create', compact('job_postings', 'applicants'));
    }

    // Menyimpan aplikasi pekerjaan baru
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'job_posting_id' => 'required|exists:job_postings,id',
            'applicant_id' => 'required|exists:applicants,id',
            'status' => 'required|string|max:255',
        ]);

        Application::create($validatedData);
        return redirect()->route('applications.index')->with('success', 'Application created successfully.');
    }

    // Menampilkan detail aplikasi
    public function show($id)
    {
        $application = Application::findOrFail($id);
        return view('applications.show', compact('application'));
    }

    // Menampilkan form untuk mengedit aplikasi
    public function edit($id)
    {
        $application = Application::findOrFail($id);
        $job_postings = JobPosting::all();
        $applicants = Applicant::all();
        return view('applications.edit', compact('application', 'job_postings', 'applicants'));
    }

    // Memperbarui aplikasi
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'job_posting_id' => 'required|exists:job_postings,id',
            'applicant_id' => 'required|exists:applicants,id',
            'status' => 'required|string|max:255',
        ]);

        $application = Application::findOrFail($id);
        $application->update($validatedData);
        return redirect()->route('applications.index')->with('success', 'Application updated successfully.');
    }

    // Menghapus aplikasi
    public function destroy($id)
    {
        $application = Application::findOrFail($id);
        $application->delete();
        return redirect()->route('applications.index')->with('success', 'Application deleted successfully.');
    }
}
