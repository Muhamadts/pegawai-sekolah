@extends('layouts.app')

@section('content')

<div class="container-fluid">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>

            <h2 class="fw-bold mb-1">

                Data Tenaga Kependidikan

            </h2>

            <small class="text-secondary">

                Kelola data tendik SD Plus IGM Palembang

            </small>

        </div>

        <a href="{{ route('tendik.create') }}"
            class="btn btn-success rounded-3 px-4">

            <i class="bi bi-plus-lg"></i>

            Tambah Data

        </a>

    </div>


    <div class="card tendik-card">

        <table class="table tendik-table align-middle">

           <thead class="tendik-table-head">

                <tr>

                    <th width="60">No</th>

                    <th>NIY</th>

                    <th>Nama</th>

                    <th>Jabatan</th>

                    <th>Jenis Kelamin</th>

                    <th width="120" class="text-center">

                        Aksi

                    </th>

                </tr>

            </thead>

            <tbody>

            @forelse($tendiks as $index => $tendik)

                <tr>

                    <td>{{ $index+1 }}</td>

                    <td>{{ $tendik->niy }}</td>

                    <td>{{ $tendik->nama }}</td>

                    <td>{{ $tendik->jabatan }}</td>

                    <td>

                        {{ $tendik->jenis_kelamin=='L' ? 'Laki-laki' : 'Perempuan' }}

                    </td>

                    <td>

                        <div class="aksi-group">

                            <a href="{{ route('tendik.show',$tendik->id) }}"
                                class="icon-btn text-primary">

                                <i class="bi bi-eye"></i>

                            </a>

                            <a href="{{ route('tendik.edit',$tendik->id) }}"
                                class="icon-btn text-warning">

                                <i class="bi bi-pencil-square"></i>

                            </a>

                            <form
                                action="{{ route('tendik.destroy',$tendik->id) }}"
                                method="POST">

                                @csrf

                                @method('DELETE')

                                <button
                                    onclick="return confirm('Hapus data ini?')"
                                    class="icon-btn text-danger border-0 bg-transparent">

                                    <i class="bi bi-trash"></i>

                                </button>

                            </form>

                        </div>

                    </td>

                </tr>

            @empty

                <tr>

                    <td colspan="6"
                        class="text-center py-5">

                        Belum ada data Tendik.

                    </td>

                </tr>

            @endforelse

            </tbody>

        </table>

    </div>

</div>

@endsection