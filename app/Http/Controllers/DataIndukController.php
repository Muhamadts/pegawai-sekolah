<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataInduk;
use App\Models\Guru;
use App\Models\Tendik;

class DataIndukController extends Controller
{
    /**
     * Menampilkan seluruh data guru dan tendik
     */
    public function index(Request $request)
    {
        $guru = Guru::select(
                'id',
                'niy',
                'nama',
                'jabatan',
                'jenis_kelamin'
            )
            ->get()
            ->map(function ($item) {

                return [

                    'id' => $item->id,

                    'tipe' => 'Guru',

                    'niy' => $item->niy,

                    'nama' => $item->nama,

                    'jabatan' => $item->jabatan,

                    'jenis_kelamin' => $item->jenis_kelamin,

                ];

            });

        $tendik = Tendik::select(
                'id',
                'niy',
                'nama',
                'jabatan',
                'jenis_kelamin'
            )
            ->get()
            ->map(function ($item) {

                return [

                    'id' => $item->id,

                    'tipe' => 'Tendik',

                    'niy' => $item->niy,

                    'nama' => $item->nama,

                    'jabatan' => $item->jabatan,

                    'jenis_kelamin' => $item->jenis_kelamin,

                ];

            });

        $pegawai = $guru->merge($tendik);

        if ($request->filled('jenis')) {

            $pegawai = $pegawai->where('tipe', $request->jenis);

        }

        return view('data-induk.index', compact('pegawai'));
    }

    /**
     * Form tambah data induk
     */
    public function create()
    {
        $gurus = Guru::orderBy('nama')->get();

        $tendiks = Tendik::orderBy('nama')->get();

        return view(
            'data-induk.create',
            compact(
                'gurus',
                'tendiks'
            )
        );
    }

    /**
     * Simpan data
     */
    public function store(Request $request)
    {
        $request->validate([

            'jenis' => 'required',

            'pegawai_id' => 'required',

        ]);

        DataInduk::create([

            'jenis' => $request->jenis,

            'pegawai_id' => $request->pegawai_id,

        ]);

        return redirect()
            ->route('data-induk.index')
            ->with('success', 'Data berhasil ditambahkan.');
    }

    /**
     * Detail
     */
    public function show(DataInduk $dataInduk)
    {
        return view('data-induk.show', compact('dataInduk'));
    }

    /**
     * Form edit
     */
    public function edit(DataInduk $dataInduk)
    {
        $gurus = Guru::orderBy('nama')->get();

        $tendiks = Tendik::orderBy('nama')->get();

        return view(
            'data-induk.edit',
            compact(
                'dataInduk',
                'gurus',
                'tendiks'
            )
        );
    }

    /**
     * Update
     */
    public function update(Request $request, DataInduk $dataInduk)
    {
        $request->validate([

            'jenis' => 'required',

            'pegawai_id' => 'required',

        ]);

        $dataInduk->update([

            'jenis' => $request->jenis,

            'pegawai_id' => $request->pegawai_id,

        ]);

        return redirect()
            ->route('data-induk.index')
            ->with('success', 'Data berhasil diperbarui.');
    }

    /**
     * Hapus
     */
    public function destroy(DataInduk $dataInduk)
    {
        $dataInduk->delete();

        return redirect()
            ->route('data-induk.index')
            ->with('success', 'Data berhasil dihapus.');
    }
}