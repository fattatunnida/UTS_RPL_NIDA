<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use Illuminate\Http\Request;

class ApplicantController extends Controller
{
    /**
     * Menampilkan daftar semua pelamar.
     */
    public function index()
    {
        $applicants = Applicant::all();
        return view('applicants.index', compact('applicants'));
    }

    /**
     * Menampilkan form untuk menambah pelamar baru.
     */
    public function create()
    {
        return view('applicants.create');
    }

    /**
     * Menyimpan data pelamar baru ke database.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|unique:applicants,email',
            'telepon' => 'required|string|max:15',
        ]);

        Applicant::create($request->all());

        return redirect()->route('applicants.index')->with('success', 'Data pelamar berhasil ditambahkan.');
    }

    /**
     * Menampilkan form untuk mengedit data pelamar.
     */
    public function edit(Applicant $applicant)
    {
        return view('applicants.edit', compact('applicant'));
    }

    /**
     * Memperbarui data pelamar di database.
     */
    public function update(Request $request, Applicant $applicant)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|unique:applicants,email,' . $applicant->id,
            'telepon' => 'required|string|max:15',
        ]);

        $applicant->update($request->all());

        return redirect()->route('applicants.index')->with('success', 'Data pelamar berhasil diperbarui.');
    }

    /**
     * Menghapus data pelamar dari database.
     */
    public function destroy(Applicant $applicant)
    {
        $applicant->delete();
        return redirect()->route('applicants.index')->with('success', 'Data pelamar berhasil dihapus.');
    }
}
