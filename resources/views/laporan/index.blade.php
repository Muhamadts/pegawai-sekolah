@extends('layouts.app')

@section('content')

<div class="mb-4">
    <h2 class="fw-bold mb-1">Laporan</h2>
    <p class="text-muted mb-0">
        Generate dan cetak laporan data kepegawaian.
    </p>
</div>

<div class="card shadow-sm border-0 mb-4">
    <div class="card-body">

        <form action="{{ route('laporan.index') }}" method="GET">

            <div class="row">

                <div class="col-md-4 mb-3">
                    <label class="form-label fw-semibold">
                        Jenis Laporan
                    </label>

                    <select name="jenis" class="form-select">

                        <option value="guru"
                            {{ $jenis == 'guru' ? 'selected' : '' }}>
                            Laporan Data Guru
                        </option>

                        <option value="tendik"
                            {{ $jenis == 'tendik' ? 'selected' : '' }}>
                            Laporan Data Tendik
                        </option>

                        <option value="data_induk"
                            {{ $jenis == 'data_induk' ? 'selected' : '' }}>
                            Laporan  Data Induk
                        </option>

                    </select>

                </div>

                <div class="col-md-4 mb-3">

                    <label class="form-label fw-semibold">
                        Nama Kepala Sekolah
                    </label>

                    <input
                        type="text"
                        class="form-control"
                        value="Mefi Laranti, S.Pd"
                        readonly>

                </div>

                <div class="col-md-4 mb-3">

                    <label class="form-label fw-semibold">
                        NIY Kepala Sekolah
                    </label>

                    <input
                        type="text"
                        class="form-control"
                        value="2006.04.0020"
                        readonly>

                </div>

            </div>

            <button type="submit" class="btn btn-success">

                <i class="bi bi-eye"></i>

                Tampilkan Laporan

            </button>

            <a href="{{ route('laporan.pdf', ['jenis' => $jenis]) }}"
   target="_blank"
   class="btn btn-danger">

    <i class="bi bi-file-earmark-pdf"></i>

    Cetak PDF

</a>

        </form>

    </div>
</div>

<div class="card shadow-sm border-0">

    <div class="card-body">

        <div class="text-center mb-4">

            <h2 class="fw-bold">

                SD PLUS IGM PALEMBANG

            </h2>

            <p class="mb-0">

                Jl. Pendidikan No.1 Palembang

            </p>

            <p>

                Telp. (0711) 123456 |
                Email : info@sdplusigm.sch.id

            </p>

            @if($jenis == 'guru')

                <h4 class="fw-bold mt-4">

                    LAPORAN DATA GURU

                </h4>

            @elseif($jenis == 'tendik')

                <h4 class="fw-bold mt-4">

                    LAPORAN DATA TENDIK

                </h4>

            @elseif($jenis == 'data_induk')

                <h4 class="fw-bold mt-4">

                    LAPORAN DATA INDUK

                </h4>

            @endif

            <p class="text-muted">

                Periode : {{ date('d F Y') }}

            </p>

        </div>

        <hr>

        <div class="table-responsive">

            <table class="table table-bordered table-striped">

                <thead class="table-light">

                    <tr>

                        <th width="60">No</th>

                        <th>NIY</th>

                        <th>Nama</th>

                        <th>TTL</th>

                        <th>JK</th>

                        <th>Jabatan</th>

                        <th>Pendidikan</th>

                    </tr>

                </thead>

                <tbody>

                @forelse($laporan as $item)

                    <tr>

                        <td>

                            {{ $loop->iteration }}

                        </td>

                        <td>

                            {{ $item->niy ?? '-' }}

                        </td>

                        <td>

                            {{ $item->nama ?? '-' }}

                        </td>

                        <td>

                            @if(isset($item->tempat_lahir))

                                {{ $item->tempat_lahir }},
                                {{ \Carbon\Carbon::parse($item->tanggal_lahir)->format('d-m-Y') }}

                            @else

                                -

                            @endif

                        </td>

                        <td>

                            {{ $item->jenis_kelamin ?? '-' }}

                        </td>

                        <td>

                            {{ $item->jabatan ?? '-' }}

                        </td>

                        <td>

                            {{ $item->pendidikan ?? '-' }}

                        </td>

                    </tr>

                @empty

                    <tr>

                        <td colspan="7" class="text-center py-5">

                            Belum ada data yang ditampilkan.

                        </td>

                    </tr>

                @endforelse

                </tbody>

            </table>

        </div>

    </div>

</div>

@endsection