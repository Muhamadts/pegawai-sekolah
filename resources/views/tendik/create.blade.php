@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">

    <div>

        <h2 class="fw-bold">
            Tambah Tenaga Kependidikan
        </h2>

        <p class="text-secondary">
            Tambahkan data tenaga kependidikan baru
        </p>

    </div>

    <a href="{{ route('tendik.index') }}" class="btn btn-secondary">

        <i class="bi bi-arrow-left"></i>

        Kembali

    </a>

</div>

<div class="card shadow-sm border-0 rounded-4">

    <div class="card-body">

        <form action="{{ route('tendik.store') }}" method="POST" enctype="multipart/form-data">

            @csrf

            <div class="row">

                <!-- NIY -->
                <div class="col-md-6 mb-3">

                    <label>NIY</label>

                    <input
                        type="text"
                        name="niy"
                        class="form-control"
                        value="{{ old('niy') }}"
                        required>

                </div>

                <!-- NIK -->
                <div class="col-md-6 mb-3">

                    <label>NIK KTP</label>

                    <input
                        type="text"
                        name="nik_ktp"
                        class="form-control"
                        value="{{ old('nik_ktp') }}">

                </div>

  <!-- Nama Lengkap -->
<div class="col-12 mb-3">

    <label>Nama Lengkap</label>

    <input
        type="text"
        name="nama"
        class="form-control"
        value="{{ old('nama') }}"
        required>

</div>

<!-- Tempat Lahir -->
<div class="col-md-6 mb-3">

    <label>Tempat Lahir</label>

    <input
        type="text"
        name="tempat_lahir"
        class="form-control"
        value="{{ old('tempat_lahir') }}"
        required>

</div>

<!-- Tanggal Lahir -->
<div class="col-md-6 mb-3">

    <label>Tanggal Lahir</label>

    <input
        type="date"
        name="tanggal_lahir"
        class="form-control"
        value="{{ old('tanggal_lahir') }}"
        required>

</div>

<!-- Jenis Kelamin -->
<div class="col-md-6 mb-3">

    <label>Jenis Kelamin</label>

    <select
        name="jenis_kelamin"
        class="form-select"
        required>

        <option value="">-- Pilih --</option>

        <option value="L" {{ old('jenis_kelamin')=='L' ? 'selected' : '' }}>
            Laki-laki
        </option>

        <option value="P" {{ old('jenis_kelamin')=='P' ? 'selected' : '' }}>
            Perempuan
        </option>

    </select>

</div>

<!-- Status -->
<div class="col-md-6 mb-3">

    <label>Status</label>

    <select
        name="status"
        class="form-select"
        required>

        <option value="">-- Pilih --</option>

        <option value="Tetap" {{ old('status')=='Tetap' ? 'selected' : '' }}>
            Tetap
        </option>

        <option value="Honorer" {{ old('status')=='Honorer' ? 'selected' : '' }}>
            Honorer
        </option>

    </select>

</div>

<!-- Agama -->
<div class="col-md-6 mb-3">

    <label>Agama</label>

    <select
        name="agama"
        class="form-select"
        required>

        <option value="">-- Pilih --</option>

        <option value="Islam" {{ old('agama')=='Islam' ? 'selected' : '' }}>
            Islam
        </option>

        <option value="Kristen" {{ old('agama')=='Kristen' ? 'selected' : '' }}>
            Kristen
        </option>

        <option value="Katolik" {{ old('agama')=='Katolik' ? 'selected' : '' }}>
            Katolik
        </option>

        <option value="Hindu" {{ old('agama')=='Hindu' ? 'selected' : '' }}>
            Hindu
        </option>

        <option value="Budha" {{ old('agama')=='Budha' ? 'selected' : '' }}>
            Budha
        </option>

        <option value="Konghucu" {{ old('agama')=='Konghucu' ? 'selected' : '' }}>
            Konghucu
        </option>

    </select>

</div>

<!-- Golongan -->
<div class="col-md-6 mb-3">

    <label>Golongan</label>

    <select
        name="golongan"
        class="form-select">

        <option value="">-- Pilih --</option>

        <option value="I/a" {{ old('golongan')=='I/a' ? 'selected' : '' }}>I/a</option>
        <option value="I/b" {{ old('golongan')=='I/b' ? 'selected' : '' }}>I/b</option>
        <option value="I/c" {{ old('golongan')=='I/c' ? 'selected' : '' }}>I/c</option>
        <option value="I/d" {{ old('golongan')=='I/d' ? 'selected' : '' }}>I/d</option>

        <option value="II/a" {{ old('golongan')=='II/a' ? 'selected' : '' }}>II/a</option>
        <option value="II/b" {{ old('golongan')=='II/b' ? 'selected' : '' }}>II/b</option>
        <option value="II/c" {{ old('golongan')=='II/c' ? 'selected' : '' }}>II/c</option>
        <option value="II/d" {{ old('golongan')=='II/d' ? 'selected' : '' }}>II/d</option>

        <option value="III/a" {{ old('golongan')=='III/a' ? 'selected' : '' }}>III/a</option>
        <option value="III/b" {{ old('golongan')=='III/b' ? 'selected' : '' }}>III/b</option>
        <option value="III/c" {{ old('golongan')=='III/c' ? 'selected' : '' }}>III/c</option>
        <option value="III/d" {{ old('golongan')=='III/d' ? 'selected' : '' }}>III/d</option>

        <option value="IV/a" {{ old('golongan')=='IV/a' ? 'selected' : '' }}>IV/a</option>
        <option value="IV/b" {{ old('golongan')=='IV/b' ? 'selected' : '' }}>IV/b</option>
        <option value="IV/c" {{ old('golongan')=='IV/c' ? 'selected' : '' }}>IV/c</option>
        <option value="IV/d" {{ old('golongan')=='IV/d' ? 'selected' : '' }}>IV/d</option>
        <option value="IV/e" {{ old('golongan')=='IV/e' ? 'selected' : '' }}>IV/e</option>

    </select>

</div>

<!-- Pendidikan -->
<div class="col-md-6 mb-3">

    <label>Pendidikan Terakhir</label>

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

<!-- Kosongkan kolom kanan -->
<div class="col-md-6"></div>

<!-- Baris baru -->
<div class="w-100"></div>

<!-- Jabatan -->
<div class="col-12 mb-3">

    <label>Jabatan</label>

    <input
        type="text"
        name="jabatan"
        class="form-control"
        value="{{ old('jabatan') }}"
        required>

</div>

<!-- Mulai Bekerja -->
<div class="col-md-6 mb-3">

    <label>Mulai Bekerja</label>

    <input
        type="date"
        name="mulai_bekerja"
        class="form-control"
        value="{{ old('mulai_bekerja') }}"
        required>

</div>

<div class="col-md-6"></div>

<!-- Alamat -->
<div class="col-12 mb-3">

    <label>Alamat</label>

    <textarea
        name="alamat"
        rows="3"
        class="form-control">{{ old('alamat') }}</textarea>

</div>


    <button
        type="submit"
        class="btn btn-success">

        <i class="bi bi-check-lg"></i>

        Simpan Data

    </button>

</div>

        </form>

    </div>

</div>

@endsection