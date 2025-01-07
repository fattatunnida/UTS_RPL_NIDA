<?php

namespace App\Http\Controllers;

use App\Models\LamaranPekerjaan;
use App\Models\LowonganPekerjaan;
use App\Models\Pelamar;
use Illuminate\Http\Request;

class LamaranPekerjaanController extends Controller
{
    public function index()
    {
        $lamarans = LamaranPekerjaan::with(['lowongan', 'pelamar'])->get();
        return view('lamaran.index', compact('lamarans'));
    }

    public function create()
    {
        $lowongans = LowonganPekerjaan::all();
        $pelamars = Pelamar::all();
        return view('lamaran.create', compact('lowongans', 'pelamars'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_lowongan' => 'required|exists:lowongan_pekerjaans,id',
            'id_pelamar' => 'required|exists:pelamars,id',
            'tanggal_lamaran' => 'required|date',
        ]);

        LamaranPekerjaan::create($request->all());
        return redirect()->route('lamaran.index')
                         ->with('success', 'Lamaran pekerjaan berhasil ditambahkan.');
    }

    public function destroy($id)
    {
        $lamaran = LamaranPekerjaan::findOrFail($id);
        $lamaran->delete();
        return redirect()->route('lamaran.index')
                         ->with('success', 'Lamaran pekerjaan berhasil dihapus.');
    }
}
