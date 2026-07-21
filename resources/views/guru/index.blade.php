@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h2 class="fw-bold mb-1">Data Guru</h2>

        <p class="text-secondary mb-0">
            Kelola data guru SD Plus IGM Palembang
        </p>
    </div>

    <button
        type="button"
        class="btn btn-success"
        data-bs-toggle="modal"
        data-bs-target="#modalGuru">

        <i class="bi bi-plus-lg me-1"></i>
        Tambah Data
    </button>
</div>

<div class="card guru-card border-0 shadow-sm">
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table guru-table mb-0">

                <thead class="guru-table-head">
                    <tr>
                        <th width="70">No</th>
                        <th width="180">NIY</th>
                        <th>Nama</th>
                        <th width="280">Jabatan</th>
                        <th width="170">Jenis Kelamin</th>
                        <th width="140" class="text-center">Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($gurus as $guru)
                        <tr>
                            <td class="fw-semibold">
                                {{ $gurus->firstItem() + $loop->index }}
                            </td>

                            <td>
                                <strong>{{ $guru->niy }}</strong>
                            </td>

                            <td>
                                <strong>{{ $guru->nama }}</strong>
                            </td>

                            <td>{{ $guru->jabatan }}</td>

                            <td>
                                {{ $guru->jenis_kelamin === 'L'
                                    ? 'Laki-laki'
                                    : 'Perempuan' }}
                            </td>

                            <td>
                                <div class="aksi-group">
                                    <a
                                        href="{{ route('guru.show', $guru->id) }}"
                                        class="icon-btn text-primary"
                                        title="Lihat data">

                                        <i class="bi bi-eye-fill"></i>
                                    </a>

                                    <a
                                        href="{{ route('guru.edit', $guru->id) }}"
                                        class="icon-btn text-warning"
                                        title="Edit data">

                                        <i class="bi bi-pencil-square"></i>
                                    </a>

                                    <form
                                        id="delete-form-{{ $guru->id }}"
                                        action="{{ route('guru.destroy', $guru->id) }}"
                                        method="POST"
                                        class="m-0">

                                        @csrf
                                        @method('DELETE')

                                        <button
                                            type="button"
                                            class="icon-btn text-danger bg-transparent border-0 btn-hapus"
                                            data-id="{{ $guru->id }}"
                                            title="Hapus data">

                                            <i class="bi bi-trash-fill"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td
                                colspan="6"
                                class="text-center text-secondary py-4">

                                Belum ada data guru.
                            </td>
                        </tr>
                    @endforelse
                </tbody>

            </table>
        </div>
    </div>
</div>

{{-- =========================================================
     MODAL TAMBAH DATA GURU
========================================================= --}}
<div
    class="modal fade"
    id="modalGuru"
    tabindex="-1"
    aria-labelledby="modalGuruLabel"
    aria-hidden="true"
    data-has-errors="{{ $errors->any() ? 'true' : 'false' }}">

<div class="modal-dialog guru-modal-dialog">
            <div class="modal-content guru-modal-content">

            <form
                action="{{ route('guru.store') }}"
                method="POST"
                enctype="multipart/form-data"
                class="guru-modal-form">

                @csrf

                {{-- Header --}}
                <div class="modal-header guru-modal-header">
                    <div>
                        <h2
                            class="modal-title guru-modal-title"
                            id="modalGuruLabel">

                            Tambah Data Guru
                        </h2>
                    </div>

                    <button
                        type="button"
                        class="btn-close guru-modal-close"
                        data-bs-dismiss="modal"
                        aria-label="Tutup">
                    </button>
                </div>

                {{-- Form yang memiliki satu scrollbar --}}
                <div class="modal-body guru-modal-body">
                    <div class="row g-3">

                        {{-- NIY --}}
                        <div class="col-md-6">
                            <label for="niy" class="form-label">
                                NIY
                               
                            </label>

                            <input
                                id="niy"
                                type="text"
                                name="niy"
                                value="{{ old('niy') }}"
                                class="form-control @error('niy') is-invalid @enderror"
                                placeholder="Masukkan NIY"
                                autocomplete="off"
                                required>

                            @error('niy')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        {{-- NIK KTP --}}
                        <div class="col-md-6">
                            <label for="nik_ktp" class="form-label">
                                NIK KTP
                            </label>

                            <input
                                id="nik_ktp"
                                type="text"
                                name="nik_ktp"
                                value="{{ old('nik_ktp') }}"
                                class="form-control @error('nik_ktp') is-invalid @enderror"
                                placeholder="Masukkan NIK KTP"
                                inputmode="numeric"
                                autocomplete="off">

                            @error('nik_ktp')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        {{-- Nama --}}
                        <div class="col-12">
                            <label for="nama" class="form-label">
                                Nama Lengkap
                               
                            </label>

                            <input
                                id="nama"
                                type="text"
                                name="nama"
                                value="{{ old('nama') }}"
                                class="form-control @error('nama') is-invalid @enderror"
                                placeholder="Masukkan nama lengkap"
                                autocomplete="off"
                                required>

                            @error('nama')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        {{-- Tempat lahir --}}
                        <div class="col-md-6">
                            <label for="tempat_lahir" class="form-label">
                                Tempat Lahir
                           
                            </label>

                            <input
                                id="tempat_lahir"
                                type="text"
                                name="tempat_lahir"
                                value="{{ old('tempat_lahir') }}"
                                class="form-control @error('tempat_lahir') is-invalid @enderror"
                                placeholder="Masukkan tempat lahir"
                                autocomplete="off"
                                required>

                            @error('tempat_lahir')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        {{-- Tanggal lahir --}}
                        <div class="col-md-6">
                            <label for="tanggal_lahir_display" class="form-label">
                                Tanggal Lahir
                              
                            </label>

                            <div
                                class="guru-date-control @error('tanggal_lahir') is-invalid @enderror">

                                <input
                                    id="tanggal_lahir_display"
                                    type="text"
                                    class="guru-date-display"
                                    placeholder="dd/mm/yyyy"
                                    readonly
                                    aria-label="Tanggal lahir">

                                <i class="bi bi-calendar3 guru-date-icon"></i>

                                <input
                                    id="tanggal_lahir"
                                    type="date"
                                    name="tanggal_lahir"
                                    value="{{ old('tanggal_lahir') }}"
                                    class="guru-native-date"
                                    data-display-id="tanggal_lahir_display"
                                    aria-label="Pilih tanggal lahir"
                                    required>
                            </div>

                            @error('tanggal_lahir')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        {{-- Jenis kelamin --}}
                        <div class="col-md-6">
                            <label for="jenis_kelamin" class="form-label">
                                Jenis Kelamin
                         
                            </label>

                            <select
                                id="jenis_kelamin"
                                name="jenis_kelamin"
                                class="form-select @error('jenis_kelamin') is-invalid @enderror"
                                required>

                                <option value="">-- Pilih --</option>

                                <option
                                    value="L"
                                    @selected(old('jenis_kelamin') === 'L')>

                                    Laki-laki
                                </option>

                                <option
                                    value="P"
                                    @selected(old('jenis_kelamin') === 'P')>

                                    Perempuan
                                </option>
                            </select>

                            @error('jenis_kelamin')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        {{-- Status --}}
                        <div class="col-md-6">
                            <label for="status" class="form-label">
                                Status
                            
                            </label>

                            <select
                                id="status"
                                name="status"
                                class="form-select @error('status') is-invalid @enderror"
                                required>

                                <option value="">-- Pilih --</option>

                                <option
                                    value="Tetap"
                                    @selected(old('status') === 'Tetap')>

                                    Tetap
                                </option>

                                <option
                                    value="Honorer"
                                    @selected(old('status') === 'Honorer')>

                                    Honorer
                                </option>
                            </select>

                            @error('status')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        {{-- Agama --}}
                        <div class="col-md-6">
                            <label for="agama" class="form-label">
                                Agama
                            </label>

                            <select
                                id="agama"
                                name="agama"
                                class="form-select @error('agama') is-invalid @enderror"
                                required>

                                <option value="">-- Pilih --</option>

                                @foreach ([
                                    'Islam',
                                    'Kristen',
                                    'Katolik',
                                    'Hindu',
                                    'Budha',
                                    'Konghucu'
                                ] as $agama)

                                    <option
                                        value="{{ $agama }}"
                                        @selected(old('agama') === $agama)>

                                        {{ $agama }}
                                    </option>
                                @endforeach
                            </select>

                            @error('agama')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        {{-- Golongan --}}
                        <div class="col-md-6">
                            <label for="golongan" class="form-label">
                                Golongan
                            </label>

                            <select
                                id="golongan"
                                name="golongan"
                                class="form-select @error('golongan') is-invalid @enderror">

                                <option value="">-- Pilih --</option>

                                @foreach ([
                                    'II/A',
                                    'II/B',
                                    'II/C',
                                    'II/D',
                                    'III/A',
                                    'III/B',
                                    'III/C',
                                    'III/D',
                                    'IV/A',
                                    'IV/B',
                                    'IV/C',
                                    'IV/D'
                                ] as $golongan)

                                    <option
                                        value="{{ $golongan }}"
                                        @selected(old('golongan') === $golongan)>

                                        {{ $golongan }}
                                    </option>
                                @endforeach
                            </select>

                            @error('golongan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        {{-- Pendidikan --}}
                        <div class="col-md-6">
                            <label for="pendidikan" class="form-label">
                                Pendidikan Terakhir
                            </label>

                            <select
                                id="pendidikan"
                                name="pendidikan"
                                class="form-select @error('pendidikan') is-invalid @enderror"
                                required>

                                <option value="">-- Pilih --</option>

                                @foreach ([
                                    'SMA/SMK',
                                    'D1',
                                    'D2',
                                    'D3',
                                    'D4',
                                    'S1',
                                    'S2',
                                    'S3'
                                ] as $pendidikan)

                                    <option
                                        value="{{ $pendidikan }}"
                                        @selected(old('pendidikan') === $pendidikan)>

                                        {{ $pendidikan }}
                                    </option>
                                @endforeach
                            </select>

                            @error('pendidikan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        {{-- Jabatan --}}
                        <div class="col-md-6">
                            <label for="jabatan" class="form-label">
                                Jabatan
                            </label>

                            <input
                                id="jabatan"
                                type="text"
                                name="jabatan"
                                value="{{ old('jabatan') }}"
                                class="form-control @error('jabatan') is-invalid @enderror"
                                placeholder="Masukkan jabatan"
                                autocomplete="off"
                                required>

                            @error('jabatan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        {{-- Mulai mengajar --}}
                        <div class="col-md-6">
                            <label for="mulai_mengajar_display" class="form-label">
                                Mulai Mengajar
                            </label>

                            <div
                                class="guru-date-control @error('mulai_mengajar') is-invalid @enderror">

                                <input
                                    id="mulai_mengajar_display"
                                    type="text"
                                    class="guru-date-display"
                                    placeholder="dd/mm/yyyy"
                                    readonly
                                    aria-label="Tanggal mulai mengajar">

                                <i class="bi bi-calendar3 guru-date-icon"></i>

                                <input
                                    id="mulai_mengajar"
                                    type="date"
                                    name="mulai_mengajar"
                                    value="{{ old('mulai_mengajar') }}"
                                    class="guru-native-date"
                                    data-display-id="mulai_mengajar_display"
                                    aria-label="Pilih tanggal mulai mengajar"
                                    required>
                            </div>

                            @error('mulai_mengajar')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        {{-- Alamat --}}
                        <div class="col-12">
                            <label for="alamat" class="form-label">
                                Alamat
                            </label>

                            <textarea
                                id="alamat"
                                name="alamat"
                                rows="3"
                                class="form-control @error('alamat') is-invalid @enderror"
                                placeholder="Masukkan alamat lengkap">{{ old('alamat') }}</textarea>

                            @error('alamat')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                    </div>
                </div>

              {{-- Footer --}}
<div class="modal-footer guru-modal-footer">
    <button
        type="button"
        class="guru-modal-button guru-cancel-button"
        data-bs-dismiss="modal">

        Batal
    </button>

    <button
        type="submit"
        class="guru-modal-button guru-save-button">

        Simpan Data
    </button>
</div>

            </form>
        </div>
    </div>
</div>

@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const modalElement =
            document.getElementById('modalGuru');

        initializeDateFields();
        initializeDeleteButtons();
        initializeModalScrollLock(modalElement);
        openModalAfterValidationError(modalElement);
    });

    function initializeDateFields() {
        const nativeDateInputs =
            document.querySelectorAll('.guru-native-date');

        nativeDateInputs.forEach(function (dateInput) {
            const displayId =
                dateInput.dataset.displayId;

            const displayInput =
                document.getElementById(displayId);

            if (!displayInput) {
                return;
            }

            synchronizeDateDisplay(
                dateInput,
                displayInput
            );

            dateInput.addEventListener('change', function () {
                synchronizeDateDisplay(
                    dateInput,
                    displayInput
                );
            });
        });
    }

    function synchronizeDateDisplay(
        dateInput,
        displayInput
    ) {
        if (!dateInput.value) {
            displayInput.value = '';
            return;
        }

        const parts =
            dateInput.value.split('-');

        if (parts.length !== 3) {
            displayInput.value = '';
            return;
        }

        const year = parts[0];
        const month = parts[1];
        const day = parts[2];

        displayInput.value =
            day + '/' + month + '/' + year;
    }

    function initializeModalScrollLock(modalElement) {
        if (!modalElement) {
            return;
        }

        modalElement.addEventListener(
            'show.bs.modal',
            lockPageScroll
        );

        modalElement.addEventListener(
            'hidden.bs.modal',
            unlockPageScroll
        );
    }

    function lockPageScroll() {
        const scrollbarWidth =
            window.innerWidth -
            document.documentElement.clientWidth;

        document.documentElement.classList.add(
            'guru-page-locked'
        );

        document.body.classList.add(
            'guru-page-locked'
        );

        if (scrollbarWidth > 0) {
            document.body.style.paddingRight =
                scrollbarWidth + 'px';
        }
    }

    function unlockPageScroll() {
        document.documentElement.classList.remove(
            'guru-page-locked'
        );

        document.body.classList.remove(
            'guru-page-locked'
        );

        document.body.style.paddingRight = '';
    }

    function openModalAfterValidationError(
        modalElement
    ) {
        if (!modalElement) {
            return;
        }

        const hasErrors =
            modalElement.dataset.hasErrors === 'true';

        if (!hasErrors) {
            return;
        }

        const modal =
            bootstrap.Modal.getOrCreateInstance(
                modalElement
            );

        modal.show();
    }

    function initializeDeleteButtons() {
        const deleteButtons =
            document.querySelectorAll('.btn-hapus');

        deleteButtons.forEach(function (button) {
            button.addEventListener('click', function () {
                const guruId =
                    button.dataset.id;

                const deleteForm =
                    document.getElementById(
                        'delete-form-' + guruId
                    );

                if (!deleteForm) {
                    return;
                }

                Swal.fire({
                    title: 'Hapus Data?',
                    text: 'Data guru yang dihapus tidak dapat dikembalikan.',
                    icon: 'warning',
                    showCancelButton: true,
                    reverseButtons: true,
                    confirmButtonColor: '#078b64',
                    cancelButtonColor: '#dc3545',
                    confirmButtonText: 'Ya, Hapus',
                    cancelButtonText: 'Batal'
                }).then(function (result) {
                    if (result.isConfirmed) {
                        deleteForm.submit();
                    }
                });
            });
        });
    }
</script>
@endpush