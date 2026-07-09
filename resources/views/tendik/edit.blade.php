@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">

    <div>

        <h2 class="fw-bold">
            Edit Tenaga Kependidikan
        </h2>

        <p class="text-secondary">
            Ubah data tenaga kependidikan
        </p>

    </div>

    <a href="{{ route('tendik.index') }}" class="btn btn-secondary">

        <i class="bi bi-arrow-left"></i>

        Kembali

    </a>

</div>

<div class="card shadow-sm border-0 rounded-4">

    <div class="card-body">

        <form action="{{ route('tendik.update',$tendik->id) }}" method="POST">

            @csrf
            @method('PUT')

            <div class="row">

                <!-- NIY -->
                <div class="col-md-6 mb-3">

                    <label>NIY</label>

                    <input
                        type="text"
                        name="niy"
                        class="form-control"
                        value="{{ old('niy',$tendik->niy) }}"
                        required>

                </div>

                <!-- NIK -->
                <div class="col-md-6 mb-3">

                    <label>NIK KTP</label>

                    <input
                        type="text"
                        name="nik_ktp"
                        class="form-control"
                        value="{{ old('nik_ktp',$tendik->nik_ktp) }}">

                </div>

                <!-- Nama -->
                <div class="col-12 mb-3">

                    <label>Nama Lengkap</label>

                    <input
                        type="text"
                        name="nama"
                        class="form-control"
                        value="{{ old('nama',$tendik->nama) }}"
                        required>

                </div>

                <!-- Tempat Lahir -->
                <div class="col-md-6 mb-3">

                    <label>Tempat Lahir</label>

                    <input
                        type="text"
                        name="tempat_lahir"
                        class="form-control"
                        value="{{ old('tempat_lahir',$tendik->tempat_lahir) }}"
                        required>

                </div>

                <!-- Tanggal Lahir -->
                <div class="col-md-6 mb-3">

                    <label>Tanggal Lahir</label>

                    <input
                        type="date"
                        name="tanggal_lahir"
                        class="form-control"
                        value="{{ old('tanggal_lahir',$tendik->tanggal_lahir) }}"
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

                        <option value="L"
                            {{ old('jenis_kelamin',$tendik->jenis_kelamin)=='L' ? 'selected' : '' }}>
                            Laki-laki
                        </option>

                        <option value="P"
                            {{ old('jenis_kelamin',$tendik->jenis_kelamin)=='P' ? 'selected' : '' }}>
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

                        <option value="Tetap"
                            {{ old('status',$tendik->status)=='Tetap' ? 'selected' : '' }}>
                            Tetap
                        </option>

                        <option value="Honorer"
                            {{ old('status',$tendik->status)=='Honorer' ? 'selected' : '' }}>
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

                        @foreach(['Islam','Kristen','Katolik','Hindu','Budha','Konghucu'] as $agama)

                            <option value="{{ $agama }}"
                                {{ old('agama',$tendik->agama)==$agama ? 'selected' : '' }}>

                                {{ $agama }}

                            </option>

                        @endforeach

                    </select>

                </div>

                <!-- Golongan -->
                <div class="col-md-6 mb-3">

                    <label>Golongan</label>

                    <input
                        type="text"
                        name="golongan"
                        class="form-control"
                        value="{{ old('golongan',$tendik->golongan) }}">

                </div>

                <!-- Pendidikan -->
                <div class="col-md-6 mb-3">

                    <label>Pendidikan Terakhir</label>

                    <input
                        type="text"
                        name="pendidikan"
                        class="form-control"
                        value="{{ old('pendidikan',$tendik->pendidikan) }}"
                        required>

                </div>

                <!-- Jabatan -->
                <div class="col-md-6 mb-3">

                    <label>Jabatan</label>

                    <input
                        type="text"
                        name="jabatan"
                        class="form-control"
                        value="{{ old('jabatan',$tendik->jabatan) }}"
                        required>

                </div>

                <!-- Mulai Bekerja -->
                <div class="col-md-6 mb-3">

                    <label>Mulai Bekerja</label>

                    <input
                        type="date"
                        name="mulai_bekerja"
                        class="form-control"
                        value="{{ old('mulai_bekerja',$tendik->mulai_bekerja) }}"
                        required>

                </div>

                <!-- Alamat -->
                <div class="col-12 mb-3">

                    <label>Alamat</label>

                    <textarea
                        name="alamat"
                        rows="3"
                        class="form-control">{{ old('alamat',$tendik->alamat) }}</textarea>

                </div>

            </div>

            <div class="text-end">

                <button class="btn btn-success">

                    <i class="bi bi-check-lg"></i>

                    Update Data

                </button>

            </div>

        </form>

    </div>

</div>

@endsection