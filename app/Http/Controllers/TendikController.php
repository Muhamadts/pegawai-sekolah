<?php

namespace App\Http\Controllers;

use App\Models\Tendik;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        $validated = $request->validate([
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
            'file_sk.*' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:5120',
            'file_sertifikat.*' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:5120',
        ]);

        $validated['file_sk'] = $this->uploadFiles($request, 'file_sk', 'dokumen/tendik/sk');
        $validated['file_sertifikat'] = $this->uploadFiles($request, 'file_sertifikat', 'dokumen/tendik/sertifikat');

        Tendik::create($validated);

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
        $validated = $request->validate([
            'niy' => 'required|unique:tendiks,niy,' . $tendik->id,
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
            'file_sk.*' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:5120',
            'file_sertifikat.*' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:5120',
        ]);

        $validated['file_sk'] = array_merge(
            $tendik->file_sk ?? [],
            $this->uploadFiles($request, 'file_sk', 'dokumen/tendik/sk')
        );

        $validated['file_sertifikat'] = array_merge(
            $tendik->file_sertifikat ?? [],
            $this->uploadFiles($request, 'file_sertifikat', 'dokumen/tendik/sertifikat')
        );

        $tendik->update($validated);

        return redirect()
            ->route('tendik.index')
            ->with('success', 'Data Tendik berhasil diperbarui.');
    }

    public function destroy(Tendik $tendik)
    {
        $this->deleteFiles($tendik->file_sk ?? []);
        $this->deleteFiles($tendik->file_sertifikat ?? []);

        $tendik->delete();

        return redirect()
            ->route('tendik.index')
            ->with('success', 'Data Tendik berhasil dihapus.');
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