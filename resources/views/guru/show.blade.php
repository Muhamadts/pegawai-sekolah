@extends('layouts.app')

@section('content')

@php
    $tanggalLahir = $guru->tanggal_lahir
        ? \Illuminate\Support\Carbon::parse($guru->tanggal_lahir)->format('d/m/Y')
        : '-';

    $mulaiMengajar = $guru->mulai_mengajar
        ? \Illuminate\Support\Carbon::parse($guru->mulai_mengajar)->format('d/m/Y')
        : '-';

    $jenisKelamin = match ($guru->jenis_kelamin) {
        'L' => 'Laki-laki',
        'P' => 'Perempuan',
        default => '-',
    };
@endphp

<div class="guru-page">
    <div class="guru-page-heading">
        <div>
            <h2>Detail Data Guru</h2>

            <p>
                Informasi lengkap data guru.
            </p>
        </div>

        <div class="guru-heading-actions">
            <a
                href="{{ route('guru.index') }}"
                class="guru-back-button">

                <i class="bi bi-arrow-left"></i>
                Kembali
            </a>

        </div>
    </div>

    <div class="guru-detail-card">

        <div class="guru-detail-body">
            <div class="guru-detail-section">
                <h4>Informasi Pribadi</h4>

                <div class="guru-detail-grid">
                    <div class="guru-detail-item">
                        <span>NIY</span>
                        <strong>{{ $guru->niy ?: '-' }}</strong>
                    </div>

                    <div class="guru-detail-item">
                        <span>NIK KTP</span>
                        <strong>{{ $guru->nik_ktp ?: '-' }}</strong>
                    </div>

                    <div class="guru-detail-item">
                        <span>Nama Lengkap</span>
                        <strong>{{ $guru->nama ?: '-' }}</strong>
                    </div>

                    <div class="guru-detail-item">
                        <span>Jenis Kelamin</span>
                        <strong>{{ $jenisKelamin }}</strong>
                    </div>

                    <div class="guru-detail-item">
                        <span>Tempat Lahir</span>
                        <strong>{{ $guru->tempat_lahir ?: '-' }}</strong>
                    </div>

                    <div class="guru-detail-item">
                        <span>Tanggal Lahir</span>
                        <strong>{{ $tanggalLahir }}</strong>
                    </div>

                    <div class="guru-detail-item">
                        <span>Agama</span>
                        <strong>{{ $guru->agama ?: '-' }}</strong>
                    </div>

                    <div class="guru-detail-item">
                        <span>Alamat</span>
                        <strong>{{ $guru->alamat ?: '-' }}</strong>
                    </div>
                </div>
            </div>

            <div class="guru-detail-divider"></div>

            <div class="guru-detail-section">
                <h4>Informasi Kepegawaian</h4>

                <div class="guru-detail-grid">
                    <div class="guru-detail-item">
                        <span>Status</span>
                        <strong>{{ $guru->status ?: '-' }}</strong>
                    </div>

                    <div class="guru-detail-item">
                        <span>Golongan</span>
                        <strong>{{ $guru->golongan ?: '-' }}</strong>
                    </div>

                    <div class="guru-detail-item">
                        <span>Pendidikan Terakhir</span>
                        <strong>{{ $guru->pendidikan ?: '-' }}</strong>
                    </div>

                    <div class="guru-detail-item">
                        <span>Jabatan</span>
                        <strong>{{ $guru->jabatan ?: '-' }}</strong>
                    </div>

                    <div class="guru-detail-item">
                        <span>Mulai Mengajar</span>
                        <strong>{{ $mulaiMengajar }}</strong>
                    </div>
                </div>
            </div>
        </div>

        <div class="guru-detail-footer">

            <a
                href="{{ route('guru.edit', $guru->id) }}"
                class="guru-form-save-button">

                Edit Data
            </a>
        </div>
    </div>
</div>

@endsection