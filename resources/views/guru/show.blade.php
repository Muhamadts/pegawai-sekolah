@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">

    <div>

        <h2 class="fw-bold">
            Detail Guru
        </h2>

        <p class="text-secondary">
            Informasi lengkap data guru
        </p>

    </div>

    <a href="{{ route('guru.index') }}" class="btn btn-secondary">

        <i class="bi bi-arrow-left"></i>

        Kembali

    </a>

</div>

<div class="card shadow-sm border-0 rounded-4">

    <div class="card-body">

        <div class="row">

            <div class="col-md-6 mb-3">
                <label class="fw-bold">NIY</label>
                <div>{{ $guru->niy }}</div>
            </div>

            <div class="col-md-6 mb-3">
                <label class="fw-bold">NIK KTP</label>
                <div>{{ $guru->nik_ktp }}</div>
            </div>

            <div class="col-md-6 mb-3">
                <label class="fw-bold">Nama</label>
                <div>{{ $guru->nama }}</div>
            </div>

            <div class="col-md-6 mb-3">
                <label class="fw-bold">Tempat Lahir</label>
                <div>{{ $guru->tempat_lahir }}</div>
            </div>

            <div class="col-md-6 mb-3">
                <label class="fw-bold">Tanggal Lahir</label>
                <div>{{ $guru->tanggal_lahir }}</div>
            </div>

            <div class="col-md-6 mb-3">
                <label class="fw-bold">Jenis Kelamin</label>
                <div>{{ $guru->jenis_kelamin }}</div>
            </div>

            <div class="col-md-6 mb-3">
                <label class="fw-bold">Agama</label>
                <div>{{ $guru->agama }}</div>
            </div>

            <div class="col-md-6 mb-3">
                <label class="fw-bold">Status</label>
                <div>{{ $guru->status }}</div>
            </div>

            <div class="col-md-6 mb-3">
                <label class="fw-bold">Golongan</label>
                <div>{{ $guru->golongan }}</div>
            </div>

            <div class="col-md-6 mb-3">
                <label class="fw-bold">Pendidikan</label>
                <div>{{ $guru->pendidikan }}</div>
            </div>

            <div class="col-md-6 mb-3">
                <label class="fw-bold">Jabatan</label>
                <div>{{ $guru->jabatan }}</div>
            </div>

            <div class="col-md-6 mb-3">
                <label class="fw-bold">Mulai Mengajar</label>
                <div>{{ $guru->mulai_mengajar }}</div>
            </div>

            <div class="col-12">
                <label class="fw-bold">Alamat</label>
                <div>{{ $guru->alamat }}</div>
            </div>
            <div class="col-md-6 mb-3">
    <label class="fw-bold">File SK</label>

    @forelse($guru->file_sk ?? [] as $file)
        <div>
            <a href="{{ asset('storage/' . $file) }}" target="_blank">
                <i class="bi bi-file-earmark-text"></i>
                {{ basename($file) }}
            </a>
        </div>
    @empty
        <div>-</div>
    @endforelse
</div>

<div class="col-md-6 mb-3">
    <label class="fw-bold">File Piagam / Sertifikat</label>

    @forelse($guru->file_sertifikat ?? [] as $file)
        <div>
            <a href="{{ asset('storage/' . $file) }}" target="_blank">
                <i class="bi bi-award"></i>
                {{ basename($file) }}
            </a>
        </div>
    @empty
        <div>-</div>
    @endforelse
</div>

        </div>

    </div>

</div>

@endsection