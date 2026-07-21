@extends('layouts.app')

@section('content')

<div class="guru-page">
    <div class="guru-page-heading">
        <div>
            <h2>Edit Data Tendik</h2>

            <p>
                Perbarui informasi tenaga kependidikan.
            </p>
        </div>

        <a
            href="{{ route('tendik.index') }}"
            class="guru-back-button">

            <i class="bi bi-arrow-left"></i>
            Kembali
        </a>
    </div>

    <div class="guru-form-card">
        <form
            action="{{ route('tendik.update', $tendik->id) }}"
            method="POST"
            enctype="multipart/form-data"
            class="guru-edit-form">

            @csrf
            @method('PUT')

            <div class="guru-form-header">
                <div>
                    <h3>Informasi Tendik</h3>

                    <p>
                        Pastikan informasi yang dimasukkan sudah benar.
                    </p>
                </div>
            </div>

            <div class="guru-form-body">
                <div class="row g-3">

                    <div class="col-md-6">
                        <label for="edit-tendik-niy" class="form-label">
                            NIY
                        </label>

                        <input
                            id="edit-tendik-niy"
                            type="text"
                            name="niy"
                            value="{{ old('niy', $tendik->niy) }}"
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
                        <label for="edit-tendik-nik" class="form-label">
                            NIK KTP
                        </label>

                        <input
                            id="edit-tendik-nik"
                            type="text"
                            name="nik_ktp"
                            value="{{ old('nik_ktp', $tendik->nik_ktp) }}"
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
                        <label for="edit-tendik-nama" class="form-label">
                            Nama Lengkap
                        </label>

                        <input
                            id="edit-tendik-nama"
                            type="text"
                            name="nama"
                            value="{{ old('nama', $tendik->nama) }}"
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
                        <label for="edit-tendik-tempat-lahir" class="form-label">
                            Tempat Lahir
                        </label>

                        <input
                            id="edit-tendik-tempat-lahir"
                            type="text"
                            name="tempat_lahir"
                            value="{{ old('tempat_lahir', $tendik->tempat_lahir) }}"
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
                            for="edit-tendik-tanggal-display"
                            class="form-label">

                            Tanggal Lahir
                        </label>

                        <div class="guru-date-control @error('tanggal_lahir') is-invalid @enderror">
                            <input
                                id="edit-tendik-tanggal-display"
                                type="text"
                                class="guru-date-display"
                                placeholder="dd/mm/yyyy"
                                readonly>

                            <i class="bi bi-calendar3 guru-date-icon"></i>

                            <input
                                id="edit-tendik-tanggal"
                                type="date"
                                name="tanggal_lahir"
                                value="{{ old('tanggal_lahir', $tendik->tanggal_lahir) }}"
                                class="guru-native-date edit-tendik-date"
                                data-display-id="edit-tendik-tanggal-display"
                                required>
                        </div>

                        @error('tanggal_lahir')
                            <div class="invalid-feedback d-block">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <label for="edit-tendik-kelamin" class="form-label">
                            Jenis Kelamin
                        </label>

                        <select
                            id="edit-tendik-kelamin"
                            name="jenis_kelamin"
                            class="form-select @error('jenis_kelamin') is-invalid @enderror"
                            required>

                            <option value="">-- Pilih --</option>

                            <option
                                value="L"
                                @selected(old('jenis_kelamin', $tendik->jenis_kelamin) === 'L')>

                                Laki-laki
                            </option>

                            <option
                                value="P"
                                @selected(old('jenis_kelamin', $tendik->jenis_kelamin) === 'P')>

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
                        <label for="edit-tendik-status" class="form-label">
                            Status
                        </label>

                        <select
                            id="edit-tendik-status"
                            name="status"
                            class="form-select @error('status') is-invalid @enderror"
                            required>

                            <option value="">-- Pilih --</option>

                            <option
                                value="Tetap"
                                @selected(old('status', $tendik->status) === 'Tetap')>

                                Tetap
                            </option>

                            <option
                                value="Honorer"
                                @selected(old('status', $tendik->status) === 'Honorer')>

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
                        <label for="edit-tendik-agama" class="form-label">
                            Agama
                        </label>

                        <select
                            id="edit-tendik-agama"
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
                                    @selected(old('agama', $tendik->agama) === $agama)>

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
                        <label for="edit-tendik-golongan" class="form-label">
                            Golongan
                        </label>

                        <select
                            id="edit-tendik-golongan"
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
                                    @selected(old('golongan', $tendik->golongan) === $golongan)>

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
                        <label for="edit-tendik-pendidikan" class="form-label">
                            Pendidikan Terakhir
                        </label>

                        <select
                            id="edit-tendik-pendidikan"
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
                                    @selected(old('pendidikan', $tendik->pendidikan) === $pendidikan)>

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
                        <label for="edit-tendik-jabatan" class="form-label">
                            Jabatan
                        </label>

                        <input
                            id="edit-tendik-jabatan"
                            type="text"
                            name="jabatan"
                            value="{{ old('jabatan', $tendik->jabatan) }}"
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
                            for="edit-tendik-mulai-display"
                            class="form-label">

                            Mulai Bekerja
                        </label>

                        <div class="guru-date-control @error('mulai_bekerja') is-invalid @enderror">
                            <input
                                id="edit-tendik-mulai-display"
                                type="text"
                                class="guru-date-display"
                                placeholder="dd/mm/yyyy"
                                readonly>

                            <i class="bi bi-calendar3 guru-date-icon"></i>

                            <input
                                id="edit-tendik-mulai"
                                type="date"
                                name="mulai_bekerja"
                                value="{{ old('mulai_bekerja', $tendik->mulai_bekerja) }}"
                                class="guru-native-date edit-tendik-date"
                                data-display-id="edit-tendik-mulai-display"
                                required>
                        </div>

                        @error('mulai_bekerja')
                            <div class="invalid-feedback d-block">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="col-12">
                        <label for="edit-tendik-alamat" class="form-label">
                            Alamat
                        </label>

                        <textarea
                            id="edit-tendik-alamat"
                            name="alamat"
                            rows="3"
                            class="form-control @error('alamat') is-invalid @enderror"
                            placeholder="Masukkan alamat lengkap">{{ old('alamat', $tendik->alamat) }}</textarea>

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
                    href="{{ route('tendik.index') }}"
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
            document.querySelectorAll('.edit-tendik-date');

        dateInputs.forEach(function (dateInput) {
            const displayInput =
                document.getElementById(
                    dateInput.dataset.displayId
                );

            if (!displayInput) {
                return;
            }

            updateEditTendikDate(
                dateInput,
                displayInput
            );

            dateInput.addEventListener('change', function () {
                updateEditTendikDate(
                    dateInput,
                    displayInput
                );
            });
        });
    });

    function updateEditTendikDate(
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