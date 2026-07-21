@extends('layouts.app')

@section('content')

<div class="guru-page">
    <div class="guru-page-heading">
        <div>
            <h2>Edit Data Guru</h2>

            <p>
                Perbarui informasi data guru.
            </p>
        </div>

        <a
            href="{{ route('guru.index') }}"
            class="guru-back-button">

            <i class="bi bi-arrow-left"></i>
            Kembali
        </a>
    </div>

    <div class="guru-form-card">
        <form
            action="{{ route('guru.update', $guru->id) }}"
            method="POST"
            enctype="multipart/form-data"
            class="guru-edit-form">

            @csrf
            @method('PUT')

            <div class="guru-form-header">
                <div>
                    <h3>Informasi Guru</h3>

                    <p>
                        Pastikan informasi yang dimasukkan sudah benar.
                    </p>
                </div>
            </div>

            <div class="guru-form-body">
                <div class="row g-3">

                    {{-- NIY --}}
                    <div class="col-md-6">
                        <label for="edit-niy" class="form-label">
                            NIY
                        </label>

                        <input
                            id="edit-niy"
                            type="text"
                            name="niy"
                            value="{{ old('niy', $guru->niy) }}"
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
                        <label for="edit-nik-ktp" class="form-label">
                            NIK KTP
                        </label>

                        <input
                            id="edit-nik-ktp"
                            type="text"
                            name="nik_ktp"
                            value="{{ old('nik_ktp', $guru->nik_ktp) }}"
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
                        <label for="edit-nama" class="form-label">
                            Nama Lengkap
                        </label>

                        <input
                            id="edit-nama"
                            type="text"
                            name="nama"
                            value="{{ old('nama', $guru->nama) }}"
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
                        <label for="edit-tempat-lahir" class="form-label">
                            Tempat Lahir
                        </label>

                        <input
                            id="edit-tempat-lahir"
                            type="text"
                            name="tempat_lahir"
                            value="{{ old('tempat_lahir', $guru->tempat_lahir) }}"
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
                        <label for="edit-tanggal-lahir-display" class="form-label">
                            Tanggal Lahir
                        </label>

                        <div class="guru-date-control @error('tanggal_lahir') is-invalid @enderror">
                            <input
                                id="edit-tanggal-lahir-display"
                                type="text"
                                class="guru-date-display"
                                placeholder="dd/mm/yyyy"
                                readonly
                                aria-label="Tanggal lahir">

                            <i class="bi bi-calendar3 guru-date-icon"></i>

                            <input
                                id="edit-tanggal-lahir"
                                type="date"
                                name="tanggal_lahir"
                                value="{{ old('tanggal_lahir', $guru->tanggal_lahir) }}"
                                class="guru-native-date edit-native-date"
                                data-display-id="edit-tanggal-lahir-display"
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
                        <label for="edit-jenis-kelamin" class="form-label">
                            Jenis Kelamin
                        </label>

                        <select
                            id="edit-jenis-kelamin"
                            name="jenis_kelamin"
                            class="form-select @error('jenis_kelamin') is-invalid @enderror"
                            required>

                            <option value="">-- Pilih --</option>

                            <option
                                value="L"
                                @selected(old('jenis_kelamin', $guru->jenis_kelamin) === 'L')>

                                Laki-laki
                            </option>

                            <option
                                value="P"
                                @selected(old('jenis_kelamin', $guru->jenis_kelamin) === 'P')>

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
                        <label for="edit-status" class="form-label">
                            Status
                        </label>

                        <select
                            id="edit-status"
                            name="status"
                            class="form-select @error('status') is-invalid @enderror"
                            required>

                            <option value="">-- Pilih --</option>

                            <option
                                value="Tetap"
                                @selected(old('status', $guru->status) === 'Tetap')>

                                Tetap
                            </option>

                            <option
                                value="Honorer"
                                @selected(old('status', $guru->status) === 'Honorer')>

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
                        <label for="edit-agama" class="form-label">
                            Agama
                        </label>

                        <select
                            id="edit-agama"
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
                                    @selected(old('agama', $guru->agama) === $agama)>

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
                        <label for="edit-golongan" class="form-label">
                            Golongan
                        </label>

                        <select
                            id="edit-golongan"
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
                                    @selected(old('golongan', $guru->golongan) === $golongan)>

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
                        <label for="edit-pendidikan" class="form-label">
                            Pendidikan Terakhir
                        </label>

                        <select
                            id="edit-pendidikan"
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
                                    @selected(old('pendidikan', $guru->pendidikan) === $pendidikan)>

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
                        <label for="edit-jabatan" class="form-label">
                            Jabatan
                        </label>

                        <input
                            id="edit-jabatan"
                            type="text"
                            name="jabatan"
                            value="{{ old('jabatan', $guru->jabatan) }}"
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
                        <label for="edit-mulai-mengajar-display" class="form-label">
                            Mulai Mengajar
                        </label>

                        <div class="guru-date-control @error('mulai_mengajar') is-invalid @enderror">
                            <input
                                id="edit-mulai-mengajar-display"
                                type="text"
                                class="guru-date-display"
                                placeholder="dd/mm/yyyy"
                                readonly
                                aria-label="Tanggal mulai mengajar">

                            <i class="bi bi-calendar3 guru-date-icon"></i>

                            <input
                                id="edit-mulai-mengajar"
                                type="date"
                                name="mulai_mengajar"
                                value="{{ old('mulai_mengajar', $guru->mulai_mengajar) }}"
                                class="guru-native-date edit-native-date"
                                data-display-id="edit-mulai-mengajar-display"
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
                        <label for="edit-alamat" class="form-label">
                            Alamat
                        </label>

                        <textarea
                            id="edit-alamat"
                            name="alamat"
                            rows="3"
                            class="form-control @error('alamat') is-invalid @enderror"
                            placeholder="Masukkan alamat lengkap">{{ old('alamat', $guru->alamat) }}</textarea>

                        @error('alamat')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                </div>
            </div>

            <div class="guru-form-footer">
                <a
                    href="{{ route('guru.index') }}"
                    class="guru-form-cancel-button">

                    Batal
                </a>

                <button
                    type="submit"
                    class="guru-form-save-button">

                    Simpan Perubahan
                </button>
            </div>

        </form>
    </div>
</div>

@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const dateInputs =
            document.querySelectorAll('.edit-native-date');

        dateInputs.forEach(function (dateInput) {
            const displayInput =
                document.getElementById(
                    dateInput.dataset.displayId
                );

            if (!displayInput) {
                return;
            }

            updateEditDateDisplay(
                dateInput,
                displayInput
            );

            dateInput.addEventListener('change', function () {
                updateEditDateDisplay(
                    dateInput,
                    displayInput
                );
            });
        });
    });

    function updateEditDateDisplay(
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
</script>
@endpush