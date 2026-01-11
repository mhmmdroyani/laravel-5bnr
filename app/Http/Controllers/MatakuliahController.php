<?php

namespace App\Http\Controllers;

use App\Models\Matakuliah;
use Illuminate\Http\Request;

class MatakuliahController extends Controller
{
    public function index()
    {
        $matkuls = Matakuliah::all();
        return view('matakuliah.index', ['matkuls' => $matkuls]);
    }

    public function create()
    {
        return view('matakuliah.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'kode_mk' => 'required|string|unique:matakuliah,kode_mk',
            'nama_mk' => 'required|string',
            'jumlah_sks' => 'required|integer|min:0',
            'prodi_id' => 'nullable|integer|exists:prodi,id',
        ]);

        Matakuliah::create($validated);

        return redirect()->route('matakuliah.index')->with('success', 'Matakuliah berhasil ditambahkan');
    }

    public function show(string $id)
    {
        $matkul = Matakuliah::findOrFail($id);
        return view('matakuliah.show', ['matkul' => $matkul]);
    }

    public function edit(string $id)
    {
        $matkul = Matakuliah::findOrFail($id);
        return view('matakuliah.edit', ['matkul' => $matkul]);
    }

    public function update(Request $request, string $id)
    {
        $matkul = Matakuliah::findOrFail($id);

        $validated = $request->validate([
            'kode_mk' => 'required|string|unique:matakuliah,kode_mk,' . $matkul->id,
            'nama_mk' => 'required|string',
            'jumlah_sks' => 'required|integer|min:0',
            'prodi_id' => 'nullable|integer|exists:prodi,id',
        ]);

        $matkul->update($validated);

        return redirect()->route('matakuliah.index')->with('success', 'Matakuliah berhasil diperbarui');
    }

    public function destroy(string $id)
    {
        $matkul = Matakuliah::findOrFail($id);
        $matkul->delete();

        return redirect()->route('matakuliah.index')->with('success', 'Matakuliah berhasil dihapus');
    }
}
