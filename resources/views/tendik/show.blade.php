@extends('layouts.app')

@section('content')

@php
    $tanggalLahir = $tendik->tanggal_lahir
        ? \Illuminate\Support\Carbon::parse($tendik->tanggal_lahir)->format('d/m/Y')
        : '-';

    $mulaiBekerja = $tendik->mulai_bekerja
        ? \Illuminate\Support\Carbon::parse($tendik->mulai_bekerja)->format('d/m/Y')
        : '-';

    $jenisKelamin = match ($tendik->jenis_kelamin) {
        'L' => 'Laki-laki',
        'P' => 'Perempuan',
        default => '-',
    };
@endphp

<div class="guru-page">
    <div class="guru-page-heading">
        <div>
            <h2>Detail Data Tendik</h2>

            <p>
                Informasi lengkap tenaga kependidikan.
            </p>
        </div>

        <div class="guru-heading-actions">
            <a
                href="{{ route('tendik.index') }}"
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
                        <strong>{{ $tendik->niy ?: '-' }}</strong>
                    </div>

                    <div class="guru-detail-item">
                        <span>NIK KTP</span>
                        <strong>{{ $tendik->nik_ktp ?: '-' }}</strong>
                    </div>

                    <div class="guru-detail-item">
                        <span>Nama Lengkap</span>
                        <strong>{{ $tendik->nama ?: '-' }}</strong>
                    </div>

                    <div class="guru-detail-item">
                        <span>Jenis Kelamin</span>
                        <strong>{{ $jenisKelamin }}</strong>
                    </div>

                    <div class="guru-detail-item">
                        <span>Tempat Lahir</span>
                        <strong>{{ $tendik->tempat_lahir ?: '-' }}</strong>
                    </div>

                    <div class="guru-detail-item">
                        <span>Tanggal Lahir</span>
                        <strong>{{ $tanggalLahir }}</strong>
                    </div>

                    <div class="guru-detail-item">
                        <span>Agama</span>
                        <strong>{{ $tendik->agama ?: '-' }}</strong>
                    </div>

                    <div class="guru-detail-item">
                        <span>Alamat</span>
                        <strong>{{ $tendik->alamat ?: '-' }}</strong>
                    </div>
                </div>
            </div>

            <div class="guru-detail-divider"></div>

            <div class="guru-detail-section">
                <h4>Informasi Kepegawaian</h4>

                <div class="guru-detail-grid">
                    <div class="guru-detail-item">
                        <span>Status</span>
                        <strong>{{ $tendik->status ?: '-' }}</strong>
                    </div>

                    <div class="guru-detail-item">
                        <span>Golongan</span>
                        <strong>{{ $tendik->golongan ?: '-' }}</strong>
                    </div>

                    <div class="guru-detail-item">
                        <span>Pendidikan Terakhir</span>
                        <strong>{{ $tendik->pendidikan ?: '-' }}</strong>
                    </div>

                    <div class="guru-detail-item">
                        <span>Jabatan</span>
                        <strong>{{ $tendik->jabatan ?: '-' }}</strong>
                    </div>

                    <div class="guru-detail-item">
                        <span>Mulai Bekerja</span>
                        <strong>{{ $mulaiBekerja }}</strong>
                    </div>
                </div>
            </div>

        </div>

        <div class="guru-detail-footer">
        

            <a
                href="{{ route('tendik.edit', $tendik->id) }}"
                class="guru-form-save-button">

                Edit Data
            </a>
        </div>
    </div>
</div>

@endsection