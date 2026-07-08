@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">

    <div>

        <h2 class="fw-bold">
            Edit Guru
        </h2>

        <p class="text-secondary">
            Ubah data guru
        </p>

    </div>

    <a href="{{ route('guru.index') }}" class="btn btn-secondary">

        <i class="bi bi-arrow-left"></i>

        Kembali

    </a>

</div>

<div class="card shadow-sm border-0 rounded-4">

    <div class="card-body">

        <form action="{{ route('guru.update',$guru->id) }}" method="POST">

            @csrf
            @method('PUT')

            <div class="row">

                <div class="col-md-6 mb-3">

                    <label>NIY</label>

                    <input
                        type="text"
                        name="niy"
                        class="form-control"
                        value="{{ old('niy',$guru->niy) }}"
                        required>

                </div>

                <div class="col-md-6 mb-3">

                    <label>NIK KTP</label>

                    <input
                        type="text"
                        name="nik_ktp"
                        class="form-control"
                        value="{{ old('nik_ktp',$guru->nik_ktp) }}">

                </div>

                <div class="col-md-6 mb-3">

                    <label>Nama</label>

                    <input
                        type="text"
                        name="nama"
                        class="form-control"
                        value="{{ old('nama',$guru->nama) }}"
                        required>

                </div>

                <div class="col-md-6 mb-3">

                    <label>Tempat Lahir</label>

                    <input
                        type="text"
                        name="tempat_lahir"
                        class="form-control"
                        value="{{ old('tempat_lahir',$guru->tempat_lahir) }}"
                        required>

                </div>

                <div class="col-md-6 mb-3">

                    <label>Tanggal Lahir</label>

                    <input
                        type="date"
                        name="tanggal_lahir"
                        class="form-control"
                        value="{{ old('tanggal_lahir',$guru->tanggal_lahir) }}"
                        required>

                </div>

                <div class="col-md-6 mb-3">

                    <label>Jenis Kelamin</label>

                    <select
                        name="jenis_kelamin"
                        class="form-control">

                        <option value="L" {{ $guru->jenis_kelamin=='L' ? 'selected' : '' }}>
                            Laki-laki
                        </option>

                        <option value="P" {{ $guru->jenis_kelamin=='P' ? 'selected' : '' }}>
                            Perempuan
                        </option>

                    </select>

                </div>

                <div class="col-md-6 mb-3">

                    <label>Agama</label>

                    <input
                        type="text"
                        name="agama"
                        class="form-control"
                        value="{{ old('agama',$guru->agama) }}">

                </div>

                <div class="col-md-6 mb-3">

                    <label>Status</label>

                    <input
                        type="text"
                        name="status"
                        class="form-control"
                        value="{{ old('status',$guru->status) }}">

                </div>

                <div class="col-md-6 mb-3">

                    <label>Golongan</label>

                    <input
                        type="text"
                        name="golongan"
                        class="form-control"
                        value="{{ old('golongan',$guru->golongan) }}">

                </div>

                <div class="col-md-6 mb-3">

                    <label>Pendidikan</label>

                    <input
                        type="text"
                        name="pendidikan"
                        class="form-control"
                        value="{{ old('pendidikan',$guru->pendidikan) }}">

                </div>

                <div class="col-md-6 mb-3">

                    <label>Jabatan</label>

                    <input
                        type="text"
                        name="jabatan"
                        class="form-control"
                        value="{{ old('jabatan',$guru->jabatan) }}">

                </div>

                <div class="col-md-6 mb-3">

                    <label>Mulai Mengajar</label>

                    <input
                        type="date"
                        name="mulai_mengajar"
                        class="form-control"
                        value="{{ old('mulai_mengajar',$guru->mulai_mengajar) }}">

                </div>

                <div class="col-12 mb-3">

                    <label>Alamat</label>

                    <textarea
                        name="alamat"
                        class="form-control"
                        rows="3">{{ old('alamat',$guru->alamat) }}</textarea>

                </div>

            </div>

            <button class="btn btn-success">

                Update Data

            </button>

        </form>

    </div>

</div>

@endsection