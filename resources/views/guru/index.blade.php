@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">

    <div>
        <h2 class="fw-bold">Data Guru</h2>
        <p class="text-secondary">
            Kelola data guru SD Plus IGM Palembang
        </p>
    </div>

<button
    class="btn btn-success"
    data-bs-toggle="modal"
    data-bs-target="#modalGuru">

    <i class="bi bi-plus"></i>

    Tambah Data

</button>

</div>

<div class="card guru-card border-0 shadow-sm">

    <div class="card-body p-0">

        <table class="table guru-table mb-0">

            <thead class="guru-table-head">

<tr>

    <th width="70">
        No
    </th>

    <th width="180">
        NIY
    </th>

    <th>
        Nama
    </th>

    <th width="280">
        Jabatan
    </th>

    <th width="170">
        Jenis Kelamin
    </th>

    <th width="140" class="text-center">
        Aksi
    </th>

</tr>

</thead>

            <tbody>

                @forelse($gurus as $guru)

<tr>

    <td class="fw-semibold">

        {{ $gurus->firstItem() + $loop->index }}

    </td>

    <td>

        <strong>

            {{ $guru->niy }}

        </strong>

    </td>

    <td>

        <strong>

            {{ $guru->nama }}

        </strong>

    </td>

    <td>

        {{ $guru->jabatan }}

    </td>

    <td>

        @if($guru->jenis_kelamin=='L')

            Laki-laki

        @else

            Perempuan

        @endif

    </td>

    <td>

<div class="aksi-group">

    <a href="{{ route('guru.show', $guru->id) }}"
       class="icon-btn text-primary">

        <i class="bi bi-eye-fill"></i>

    </a>

        <a href="{{ route('guru.edit',$guru->id) }}"
           class="icon-btn text-warning">

            <i class="bi bi-pencil-square"></i>

        </a>

        <form
    id="delete-form-{{ $guru->id }}"
    action="{{ route('guru.destroy',$guru->id) }}"
    method="POST"
    class="m-0">

    @csrf
    @method('DELETE')

<button
    type="button"
    class="icon-btn text-danger bg-transparent border-0 btn-hapus"
    data-id="{{ $guru->id }}">

    <i class="bi bi-trash-fill"></i>

</button>

</form>

    </div>

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
<!-- Modal Tambah Guru -->

<div
class="modal fade"
id="modalGuru"
tabindex="-1">

<div class="modal-dialog modal-xl modal-dialog-scrollable">

<div class="modal-content rounded-4 border-0">

<div class="modal-header">

<h3 class="fw-bold">

Tambah Data Guru

</h3>

<button
type="button"
class="btn-close"
data-bs-dismiss="modal"></button>

</div>

<div class="modal-body">

<form
action="{{ route('guru.store') }}"
method="POST">

@csrf

<div class="row">

<div class="col-md-6 mb-3">

<label class="form-label">

NIY

</label>

<input
type="text"
name="niy"
class="form-control">

</div>

<div class="col-md-6 mb-3">

<label class="form-label">

NIK KTP

</label>

<input
type="text"
name="nik_ktp"
class="form-control">

</div>

<div class="col-12 mb-3">

<label class="form-label">

Nama Lengkap

</label>

<input
type="text"
name="nama"
class="form-control">

</div>

<div class="col-md-6 mb-3">

<label class="form-label">

Tempat Lahir

</label>

<input
type="text"
name="tempat_lahir"
class="form-control">

</div>

<div class="col-md-6 mb-3">

<label class="form-label">

Tanggal Lahir

</label>

<input
type="date"
name="tanggal_lahir"
class="form-control">

</div>

<div class="col-md-6 mb-3">

<label class="form-label">

Jenis Kelamin

</label>

<select
name="jenis_kelamin"
class="form-select">

<option value="">

-- Pilih --

</option>

<option value="L">

Laki-laki

</option>

<option value="P">

Perempuan

</option>

</select>

</div>

<div class="col-md-6 mb-3">

<label class="form-label">

Status

</label>

<select
name="status"
class="form-select">

<option value="">

-- Pilih --

</option>

<option>

Tetap

</option>

<option>

Honorer

</option>

</select>

</div>

<div class="col-md-6 mb-3">

<label class="form-label">

Agama

</label>

<select
name="agama"
class="form-select">

<option>

Islam

</option>

<option>

Kristen

</option>

<option>

Katolik

</option>

<option>

Hindu

</option>

<option>

Budha

</option>

<option>

Konghucu

</option>

</select>

</div>

<div class="col-md-6 mb-3">

<label class="form-label">

Golongan

</label>

<input
type="text"
name="golongan"
class="form-control">

</div>

<div class="col-md-6 mb-3">

<label class="form-label">

Pendidikan

</label>

<input
type="text"
name="pendidikan"
class="form-control">

</div>

<div class="col-md-6 mb-3">

<label class="form-label">

Jabatan

</label>

<input
type="text"
name="jabatan"
class="form-control">

</div>

<div class="col-md-6 mb-3">

<label class="form-label">

Mulai Mengajar

</label>

<input
type="date"
name="mulai_mengajar"
class="form-control">

</div>

<div class="col-12">

<label class="form-label">

Alamat

</label>

<textarea
name="alamat"
rows="3"
class="form-control"></textarea>

</div>

</div>

<div class="mt-4 text-end">

<button
type="button"
class="btn btn-secondary"
data-bs-dismiss="modal">

Batal

</button>

<button
class="btn btn-success">

Simpan

</button>

</div>

</form>

</div>

</div>

</div>

</div>
@push('scripts')
@push('scripts')

<script>

document.addEventListener('DOMContentLoaded', function () {

    document.querySelectorAll('.btn-hapus').forEach(function(btn){

        btn.addEventListener('click', function(){

            let id = this.dataset.id;

            Swal.fire({

                title: 'Hapus Data?',

                text: 'Data guru yang dihapus tidak dapat dikembalikan.',

                icon: 'warning',

                showCancelButton: true,

                confirmButtonColor: '#00b934',

                cancelButtonColor: '#dc3545',

                confirmButtonText: 'Ya, Hapus',

                cancelButtonText: 'Batal',

                reverseButtons: true

            }).then((result)=>{

                if(result.isConfirmed){

                    document.getElementById('delete-form-' + id).submit();

                }

            });

        });

    });

});

</script>

@endpush
@endpush
@endsection