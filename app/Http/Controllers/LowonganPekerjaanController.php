<?php

namespace App\Http\Controllers;

use App\Models\LowonganPekerjaan;
use Illuminate\Http\Request;

class LowonganPekerjaanController extends Controller
{
    public function index()
    {
        $lowongans = LowonganPekerjaan::all();
        return view('lowongan.index', compact('lowongans'));
    }

    public function create()
    {
        return view('lowongan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required',
            'status' => 'required|in:aktif,nonaktif',
        ]);

        LowonganPekerjaan::create($request->all());
        return redirect()->route('lowongan.index')
                         ->with('success', 'Lowongan pekerjaan berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $lowongan = LowonganPekerjaan::findOrFail($id);
        return view('lowongan.edit', compact('lowongan'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required',
            'status' => 'required|in:aktif,nonaktif',
        ]);

        $lowongan = LowonganPekerjaan::findOrFail($id);
        $lowongan->update($request->all());
        return redirect()->route('lowongan.index')
                         ->with('success', 'Lowongan pekerjaan berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $lowongan = LowonganPekerjaan::findOrFail($id);
        $lowongan->delete();
        return redirect()->route('lowongan.index')
                         ->with('success', 'Lowongan pekerjaan berhasil dihapus.');
    }
}
