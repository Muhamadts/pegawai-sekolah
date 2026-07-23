@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h2 class="fw-bold mb-1">
            Data Tenaga Kependidikan
        </h2>

        <p class="text-secondary mb-0">
            Kelola data tendik SD Plus Indo Global Mandiri Palembang
        </p>
    </div>

    <button
        type="button"
        class="btn btn-success"
        data-bs-toggle="modal"
        data-bs-target="#modalTendik">

        <i class="bi bi-plus-lg me-1"></i>
        Tambah Data
    </button>
</div>

<div class="card tendik-card border-0 shadow-sm">
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table tendik-table mb-0">
                <thead class="tendik-table-head">
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
                    @forelse ($tendiks as $tendik)
                        <tr>
                            <td class="fw-semibold">
                                {{ $loop->iteration }}
                            </td>

                            <td>
                                <strong>{{ $tendik->niy }}</strong>
                            </td>

                            <td>
                                <strong>{{ $tendik->nama }}</strong>
                            </td>

                            <td>
                                {{ $tendik->jabatan }}
                            </td>

                            <td>
                                {{ $tendik->jenis_kelamin === 'L'
                                    ? 'Laki-laki'
                                    : 'Perempuan' }}
                            </td>

                            <td>
                                <div class="aksi-group">
                                    <a
                                        href="{{ route('tendik.show', $tendik->id) }}"
                                        class="icon-btn text-primary"
                                        title="Lihat data">

                                        <i class="bi bi-eye-fill"></i>
                                    </a>

                                    <a
                                        href="{{ route('tendik.edit', $tendik->id) }}"
                                        class="icon-btn text-warning"
                                        title="Edit data">

                                        <i class="bi bi-pencil-square"></i>
                                    </a>

                                    <form
                                        id="delete-tendik-{{ $tendik->id }}"
                                        action="{{ route('tendik.destroy', $tendik->id) }}"
                                        method="POST"
                                        class="m-0">

                                        @csrf
                                        @method('DELETE')

                                        <button
                                            type="button"
                                            class="icon-btn text-danger bg-transparent border-0 btn-hapus-tendik"
                                            data-id="{{ $tendik->id }}"
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

                                Belum ada data tenaga kependidikan.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

{{-- Modal Tambah Tendik --}}
<div
    class="modal fade"
    id="modalTendik"
    tabindex="-1"
    aria-labelledby="modalTendikLabel"
    aria-hidden="true"
    data-has-errors="{{ $errors->any() ? 'true' : 'false' }}">

    <div class="modal-dialog guru-modal-dialog">
        <div class="modal-content guru-modal-content">

            <form
                action="{{ route('tendik.store') }}"
                method="POST"
                enctype="multipart/form-data"
                class="guru-modal-form">

                @csrf

                <div class="modal-header guru-modal-header">
                    <h2
                        class="modal-title guru-modal-title"
                        id="modalTendikLabel">

                        Tambah Data Tendik
                    </h2>

                    <button
                        type="button"
                        class="btn-close guru-modal-close"
                        data-bs-dismiss="modal"
                        aria-label="Tutup">
                    </button>
                </div>

                <div class="modal-body guru-modal-body">
                    <div class="row g-3">

                        <div class="col-md-6">
                            <label for="tendik-niy" class="form-label">
                                NIY
                            </label>

                            <input
                                id="tendik-niy"
                                type="text"
                                name="niy"
                                value="{{ old('niy') }}"
                                class="form-control @error('niy') is-invalid @enderror"
                                placeholder="Masukkan NIY"
                                required>

                            @error('niy')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="col-md-6">
                            <label for="tendik-nik" class="form-label">
                                NIK KTP
                            </label>

                            <input
                                id="tendik-nik"
                                type="text"
                                name="nik_ktp"
                                value="{{ old('nik_ktp') }}"
                                class="form-control @error('nik_ktp') is-invalid @enderror"
                                placeholder="Masukkan NIK KTP"
                                inputmode="numeric">

                            @error('nik_ktp')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="col-12">
                            <label for="tendik-nama" class="form-label">
                                Nama Lengkap
                            </label>

                            <input
                                id="tendik-nama"
                                type="text"
                                name="nama"
                                value="{{ old('nama') }}"
                                class="form-control @error('nama') is-invalid @enderror"
                                placeholder="Masukkan nama lengkap"
                                required>

                            @error('nama')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="col-md-6">
                            <label for="tendik-tempat-lahir" class="form-label">
                                Tempat Lahir
                            </label>

                            <input
                                id="tendik-tempat-lahir"
                                type="text"
                                name="tempat_lahir"
                                value="{{ old('tempat_lahir') }}"
                                class="form-control @error('tempat_lahir') is-invalid @enderror"
                                placeholder="Masukkan tempat lahir"
                                required>

                            @error('tempat_lahir')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="col-md-6">
                            <label
                                for="tendik-tanggal-lahir-display"
                                class="form-label">

                                Tanggal Lahir
                            </label>

                            <div class="guru-date-control @error('tanggal_lahir') is-invalid @enderror">
                                <input
                                    id="tendik-tanggal-lahir-display"
                                    type="text"
                                    class="guru-date-display"
                                    placeholder="dd/mm/yyyy"
                                    readonly>

                                <i class="bi bi-calendar3 guru-date-icon"></i>

                                <input
                                    id="tendik-tanggal-lahir"
                                    type="date"
                                    name="tanggal_lahir"
                                    value="{{ old('tanggal_lahir') }}"
                                    class="guru-native-date tendik-native-date"
                                    data-display-id="tendik-tanggal-lahir-display"
                                    required>
                            </div>

                            @error('tanggal_lahir')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="col-md-6">
                            <label for="tendik-jenis-kelamin" class="form-label">
                                Jenis Kelamin
                            </label>

                            <select
                                id="tendik-jenis-kelamin"
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

                        <div class="col-md-6">
                            <label for="tendik-status" class="form-label">
                                Status
                            </label>

                            <select
                                id="tendik-status"
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

                        <div class="col-md-6">
                            <label for="tendik-agama" class="form-label">
                                Agama
                            </label>

                            <select
                                id="tendik-agama"
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

                        <div class="col-md-6">
                            <label for="tendik-golongan" class="form-label">
                                Golongan
                            </label>

                            <select
                                id="tendik-golongan"
                                name="golongan"
                                class="form-select @error('golongan') is-invalid @enderror">

                                <option value="">-- Pilih --</option>

                                @foreach ([
                                    'I/A',
                                    'I/B',
                                    'I/C',
                                    'I/D',
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
                                    'IV/D',
                                    'IV/E'
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

                        <div class="col-md-6">
                            <label for="tendik-pendidikan" class="form-label">
                                Pendidikan Terakhir
                            </label>

                            <select
                                id="tendik-pendidikan"
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

                        <div class="col-md-6">
                            <label for="tendik-jabatan" class="form-label">
                                Jabatan
                            </label>

                            <input
                                id="tendik-jabatan"
                                type="text"
                                name="jabatan"
                                value="{{ old('jabatan') }}"
                                class="form-control @error('jabatan') is-invalid @enderror"
                                placeholder="Masukkan jabatan"
                                required>

                            @error('jabatan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="col-md-6">
                            <label
                                for="tendik-mulai-bekerja-display"
                                class="form-label">

                                Mulai Bekerja
                            </label>

                            <div class="guru-date-control @error('mulai_bekerja') is-invalid @enderror">
                                <input
                                    id="tendik-mulai-bekerja-display"
                                    type="text"
                                    class="guru-date-display"
                                    placeholder="dd/mm/yyyy"
                                    readonly>

                                <i class="bi bi-calendar3 guru-date-icon"></i>

                                <input
                                    id="tendik-mulai-bekerja"
                                    type="date"
                                    name="mulai_bekerja"
                                    value="{{ old('mulai_bekerja') }}"
                                    class="guru-native-date tendik-native-date"
                                    data-display-id="tendik-mulai-bekerja-display"
                                    required>
                            </div>

                            @error('mulai_bekerja')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="col-12">
                            <label for="tendik-alamat" class="form-label">
                                Alamat
                            </label>

                            <textarea
                                id="tendik-alamat"
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
            document.getElementById('modalTendik');

        initializeTendikDates();
        initializeTendikDeleteButtons();
        initializeTendikModalScroll(modalElement);
        openTendikModalAfterError(modalElement);
    });

    function initializeTendikDates() {
        const dateInputs =
            document.querySelectorAll('.tendik-native-date');

        dateInputs.forEach(function (dateInput) {
            const displayInput =
                document.getElementById(
                    dateInput.dataset.displayId
                );

            if (!displayInput) {
                return;
            }

            updateTendikDate(
                dateInput,
                displayInput
            );

            dateInput.addEventListener('change', function () {
                updateTendikDate(
                    dateInput,
                    displayInput
                );
            });
        });
    }

    function updateTendikDate(
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

        displayInput.value =
            parts[2] + '/' +
            parts[1] + '/' +
            parts[0];
    }

    function initializeTendikModalScroll(
    modalElement
) {
    if (!modalElement) {
        return;
    }

    modalElement.addEventListener(
        'show.bs.modal',
        function () {
            document.documentElement.classList.add(
                'guru-page-locked'
            );

            document.body.classList.add(
                'guru-page-locked'
            );

            document.documentElement.style.overflow =
                'hidden';

            document.body.style.overflow =
                'hidden';
        }
    );

    modalElement.addEventListener(
        'hidden.bs.modal',
        function () {
            document.documentElement.classList.remove(
                'guru-page-locked'
            );

            document.body.classList.remove(
                'guru-page-locked'
            );

            document.documentElement.style.overflow =
                '';

            document.body.style.overflow =
                '';

            document.body.style.paddingRight =
                '';
        }
    );
}

    function openTendikModalAfterError(
        modalElement
    ) {
        if (
            !modalElement ||
            modalElement.dataset.hasErrors !== 'true'
        ) {
            return;
        }

        bootstrap.Modal
            .getOrCreateInstance(modalElement)
            .show();
    }

    function initializeTendikDeleteButtons() {
        const deleteButtons =
            document.querySelectorAll(
                '.btn-hapus-tendik'
            );

        deleteButtons.forEach(function (button) {
            button.addEventListener('click', function () {
                const tendikId =
                    button.dataset.id;

                const deleteForm =
                    document.getElementById(
                        'delete-tendik-' + tendikId
                    );

                if (!deleteForm) {
                    return;
                }

                Swal.fire({
                    title: 'Hapus Data?',
                    text: 'Data tendik yang dihapus tidak dapat dikembalikan.',
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