<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        $validated = $request->validate([
            'niy' => 'required|unique:gurus',
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
            'mulai_mengajar' => 'required',
            'alamat' => 'nullable',
            'file_sk.*' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:5120',
            'file_sertifikat.*' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:5120',
        ]);

        $validated['file_sk'] = $this->uploadFiles($request, 'file_sk', 'dokumen/guru/sk');
        $validated['file_sertifikat'] = $this->uploadFiles($request, 'file_sertifikat', 'dokumen/guru/sertifikat');

        Guru::create($validated);

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
        $validated = $request->validate([
            'niy' => 'required|unique:gurus,niy,' . $guru->id,
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
            'mulai_mengajar' => 'required',
            'alamat' => 'nullable',
            'file_sk.*' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:5120',
            'file_sertifikat.*' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:5120',
        ]);

        $validated['file_sk'] = array_merge(
            $guru->file_sk ?? [],
            $this->uploadFiles($request, 'file_sk', 'dokumen/guru/sk')
        );

        $validated['file_sertifikat'] = array_merge(
            $guru->file_sertifikat ?? [],
            $this->uploadFiles($request, 'file_sertifikat', 'dokumen/guru/sertifikat')
        );

        $guru->update($validated);

        return redirect()
            ->route('guru.index')
            ->with('success', 'Data guru berhasil diubah.');
    }

    public function destroy(Guru $guru)
    {
        $this->deleteFiles($guru->file_sk ?? []);
        $this->deleteFiles($guru->file_sertifikat ?? []);

        $guru->delete();

        return redirect()
            ->route('guru.index')
            ->with('success', 'Data guru berhasil dihapus.');
    }

    private function uploadFiles(Request $request, string $field, string $folder): array
    {
        if (! $request->hasFile($field)) {
            return [];
        }

        return collect($request->file($field))
            ->map(fn ($file) => $file->store($folder, 'public'))
            ->toArray();
    }

    private function deleteFiles(array $files): void
    {
        foreach ($files as $file) {
            Storage::disk('public')->delete($file);
        }
    }
}