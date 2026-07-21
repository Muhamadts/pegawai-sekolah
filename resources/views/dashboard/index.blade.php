@extends('layouts.app')

@section('content')

<div class="dashboard-page">

    <div class="page-heading">
        <h2>Selamat Datang</h2>
        <p>Kelola data kepegawaian SD Plus IGM Palembang dengan mudah</p>
    </div>

    <div class="dashboard-stats">

        <div class="stat-card">
            <div>
                <span>Total Guru</span>
                <strong class="text-primary">{{ $totalGuru }}</strong>
            </div>
            <div class="stat-icon stat-blue">
                <i class="bi bi-person-workspace"></i>
            </div>
        </div>

        <div class="stat-card">
            <div>
                <span>Total Tendik</span>
                <strong class="text-danger">{{ $totalTendik }}</strong>
            </div>
            <div class="stat-icon stat-pink">
                <i class="bi bi-briefcase"></i>
            </div>
        </div>

        <div class="stat-card">
            <div>
                <span>Total Pegawai</span>
                <strong class="text-success">{{ $totalPegawai }}</strong>
            </div>
            <div class="stat-icon stat-green">
                <i class="bi bi-people"></i>
            </div>
        </div>

        <div class="stat-card">
            <div>
                <span>Status</span>
                <strong class="text-success">Aktif</strong>
            </div>
            <div class="stat-icon stat-green">
                <i class="bi bi-check-circle"></i>
            </div>
        </div>

    </div>

    <div class="dashboard-grid">

        <div class="card dashboard-card">
            <div class="card-body">
                <h5 class="section-title">Aksi Cepat</h5>

                <div class="quick-grid">

                    <a href="{{ route('guru.create') }}" class="quick-card quick-purple">
                        <i class="bi bi-plus-lg"></i>
                        <span>Tambah Guru</span>
                    </a>

                    <a href="{{ route('tendik.create') }}" class="quick-card quick-pink">
                        <i class="bi bi-plus-lg"></i>
                        <span>Tambah Tendik</span>
                    </a>

                    <a href="{{ route('data-induk.index') }}" class="quick-card quick-blue">
                        <i class="bi bi-folder2-open"></i>
                        <span>Data Induk</span>
                    </a>

                    <a href="{{ route('laporan.index') }}" class="quick-card quick-green">
                        <i class="bi bi-file-earmark-bar-graph"></i>
                        <span>Laporan</span>
                    </a>

                </div>
            </div>
        </div>

        <div class="card dashboard-card">
            <div class="card-body">
                <h5 class="section-title">Data Terbaru</h5>

                @forelse($latestData as $item)
                    <div class="recent-item">
                        <div class="recent-left">
                            <div class="recent-avatar {{ $item['warna'] }}">
                                {{ $item['inisial'] }}
                            </div>

                            <div class="recent-info">
                                <h6>{{ $item['nama'] }}</h6>
                                <small>{{ $item['badge'] }} - {{ $item['jabatan'] }}</small>
                            </div>
                        </div>

                        @if($item['badge'] == 'Guru')
                            <span class="badge-guru">Guru</span>
                        @else
                            <span class="badge-tendik">Tendik</span>
                        @endif
                    </div>
                @empty
                    <div class="text-center py-5 text-muted">
                        Belum ada data pegawai.
                    </div>
                @endforelse
            </div>
        </div>

    </div>

</div>

@endsection