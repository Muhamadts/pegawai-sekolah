<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function index()
    {
        $gurus = Guru::latest()->paginate(10);

        return view('guru.index', compact('gurus'));
    }

    public function create()
    {
        return view('guru.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'niy'            => 'required|unique:gurus',
            'nik_ktp'        => 'nullable',
            'nama'           => 'required',
            'tempat_lahir'   => 'required',
            'tanggal_lahir'  => 'required',
            'jenis_kelamin'  => 'required',
            'agama'          => 'required',
            'status'         => 'required',
            'golongan'       => 'nullable',
            'pendidikan'     => 'required',
            'jabatan'        => 'required',
            'mulai_mengajar' => 'required',
            'alamat'         => 'nullable',
        ]);

        Guru::create($request->all());

        return redirect()
            ->route('guru.index')
            ->with('success', 'Data guru berhasil ditambahkan.');
    }
    public function show(Guru $guru)
    {
        return view('guru.show', compact('guru'));
    }
    public function edit(Guru $guru)
    {
        return view('guru.edit', compact('guru'));
    }

    public function update(Request $request, Guru $guru)
    {
        $request->validate([
            'niy'            => 'required|unique:gurus,niy,' . $guru->id,
            'nik_ktp'        => 'nullable',
            'nama'           => 'required',
            'tempat_lahir'   => 'required',
            'tanggal_lahir'  => 'required',
            'jenis_kelamin'  => 'required',
            'agama'          => 'required',
            'status'         => 'required',
            'golongan'       => 'nullable',
            'pendidikan'     => 'required',
            'jabatan'        => 'required',
            'mulai_mengajar' => 'required',
            'alamat'         => 'nullable',
        ]);

        $guru->update($request->all());

        return redirect()
            ->route('guru.index')
            ->with('success', 'Data guru berhasil diubah.');
    }

    public function destroy(Guru $guru)
    {
        $guru->delete();

        return redirect()
            ->route('guru.index')
            ->with('success', 'Data guru berhasil dihapus.');
    }
}