<?php

namespace App\Http\Controllers;

use App\Models\Pelamar;
use Illuminate\Http\Request;

class PelamarController extends Controller
{
    public function index()
    {
        $pelamars = Pelamar::all();
        return view('pelamar.index', compact('pelamars'));
    }

    public function create()
    {
        return view('pelamar.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|unique:pelamars',
            'nomor_telepon' => 'required|string|max:15',
        ]);

        Pelamar::create($request->all());
        return redirect()->route('pelamar.index')
                         ->with('success', 'Pelamar berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $pelamar = Pelamar::findOrFail($id);
        return view('pelamar.edit', compact('pelamar'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|unique:pelamars,email,' . $id,
            'nomor_telepon' => 'required|string|max:15',
        ]);

        $pelamar = Pelamar::findOrFail($id);
        $pelamar->update($request->all());
        return redirect()->route('pelamar.index')
                         ->with('success', 'Pelamar berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $pelamar = Pelamar::findOrFail($id);
        $pelamar->delete();
        return redirect()->route('pelamar.index')
                         ->with('success', 'Pelamar berhasil dihapus.');
    }
}
