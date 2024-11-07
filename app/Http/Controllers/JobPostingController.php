<?php

namespace App\Http\Controllers;

use App\Models\JobPosting; // Mengimpor model JobPosting
use Illuminate\Http\Request;

class JobPostingController extends Controller
{
    public function index()
    {
        // Menampilkan seluruh data job posting
        $job_postings = JobPosting::all();
        return view('job_postings.index', compact('job_postings'));
    }

    public function create()
    {
        // Menampilkan halaman form untuk menambah job posting
        return view('job_postings.create');
    }

    public function store(Request $request)
    {
        // Validasi data yang dikirim oleh form
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'status' => 'required|in:open,closed',
            'nama_perusahaan' => 'required|string|max:255', // Tambahkan validasi untuk nama_perusahaan
        ]);

        // Ambil data yang diperlukan saja
        $data = $request->only(['judul', 'deskripsi', 'status', 'nama_perusahaan']);

        // Menyimpan data job posting ke dalam database
        JobPosting::create($data);

        // Redirect ke halaman job postings dengan pesan sukses
        return redirect()->route('job_postings.index')->with('success', 'Job Posting created successfully.');
    }

    public function edit(JobPosting $job_posting)
    {
        // Menampilkan halaman edit dengan data job posting yang ingin diubah
        return view('job_postings.edit', compact('job_posting'));
    }

    public function update(Request $request, JobPosting $job_posting)
    {
        // Validasi data yang dikirim oleh form
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'status' => 'required|in:open,closed',
            'nama_perusahaan' => 'required|string|max:255', // Tambahkan validasi untuk nama_perusahaan
        ]);

        // Ambil data yang diperlukan saja
        $data = $request->only(['judul', 'deskripsi', 'status', 'nama_perusahaan']);

        // Update data job posting
        $job_posting->update($data);

        // Redirect ke halaman job postings dengan pesan sukses
        return redirect()->route('job_postings.index')->with('success', 'Job Posting updated successfully.');
    }

    public function destroy(JobPosting $job_posting)
    {
        // Menghapus job posting yang dipilih
        $job_posting->delete();

        // Redirect ke halaman job postings dengan pesan sukses
        return redirect()->route('job_postings.index')->with('success', 'Job Posting deleted successfully.');
    }
}
