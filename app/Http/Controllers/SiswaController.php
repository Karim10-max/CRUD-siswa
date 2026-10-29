<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */ 

    public function index()
    {
        $siswa = Siswa::all();
        return view('siswa.index', compact('siswa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('siswa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    $validated = $request->validate([
        'nis'     => 'required|numeric|digits_between:1,20|unique:tb_siswa,nis',
        'nama'    => 'required|string|max:100',
        'rombel'  => 'required|string|max:50',
        'rayon'   => 'required|string|max:50',
        'no_telp' => 'required|numeric|digits_between:10,15',
        'alamat'  => 'required|string',
    ]);

    Siswa::create($validated);

    return redirect()->route('siswa.index')->with('success', 'Data berhasil ditambahkan');

    }

    /**
     * Display the specified resource.
     */
    public function show(Siswa $siswa)
    {
        return view('siswa.show', compact('siswa'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Siswa $siswa)
    {
        return view('siswa.edit', compact('siswa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Siswa $siswa)
    {
        $validated = $request->validate([
            'nis'     => 'required|numeric|digits_between:1,20|unique:tb_siswa,nis,' . $siswa->id,
            'nama'    => 'required|string|max:100',
            'rombel'  => 'required|string|max:50',
            'rayon'   => 'required|string|max:50',
            'no_telp' => 'required|numeric|digits_between:10,15',
            'alamat'  => 'required|string',
        ]);

        $siswa->update($validated);

        return redirect()->route('siswa.index')->with('success', 'Data berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Siswa $siswa)
    {
        $siswa->delete();

        return redirect()->route('siswa.index')->with('success', 'Data berhasil dihapus');
    }
}
