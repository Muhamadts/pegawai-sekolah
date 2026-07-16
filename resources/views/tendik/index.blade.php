@extends('layouts.app')

@section('content')

<div class="container-fluid">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>

            <h2 class="fw-bold mb-1">

                Data Tenaga Kependidikan

            </h2>

            <small class="text-secondary">

                Kelola data tendik SD Plus IGM Palembang

            </small>

        </div>

       <button
    class="btn btn-success"
    data-bs-toggle="modal"
    data-bs-target="#modalTendik">

    <i class="bi bi-plus"></i>

    Tambah Data

</button>

    </div>


    <div class="card tendik-card">

        <table class="table tendik-table align-middle">

           <thead class="tendik-table-head">

                <tr>

                    <th width="60">No</th>

                    <th>NIY</th>

                    <th>Nama</th>

                    <th>Jabatan</th>

                    <th>Jenis Kelamin</th>

                    <th width="120" class="text-center">

                        Aksi

                    </th>

                </tr>

            </thead>

            <tbody>

            @forelse($tendiks as $index => $tendik)

                <tr>

                    <td>{{ $index+1 }}</td>

                    <td>{{ $tendik->niy }}</td>

                    <td>{{ $tendik->nama }}</td>

                    <td>{{ $tendik->jabatan }}</td>

                    <td>

                        {{ $tendik->jenis_kelamin=='L' ? 'Laki-laki' : 'Perempuan' }}

                    </td>

                    <td>

                        <div class="aksi-group">

                            <a href="{{ route('tendik.show',$tendik->id) }}"
                                class="icon-btn text-primary">

                                <i class="bi bi-eye"></i>

                            </a>

                            <a href="{{ route('tendik.edit',$tendik->id) }}"
                                class="icon-btn text-warning">

                                <i class="bi bi-pencil-square"></i>

                            </a>

                            <form
                                action="{{ route('tendik.destroy',$tendik->id) }}"
                                method="POST">

                                @csrf

                                @method('DELETE')

                                <button
                                    onclick="return confirm('Hapus data ini?')"
                                    class="icon-btn text-danger border-0 bg-transparent">

                                    <i class="bi bi-trash"></i>

                                </button>

                            </form>

                        </div>

                    </td>

                </tr>

            @empty

                <tr>

                    <td colspan="6"
                        class="text-center py-5">

                        Belum ada data Tendik.

                    </td>

                </tr>

            @endforelse

            </tbody>

        </table>

    </div>

</div>
<!-- =========================
     Modal Tambah Tendik
========================= -->

<div
class="modal fade"
id="modalTendik"
tabindex="-1"
aria-hidden="true">

<div class="modal-dialog modal-xl modal-dialog-scrollable">

<div class="modal-content rounded-4 border-0">

<div class="modal-header">

<h3 class="fw-bold">

Tambah Data Tendik

</h3>

<button
type="button"
class="btn-close"
data-bs-dismiss="modal"></button>

</div>

<div class="modal-body">

<form
action="{{ route('tendik.store') }}"
method="POST"
enctype="multipart/form-data">

@csrf

<div class="row">

<div class="col-md-6 mb-3">

<label class="form-label">

NIY

</label>

<input
type="text"
name="niy"
class="form-control"
required>

</div>

<div class="col-md-6 mb-3">

<label class="form-label">

NIK KTP

</label>

<input
type="text"
name="nik_ktp"
class="form-control">

</div>

<div class="col-12 mb-3">

<label class="form-label">

Nama Lengkap

</label>

<input
type="text"
name="nama"
class="form-control"
required>

</div>

<div class="col-md-6 mb-3">

<label class="form-label">

Tempat Lahir

</label>

<input
type="text"
name="tempat_lahir"
class="form-control"
required>

</div>

<div class="col-md-6 mb-3">

<label class="form-label">

Tanggal Lahir

</label>

<input
type="date"
name="tanggal_lahir"
class="form-control"
required>

</div>

<div class="col-md-6 mb-3">

<label class="form-label">

Jenis Kelamin

</label>

<select
name="jenis_kelamin"
class="form-select"
required>

<option value="">
-- Pilih --
</option>

<option value="L">
Laki-laki
</option>

<option value="P">
Perempuan
</option>

</select>

</div>

<div class="col-md-6 mb-3">

<label class="form-label">

Status

</label>

<select
name="status"
class="form-select"
required>

<option value="">
-- Pilih --
</option>

<option value="Tetap">
Tetap
</option>

<option value="Honorer">
Honorer
</option>

</select>

</div>

<!-- Agama -->
<div class="col-md-6 mb-3">

    <label class="form-label">
        Agama
    </label>

    <select
        name="agama"
        class="form-select"
        required>

        <option value="">-- Pilih --</option>
        <option value="Islam">Islam</option>
        <option value="Kristen">Kristen</option>
        <option value="Katolik">Katolik</option>
        <option value="Hindu">Hindu</option>
        <option value="Budha">Budha</option>
        <option value="Konghucu">Konghucu</option>

    </select>

</div>

<!-- Golongan -->
<div class="col-md-6 mb-3">

    <label class="form-label">
        Golongan
    </label>

    <select
        name="golongan"
        class="form-select">

        <option value="">-- Pilih --</option>

        <option>I/a</option>
        <option>I/b</option>
        <option>I/c</option>
        <option>I/d</option>

        <option>II/a</option>
        <option>II/b</option>
        <option>II/c</option>
        <option>II/d</option>

        <option>III/a</option>
        <option>III/b</option>
        <option>III/c</option>
        <option>III/d</option>

        <option>IV/a</option>
        <option>IV/b</option>
        <option>IV/c</option>
        <option>IV/d</option>
        <option>IV/e</option>

    </select>

</div>

<!-- Pendidikan -->
<div class="col-md-6 mb-3">

    <label class="form-label">
        Pendidikan Terakhir
    </label>

    <select
        name="pendidikan"
        class="form-select"
        required>

        <option value="">-- Pilih --</option>

        <option value="SMA">SMA</option>
        <option value="D3">D3</option>
        <option value="S1">S1</option>
        <option value="S2">S2</option>
        <option value="S3">S3</option>

    </select>

</div>

<!-- Jabatan -->
<div class="col-md-6 mb-3">

    <label class="form-label">
        Jabatan
    </label>

    <input
        type="text"
        name="jabatan"
        class="form-control"
        value="{{ old('jabatan') }}"
        required>

</div>

<!-- Mulai Bekerja -->
<div class="col-md-6 mb-3">

    <label class="form-label">
        Mulai Bekerja
    </label>

    <input
        type="date"
        name="mulai_bekerja"
        class="form-control"
        value="{{ old('mulai_bekerja') }}"
        required>

</div>

<!-- Kolom kanan dikosongkan agar layout sama seperti desain -->
<div class="col-md-6 mb-3"></div>

<!-- Alamat -->
<div class="col-12 mb-3">

    <label class="form-label">
        Alamat
    </label>

    <textarea
        name="alamat"
        rows="3"
        class="form-control">{{ old('alamat') }}</textarea>

</div>
<div class="col-md-6 mb-3">
    <label class="form-label">File SK</label>

    <input
        type="file"
        name="file_sk[]"
        class="form-control"
        multiple
        accept=".pdf,.jpg,.jpeg,.png">

    <small class="text-muted">
        Bisa upload beberapa file. Format PDF, JPG, JPEG, PNG. Maksimal 5MB per file.
    </small>
</div>

<div class="col-md-6 mb-3">
    <label class="form-label">File Piagam / Sertifikat</label>

    <input
        type="file"
        name="file_sertifikat[]"
        class="form-control"
        multiple
        accept=".pdf,.jpg,.jpeg,.png">

    <small class="text-muted">
        Bisa upload beberapa file. Format PDF, JPG, JPEG, PNG. Maksimal 5MB per file.
    </small>
</div>
</div>

<div class="mt-4 text-end">

    <button
        type="button"
        class="btn btn-secondary"
        data-bs-dismiss="modal">

        Batal

    </button>

    <button
        type="submit"
        class="btn btn-success">

        Simpan

    </button>

</div>

</form>

</div>

</div>

</div>

@endsection