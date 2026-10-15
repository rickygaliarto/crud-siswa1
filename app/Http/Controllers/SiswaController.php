<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class SiswaController extends Controller
{
    public function index()
    {
        $siswa = Siswa::orderBy('nama')->get();

        return view('siswa.index', compact('siswa'));
    }

    public function create()
    {
        return view('siswa.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nis' => [
                'required', 'regex:/^[0-9]+$/',
                'max:20', 'unique:tb_siswa,nis'
            ],
            'nama' => 'required|string|max:100',
            'rombel' => 'required|string|max:50',
            'rayon' => 'required|string|max:50',
            'no_telp' => [
                'required', 'regex:/^[0-9]+$/', 'max:20'
            ],
            'alamat' => 'required|string',
        ]);

        Siswa::create($data);

        return redirect()->route('siswa.index')
            ->with('success', 'Data siswa berhasil ditambahkan.');
    }

    public function show(Siswa $siswa)
    {
        return view('siswa.show', compact('siswa'));
    }

    public function edit(Siswa $siswa)
    {
        return view('siswa.edit', compact('siswa'));
    }

    public function update(Request $request, Siswa $siswa)
    {
        $data = $request->validate([
            'nis' => [
                'required', 'regex:/^[0-9]+$/', 'max:20',
                Rule::unique('tb_siswa', 'nis')
                    ->ignore($siswa->nis, 'nis')
            ],
            'nama' => 'required|string|max:100',
            'rombel' => 'required|string|max:50',
            'rayon' => 'required|string|max:50',
            'no_telp' => [
                'required', 'regex:/^[0-9]+$/', 'max:20'
            ],
            'alamat' => 'required|string',
        ]);

        $siswa->update($data);

        return redirect()->route('siswa.index')
            ->with('success', 'Data siswa berhasil diubah.');
    }

    public function destroy(Siswa $siswa)
    {
        $siswa->delete();

        return redirect()->route('siswa.index')
            ->with('success', 'Data siswa berhasil dihapus.');
    }
}