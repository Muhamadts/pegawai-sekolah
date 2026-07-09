@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">

    <div>

        <h2 class="fw-bold">
            Detail Tenaga Kependidikan
        </h2>

        <p class="text-secondary">
            Informasi lengkap data tenaga kependidikan
        </p>

    </div>

    <a href="{{ route('tendik.index') }}" class="btn btn-secondary">

        <i class="bi bi-arrow-left"></i>

        Kembali

    </a>

</div>

<div class="card shadow-sm border-0 rounded-4">

    <div class="card-body">

        <div class="row">

            <!-- NIY -->
            <div class="col-md-6 mb-3">

                <label class="fw-bold">
                    NIY
                </label>

                <div>{{ $tendik->niy }}</div>

            </div>

            <!-- NIK -->
            <div class="col-md-6 mb-3">

                <label class="fw-bold">
                    NIK KTP
                </label>

                <div>{{ $tendik->nik_ktp ?: '-' }}</div>

            </div>

            <!-- Nama -->
            <div class="col-md-6 mb-3">

                <label class="fw-bold">
                    Nama Lengkap
                </label>

                <div>{{ $tendik->nama }}</div>

            </div>

            <!-- Tempat Lahir -->
            <div class="col-md-6 mb-3">

                <label class="fw-bold">
                    Tempat Lahir
                </label>

                <div>{{ $tendik->tempat_lahir }}</div>

            </div>

            <!-- Tanggal Lahir -->
            <div class="col-md-6 mb-3">

                <label class="fw-bold">
                    Tanggal Lahir
                </label>

                <div>{{ $tendik->tanggal_lahir }}</div>

            </div>

            <!-- Jenis Kelamin -->
            <div class="col-md-6 mb-3">

                <label class="fw-bold">
                    Jenis Kelamin
                </label>

                <div>

                    @if($tendik->jenis_kelamin == 'L')

                        Laki-laki

                    @else

                        Perempuan

                    @endif

                </div>

            </div>

            <!-- Agama -->
            <div class="col-md-6 mb-3">

                <label class="fw-bold">
                    Agama
                </label>

                <div>{{ $tendik->agama }}</div>

            </div>

            <!-- Status -->
            <div class="col-md-6 mb-3">

                <label class="fw-bold">
                    Status
                </label>

                <div>{{ $tendik->status }}</div>

            </div>

            <!-- Golongan -->
            <div class="col-md-6 mb-3">

                <label class="fw-bold">
                    Golongan
                </label>

                <div>{{ $tendik->golongan ?: '-' }}</div>

            </div>

            <!-- Pendidikan -->
            <div class="col-md-6 mb-3">

                <label class="fw-bold">
                    Pendidikan Terakhir
                </label>

                <div>{{ $tendik->pendidikan }}</div>

            </div>

            <!-- Jabatan -->
            <div class="col-md-6 mb-3">

                <label class="fw-bold">
                    Jabatan
                </label>

                <div>{{ $tendik->jabatan }}</div>

            </div>

            <!-- Mulai Bekerja -->
            <div class="col-md-6 mb-3">

                <label class="fw-bold">
                    Mulai Bekerja
                </label>

                <div>{{ $tendik->mulai_bekerja }}</div>

            </div>

            <!-- Alamat -->
            <div class="col-12">

                <label class="fw-bold">
                    Alamat
                </label>

                <div>{{ $tendik->alamat ?: '-' }}</div>

            </div>

        </div>

    </div>

</div>

@endsection