<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login | Sistem Informasi Kepegawaian</title>

    <link
        rel="icon"
        type="image/jpg"
        href="{{ asset('images/logo.jpg') }}"
    >

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="login-auth-page">
    <main class="login-page">

        <div class="login-card">

            <div class="login-header">
                <div class="login-icon">
                    <img
                        src="{{ asset('images/logo.jpg') }}"
                        alt="Logo SD Plus IGM"
                    >
                </div>

                <h1 class="login-title">
                    SD Plus Indo Global Mandiri Palembang
                </h1>

                <p class="login-subtitle">
                    Sistem Informasi Kepegawaian
                </p>
            </div>

            <div class="login-body">

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="login-form-group">
                        <label
                            for="username"
                            class="login-form-label"
                        >
                            Username
                        </label>

                        <input
                            id="username"
                            type="text"
                            name="username"
                            value="{{ old('username') }}"
                            required
                            autofocus
                            autocomplete="username"
                            placeholder="username"
                            class="login-form-control"
                        >

                        <x-input-error
                            :messages="$errors->get('username')"
                            class="login-input-error"
                        />
                    </div>

                    <div class="login-form-group">
                        <label
                            for="password"
                            class="login-form-label"
                        >
                            Password
                        </label>

                        <div class="login-password-field">
                            <input
                                id="password"
                                type="password"
                                name="password"
                                required
                                autocomplete="current-password"
                                placeholder="Masukkan password"
                                class="login-form-control"
                            >

                            <button
                                type="button"
                                class="login-password-toggle"
                                id="togglePassword"
                                aria-label="Tampilkan password"
                            >
                                <svg
                                    id="eyeIcon"
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M2.25 12s3.75-6.75 9.75-6.75S21.75 12 21.75 12 18 18.75 12 18.75 2.25 12 2.25 12Z"
                                    />
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M12 15.25A3.25 3.25 0 1 0 12 8.75a3.25 3.25 0 0 0 0 6.5Z"
                                    />
                                </svg>
                            </button>
                        </div>

                        <x-input-error
                            :messages="$errors->get('password')"
                            class="login-input-error"
                        />
                    </div>

                    <div class="login-form-group">
                        <label
                            for="role"
                            class="login-form-label"
                        >
                            Role / Jabatan
                        </label>

                        <select
                            id="role"
                            name="role"
                            required
                            class="login-form-control login-select"
                        >
                            <option value="">
                                -- Pilih Role --
                            </option>

                            <option
                                value="admin"
                                {{ old('role') === 'admin' ? 'selected' : '' }}
                            >
                                Administrator
                            </option>

                            <option
                                value="guru_tendik"
                                {{ old('role') === 'guru_tendik' ? 'selected' : '' }}
                            >
                                Guru dan Tenaga Kependidikan
                            </option>

                            <option
                                value="kepsek"
                                {{ old('role') === 'kepsek' ? 'selected' : '' }}
                            >
                                Kepala Sekolah
                            </option>
                        </select>

                        <x-input-error
                            :messages="$errors->get('role')"
                            class="login-input-error"
                        />
                    </div>

                    <div class="login-options">
                        <label class="login-remember-label">
                            <input
                                type="checkbox"
                                name="remember"
                                value="1"
                                {{ old('remember') ? 'checked' : '' }}
                            >

                            <span>Remember Me</span>
                        </label>

                        @if (Route::has('password.request'))
                            <a
                                href="{{ route('password.request') }}"
                                class="login-forgot-link"
                            >
                                Lupa Password?
                            </a>
                        @endif
                    </div>

                    <button type="submit" class="login-button">
                        Login
                    </button>
                </form>

            </div>

            <div class="login-footer">
                &copy; {{ date('Y') }}
                SD Plus Indo Global Mandiri Palembang
            </div>

        </div>
    </main>

    <script>
        const passwordInput = document.getElementById('password');
        const togglePassword = document.getElementById('togglePassword');
        const eyeIcon = document.getElementById('eyeIcon');

        togglePassword.addEventListener('click', function () {
            const isPassword = passwordInput.type === 'password';

            passwordInput.type = isPassword ? 'text' : 'password';

            togglePassword.setAttribute(
                'aria-label',
                isPassword
                    ? 'Sembunyikan password'
                    : 'Tampilkan password'
            );

            eyeIcon.innerHTML = isPassword
                ? `
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M3 3l18 18"
                    />
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M10.58 10.58A2 2 0 0 0 13.42 13.42"
                    />
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M9.88 4.42A10.86 10.86 0 0 1 12 4.25c6 0 9.75 6.75 9.75 6.75a18.2 18.2 0 0 1-3.07 3.78"
                    />
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M6.61 6.61C3.83 8.5 2.25 12 2.25 12S6 18.75 12 18.75c1.31 0 2.52-.32 3.61-.84"
                    />
                `
                : `
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M2.25 12s3.75-6.75 9.75-6.75S21.75 12 21.75 12 18 18.75 12 18.75 2.25 12 2.25 12Z"
                    />
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M12 15.25A3.25 3.25 0 1 0 12 8.75a3.25 3.25 0 0 0 0 6.5Z"
                    />
                `;
        });
    </script>
</body>
</html>