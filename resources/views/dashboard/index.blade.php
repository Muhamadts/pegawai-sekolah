@extends('layouts.app')

@section('content')

<div class="container-fluid">

    <div class="mb-4">

        <h2 class="fw-bold mb-1">
            Selamat Datang 
        </h2>

        <p class="text-muted mb-0">
            Kelola data kepegawaian SD Plus IGM Palembang dengan mudah
        </p>

    </div>

    <div class="row g-4">

        <div class="col-xl-3 col-md-6">

            <div class="card shadow-sm border-0 rounded-4 h-100">

                <div class="card-body d-flex justify-content-between align-items-center">

                    <div>

                        <small class="text-muted">
                            Total Guru
                        </small>

                        <h2 class="fw-bold text-primary mt-2">
                            {{ $totalGuru }}
                        </h2>

                    </div>

                    <div class="rounded-circle bg-primary bg-opacity-10 p-3">

                        <i class="bi bi-person-workspace fs-3 text-primary"></i>

                    </div>

                </div>

            </div>

        </div>

        <div class="col-xl-3 col-md-6">

            <div class="card shadow-sm border-0 rounded-4 h-100">

                <div class="card-body d-flex justify-content-between align-items-center">

                    <div>

                        <small class="text-muted">
                            Total Tendik
                        </small>

                        <h2 class="fw-bold text-danger mt-2">
                            {{ $totalTendik }}
                        </h2>

                    </div>

                    <div class="rounded-circle bg-danger bg-opacity-10 p-3">

                        <i class="bi bi-briefcase fs-3 text-danger"></i>

                    </div>

                </div>

            </div>

        </div>

        <div class="col-xl-3 col-md-6">

            <div class="card shadow-sm border-0 rounded-4 h-100">

                <div class="card-body d-flex justify-content-between align-items-center">

                    <div>

                        <small class="text-muted">
                            Total Pegawai
                        </small>

                        <h2 class="fw-bold text-success mt-2">
                            {{ $totalPegawai }}
                        </h2>

                    </div>

                    <div class="rounded-circle bg-success bg-opacity-10 p-3">

                        <i class="bi bi-people fs-3 text-success"></i>

                    </div>

                </div>

            </div>

        </div>

        <div class="col-xl-3 col-md-6">

            <div class="card shadow-sm border-0 rounded-4 h-100">

                <div class="card-body d-flex justify-content-between align-items-center">

                    <div>

                        <small class="text-muted">
                            Status Sistem
                        </small>

                        <h2 class="fw-bold text-success mt-2">
                            Aktif
                        </h2>

                    </div>

                    <div class="rounded-circle bg-success bg-opacity-10 p-3">

                        <i class="bi bi-check-circle fs-3 text-success"></i>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>
<div class="row mt-4">

    <!-- Quick Action -->
    <div class="col-lg-6 mb-4">

        <div class="card shadow-sm border-0 rounded-4">

            <div class="card-body">

                <h5 class="fw-bold mb-4">
                    Aksi Cepat
                </h5>

                <div class="row g-3">

                    <div class="col-6">

                        <a href="{{ route('guru.create') }}" class="text-decoration-none">

                            <div class="quick-card quick-purple">

                                <i class="bi bi-plus-lg fs-3"></i>

                                <div class="mt-3">

                                    Tambah Guru

                                </div>

                            </div>

                        </a>

                    </div>

                    <div class="col-6">

                        <a href="#" class="text-decoration-none">

                            <div class="quick-card quick-pink">

                                <i class="bi bi-plus-lg fs-3"></i>

                                <div class="mt-3">

                                    Tambah Tendik

                                </div>

                            </div>

                        </a>

                    </div>

                    <div class="col-6">

                        <a href="#" class="text-decoration-none">

                            <div class="quick-card quick-blue">

                                <i class="bi bi-folder2-open fs-3"></i>

                                <div class="mt-3">

                                    Data Induk

                                </div>

                            </div>

                        </a>

                    </div>

                    <div class="col-6">

                        <a href="#" class="text-decoration-none">

                            <div class="quick-card quick-green">

                                <i class="bi bi-file-earmark-bar-graph fs-3"></i>

                                <div class="mt-3">

                                    Laporan

                                </div>

                            </div>

                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>




            <div class="col-lg-6">

    <div class="card shadow-sm border-0 rounded-4 h-100">

        <div class="card-body">

            <h5 class="fw-bold mb-4">
                Data Terbaru
            </h5>

            @php
                $dummy = [
                    [
                        'inisial' => 'N',
                        'nama' => 'Nyimas Fatimah',
                        'jabatan' => 'Tendik - Staff TU',
                        'badge' => 'Tendik',
                        'warna' => 'tendik'
                    ],
                    [
                        'inisial' => 'W',
                        'nama' => 'Wenny Siswanti, A.Md',
                        'jabatan' => 'Tendik - Staff TU',
                        'badge' => 'Tendik',
                        'warna' => 'tendik'
                    ],
                    [
                        'inisial' => 'A',
                        'nama' => 'Al Hikmah, S.Pd',
                        'jabatan' => 'Tendik - Kepala TU',
                        'badge' => 'Tendik',
                        'warna' => 'tendik'
                    ],
                    [
                        'inisial' => 'D',
                        'nama' => 'Dovie Dwi Pramita, S.Pd',
                        'jabatan' => 'Guru - Waka Sapra & Kel. Guru PJOK',
                        'badge' => 'Guru',
                        'warna' => 'guru'
                    ],
                    [
                        'inisial' => 'D',
                        'nama' => 'Dara Hapsari Prasetyorini, S.Pd',
                        'jabatan' => 'Guru - Humas/Guru Kelas',
                        'badge' => 'Guru',
                        'warna' => 'guru'
                    ]
                ];
            @endphp

            @foreach($dummy as $item)

                <div class="recent-item">

                    <div class="recent-left">

                        <div class="recent-avatar {{ $item['warna'] }}">

                            {{ $item['inisial'] }}

                        </div>

                        <div>

                            <h6>{{ $item['nama'] }}</h6>

                            <small>{{ $item['jabatan'] }}</small>

                        </div>

                    </div>

                    @if($item['badge'] == 'Guru')

                        <span class="badge-guru">
                            Guru
                        </span>

                    @else

                        <span class="badge-tendik">
                            Tendik
                        </span>

                    @endif

                </div>

            @endforeach

        </div>

    </div>

</div>

        </div>

    </div>

</div>

</div>
@endsection