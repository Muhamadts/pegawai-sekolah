<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login | Sistem Informasi Kepegawaian</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen bg-gradient-to-br from-emerald-700 via-green-600 to-green-500 flex items-center justify-center">

<div class="w-full max-w-lg px-6">

    <div class="bg-white rounded-3xl shadow-2xl overflow-hidden">

        <!-- Header -->
        <div class="bg-gradient-to-r from-emerald-700 to-green-600 py-12 text-center">

            <div class="w-24 h-24 rounded-full bg-white/20 mx-auto flex items-center justify-center text-5xl text-white mb-5">

                📖

            </div>

            <h1 class="text-4xl font-bold tracking-wide text-white">

                SD Plus IGM Palembang

            </h1>

            <p class="text-green-100 mt-3 text-lg">

                Sistem Informasi Kepegawaian

            </p>

        </div>

        <!-- Form -->
        <div class="p-10">

            <form method="POST" action="{{ route('login') }}">

                @csrf

                <!-- Email -->
                <div class="mb-6">

                    <label class="block mb-2 text-sm font-semibold text-gray-700">

                        Email

                    </label>

                    <input
                        type="email"
                        name="email"
                        value="{{ old('email') }}"
                        required
                        autofocus
                        placeholder="Masukkan email"
                        class="w-full h-12 rounded-xl border-gray-300 px-4 focus:border-green-600 focus:ring-green-600">

                    <x-input-error
                        :messages="$errors->get('email')"
                        class="mt-2"/>

                </div>

                <!-- Password -->
                <div class="mb-6">

                    <label class="block mb-2 text-sm font-semibold text-gray-700">

                        Password

                    </label>

                    <input
                        type="password"
                        name="password"
                        required
                        placeholder="Masukkan password"
                        class="w-full h-12 rounded-xl border-gray-300 px-4 focus:border-green-600 focus:ring-green-600">

                    <x-input-error
                        :messages="$errors->get('password')"
                        class="mt-2"/>

                </div>
            <!-- Role / Jabatan -->
<div class="mb-6">

    <label class="block mb-2 text-sm font-semibold text-gray-700">
        Role / Jabatan
    </label>

    <select
        name="role"
        required
        class="w-full h-12 rounded-xl border-gray-300 px-4 focus:border-green-600 focus:ring-green-600">

        <option value="">-- Pilih Role --</option>

        <option value="admin"
            {{ old('role') == 'admin' ? 'selected' : '' }}>
            Administrator
        </option>

        <option value="kepala_sekolah"
            {{ old('role') == 'kepala_sekolah' ? 'selected' : '' }}>
            Kepala Sekolah
        </option>

        <option value="guru"
            {{ old('role') == 'guru' ? 'selected' : '' }}>
            Guru
        </option>

        <option value="tendik"
            {{ old('role') == 'tendik' ? 'selected' : '' }}>
            Tenaga Kependidikan
        </option>

    </select>

    @error('role')
        <p class="mt-2 text-sm text-red-600">
            {{ $message }}
        </p>
    @enderror

</div>

                <!-- Remember -->
                <div class="flex justify-between items-center mb-8">

                    <label class="flex items-center">

                        <input
                            type="checkbox"
                            name="remember"
                            class="rounded border-gray-300 text-green-600">

                        <span class="ml-2 text-sm text-gray-600">

                            Remember Me

                        </span>

                    </label>

                    @if(Route::has('password.request'))

                        <a href="{{ route('password.request') }}"
                           class="text-sm text-green-600 hover:underline">

                            Lupa Password?

                        </a>

                    @endif

                </div>

                <!-- Button -->
                <button
                    type="submit"
                    class="w-full h-12 rounded-xl bg-green-600 hover:bg-green-700 text-white font-semibold text-lg shadow-md transition-all duration-300">

                    Login

                </button>

            </form>

        </div>

        <!-- Footer -->
        <div class="border-t py-5 text-center text-sm text-gray-500">

            © {{ date('Y') }} SD Plus IGM Palembang

        </div>

    </div>

</div>

</body>
</html>