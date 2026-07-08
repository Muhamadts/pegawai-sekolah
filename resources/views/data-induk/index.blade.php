@extends('layouts.app')

@section('content')

<div class="container-fluid">

    <div class="d-flex justify-content-between align-items-center mb-2">

        <div>

            <h2 class="fw-bold mb-1">
                Data Induk
            </h2>

            <small class="text-secondary">
                Semua data guru dan tenaga kependidikan
            </small>

        </div>

    </div>

    {{-- FILTER --}}
    <div class="mb-4">

        <a href="{{ route('data-induk.index') }}"
            class="btn filter-btn {{ !request('jenis') ? 'filter-active' : 'filter-normal' }}">

            Semua

        </a>

        <a href="{{ route('data-induk.index',['jenis'=>'Guru']) }}"
            class="btn filter-btn {{ request('jenis')=='Guru' ? 'filter-active' : 'filter-normal' }}">

            Guru

        </a>

        <a href="{{ route('data-induk.index',['jenis'=>'Tendik']) }}"
            class="btn filter-btn {{ request('jenis')=='Tendik' ? 'filter-active' : 'filter-normal' }}">

            Tendik

        </a>

    </div>

    <div class="card data-induk-card">

        <table class="table data-induk-table align-middle mb-0">

            <thead>

                <tr>

                    <th width="60">No</th>

                    <th width="100">Tipe</th>

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

            @forelse($pegawai as $index => $item)

                <tr>

                    <td>

                        {{ $index + 1 }}

                    </td>

                    <td>

                        @if($item['tipe']=='Guru')

                            <span class="badge-guru-soft">

                                Guru

                            </span>

                        @else

                            <span class="badge-tendik-soft">

                                Tendik

                            </span>

                        @endif

                    </td>

                    <td>

                        {{ $item['niy'] }}

                    </td>

                    <td>

                        <strong>

                            {{ $item['nama'] }}

                        </strong>

                    </td>

                    <td>

                        {{ $item['jabatan'] }}

                    </td>

                    <td>

                        {{ $item['jenis_kelamin']=='L' ? 'Laki-laki' : 'Perempuan' }}

                    </td>

                    <td>

                        <div class="table-action">

                            @if($item['tipe']=='Guru')

                                <a href="{{ route('guru.show',$item['id']) }}"
                                    style="color:#3B82F6">

                                    <i class="bi bi-eye"></i>

                                </a>

                                <a href="{{ route('guru.edit',$item['id']) }}"
                                    style="color:#F59E0B">

                                    <i class="bi bi-pencil-square"></i>

                                </a>

                                <form action="{{ route('guru.destroy',$item['id']) }}"
                                    method="POST"
                                    onsubmit="return confirm('Hapus data?')">

                                    @csrf
                                    @method('DELETE')

                                    <button
                                        style="border:none;background:none;color:#EF4444">

                                        <i class="bi bi-trash"></i>

                                    </button>

                                </form>

                            @else

                                <a href="{{ route('tendik.show',$item['id']) }}"
                                    style="color:#3B82F6">

                                    <i class="bi bi-eye"></i>

                                </a>

                                <a href="{{ route('tendik.edit',$item['id']) }}"
                                    style="color:#F59E0B">

                                    <i class="bi bi-pencil-square"></i>

                                </a>

                                <form action="{{ route('tendik.destroy',$item['id']) }}"
                                    method="POST"
                                    onsubmit="return confirm('Hapus data?')">

                                    @csrf
                                    @method('DELETE')

                                    <button
                                        style="border:none;background:none;color:#EF4444">

                                        <i class="bi bi-trash"></i>

                                    </button>

                                </form>

                            @endif

                        </div>

                    </td>

                </tr>

            @empty

                <tr>

                    <td colspan="7" class="text-center py-5">

                        Belum ada data.

                    </td>

                </tr>

            @endforelse

            </tbody>

        </table>

    </div>

</div>

{{-- CSS KHUSUS DATA INDUK --}}
<style>

.data-induk-card{

    border:none;
    border-radius:16px;
    overflow:hidden;
    box-shadow:0 8px 25px rgba(0,0,0,.06);

}

.data-induk-table{

    margin:0;

}

.data-induk-table thead{

    background:#fff;

}

.data-induk-table thead th{

    background:#fff;
    color:#666;
    font-size:13px;
    font-weight:600;
    border:none;
    padding:16px 18px;

}

.data-induk-table tbody td{

    padding:18px;
    border-top:1px solid #F1F5F9;
    vertical-align:middle;

}

.data-induk-table tbody tr:hover{

    background:#FAFAFA;

}

.filter-btn{

    border-radius:10px;
    font-size:13px;
    padding:8px 20px;
    margin-right:8px;
    font-weight:600;

}

.filter-active{

    background:#16A34A;
    color:white;

}

.filter-active:hover{

    color:white;

}

.filter-normal{

    background:#F3F4F6;
    color:#555;

}

.filter-normal:hover{

    background:#E5E7EB;

}

.badge-guru-soft{

    background:#F3E8FF;
    color:#7C3AED;
    border-radius:20px;
    padding:5px 12px;
    font-size:11px;
    font-weight:600;

}

.badge-tendik-soft{

    background:#FCE7F3;
    color:#DB2777;
    border-radius:20px;
    padding:5px 12px;
    font-size:11px;
    font-weight:600;

}

.table-action{

    display:flex;
    justify-content:center;
    align-items:center;
    gap:12px;

}

.table-action a{

    text-decoration:none;
    font-size:16px;

}

.table-action button{

    padding:0;

}

</style>

@endsection