@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">

    <div>
        <h2 class="fw-bold">Data Guru</h2>
        <p class="text-secondary">
            Kelola data guru SD Plus IGM Palembang
        </p>
    </div>

    <a href="#" class="btn btn-success">
        <i class="bi bi-plus"></i>
        Tambah Data
    </a>

</div>

<div class="card card-dashboard">

    <div class="card-body p-0">

        <table class="table mb-0">

            <thead class="table-dark">

                <tr>

                    <th>No</th>

                    <th>NIY</th>

                    <th>Nama</th>

                    <th>Jabatan</th>

                    <th>Jenis Kelamin</th>

                    <th>Aksi</th>

                </tr>

            </thead>

            <tbody>

                @forelse($gurus as $guru)

                <tr>

                    <td>{{ $loop->iteration }}</td>

                    <td>{{ $guru->niy }}</td>

                    <td>{{ $guru->nama }}</td>

                    <td>{{ $guru->jabatan }}</td>

                    <td>{{ $guru->jenis_kelamin }}</td>

                    <td>

                        <button class="btn btn-warning btn-sm">
                            Edit
                        </button>

                        <button class="btn btn-danger btn-sm">
                            Hapus
                        </button>

                    </td>

                </tr>

                @empty

                <tr>

                    <td colspan="6" class="text-center py-4">
                        Belum ada data guru.
                    </td>

                </tr>

                @endforelse

            </tbody>

        </table>

    </div>

</div>

@endsection