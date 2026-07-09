<?php

namespace App\Http\Controllers;

use App\Models\Tendik;
use Illuminate\Http\Request;

class TendikController extends Controller
{
    public function index()
    {
        $tendiks = Tendik::latest()->get();

        return view('tendik.index', compact('tendiks'));
    }

    public function create()
    {
        return view('tendik.create');
    }

    public function store(Request $request)
    {
        $request->validate([
    'niy' => 'required|unique:tendiks',
    'nik_ktp' => 'nullable',
    'nama' => 'required',
    'tempat_lahir' => 'required',
    'tanggal_lahir' => 'required',
    'jenis_kelamin' => 'required',
    'agama' => 'required',
    'status' => 'required',
    'golongan' => 'nullable',
    'pendidikan' => 'required',
    'jabatan' => 'required',
    'mulai_bekerja' => 'required',
    'alamat' => 'nullable',
        ]);

        Tendik::create($request->all());

        return redirect()
            ->route('tendik.index')
            ->with('success', 'Data Tendik berhasil ditambahkan.');
    }

    public function show(Tendik $tendik)
    {
        return view('tendik.show', compact('tendik'));
    }

    public function edit(Tendik $tendik)
    {
        return view('tendik.edit', compact('tendik'));
    }

    public function update(Request $request, Tendik $tendik)
    {
        $request->validate([
            'niy' => 'required|unique:tendiks,niy,' . $tendik->id,
            'nik_ktp' => 'nullable',
            'nama' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
            'status' => 'required',
            'pendidikan' => 'required',
            'jabatan' => 'required',
            'mulai_bekerja' => 'required',
            'alamat' => 'nullable',
        ]);

        $tendik->update($request->all());

        return redirect()
            ->route('tendik.index')
            ->with('success', 'Data Tendik berhasil diperbarui.');
    }

    public function destroy(Tendik $tendik)
    {
        $tendik->delete();

        return redirect()
            ->route('tendik.index')
            ->with('success', 'Data Tendik berhasil dihapus.');
    }
}