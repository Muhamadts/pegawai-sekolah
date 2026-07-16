@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">

    <div>

        <h2 class="fw-bold">
            Tambah Guru
        </h2>

        <p class="text-secondary">
            Tambahkan data guru baru
        </p>

    </div>

    <a href="{{ route('guru.index') }}" class="btn btn-secondary">

        <i class="bi bi-arrow-left"></i>

        Kembali

    </a>

</div>

<div class="card shadow-sm border-0 rounded-4">

    <div class="card-body">

<form action="{{ route('guru.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="row">

                <div class="col-md-6 mb-3">

                    <label>NIY</label>

                    <input
                        type="text"
                        name="niy"
                        class="form-control"
                        required>

                </div>

                <div class="col-md-6 mb-3">

                    <label>NIK KTP</label>

                    <input
                        type="text"
                        name="nik_ktp"
                        class="form-control">

                </div>

                <div class="col-md-6 mb-3">

                    <label>Nama</label>

                    <input
                        type="text"
                        name="nama"
                        class="form-control"
                        required>

                </div>

                <div class="col-md-6 mb-3">

                    <label>Tempat Lahir</label>

                    <input
                        type="text"
                        name="tempat_lahir"
                        class="form-control"
                        required>

                </div>

                <div class="col-md-6 mb-3">

                    <label>Tanggal Lahir</label>

                    <input
                        type="date"
                        name="tanggal_lahir"
                        class="form-control"
                        required>

                </div>

                <div class="col-md-6 mb-3">

                    <label>Jenis Kelamin</label>

                    <select
                        name="jenis_kelamin"
                        class="form-control"
                        required>

                        <option value="">Pilih</option>

                        <option value="L">
                            Laki-laki
                        </option>

                        <option value="P">
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
                        required>

                </div>

                <div class="col-md-6 mb-3">

                    <label>Status</label>

                    <input
                        type="text"
                        name="status"
                        class="form-control"
                        required>

                </div>

                <div class="col-md-6 mb-3">

                    <label>Golongan</label>

                    <input
                        type="text"
                        name="golongan"
                        class="form-control">

                </div>

                <div class="col-md-6 mb-3">

                    <label>Pendidikan</label>

                    <input
                        type="text"
                        name="pendidikan"
                        class="form-control"
                        required>

                </div>

                <div class="col-md-6 mb-3">

                    <label>Jabatan</label>

                    <input
                        type="text"
                        name="jabatan"
                        class="form-control"
                        required>

                </div>

                <div class="col-md-6 mb-3">

                    <label>Mulai Mengajar</label>

                    <input
                        type="date"
                        name="mulai_mengajar"
                        class="form-control"
                        required>

                </div>

                <div class="col-12 mb-3">

                    <label>Alamat</label>

                    <textarea
                        name="alamat"
                        rows="3"
                        class="form-control"></textarea>

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

            <button
                type="submit"
                class="btn btn-success">

                <i class="bi bi-check-lg"></i>

                Simpan Data

            </button>

        </form>

    </div>

</div>

@endsection