<?php

namespace App\Http\Controllers;

use App\Models\Prodi;
use Illuminate\Http\Request;

class ProdiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $banyak_prodi = Prodi::all();
        return view('prodi.index', [
            'banyak_prodi' => $banyak_prodi
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('prodi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'kode_prodi' => 'required|string|unique:prodi,kode_prodi',
            'nama_prodi' => 'required|string',
            'nama_kaprodi' => 'required|string',
        ]);

        Prodi::create($validated);

        return redirect()->route('prodi.index')->with('success', 'Prodi berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $prodi = Prodi::findOrFail($id);
        return view('prodi.show', [
            'prodi' => $prodi
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $prodi = Prodi::findOrFail($id);
        return view('prodi.edit', [
            'prodi' => $prodi
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $prodi = Prodi::findOrFail($id);

        $validated = $request->validate([
            'kode_prodi' => 'required|string|unique:prodi,kode_prodi,' . $prodi->id,
            'nama_prodi' => 'required|string',
            'nama_kaprodi' => 'required|string',
        ]);

        $prodi->update($validated);

        return redirect()->route('prodi.index')->with('success', 'Prodi berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $prodi = Prodi::findOrFail($id);
        $prodi->delete();

        return redirect()->route('prodi.index')->with('success', 'Prodi berhasil dihapus');
    }
}
