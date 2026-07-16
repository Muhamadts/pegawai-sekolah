@php
    $user = Auth::user();

    $homeRoute = match ($user->role ?? null) {
        'admin' => route('dashboard'),
        'guru_tendik' => route('guru.index'),
        'kepsek' => route('laporan.index'),
        default => route('login'),
    };
@endphp

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Akses Ditolak</title>

    @vite([
        'resources/css/app.css',
        'resources/js/app.js'
    ])

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="min-vh-100 d-flex align-items-center justify-content-center px-3">

        <div class="card text-center p-5" style="max-width: 520px; width: 100%;">

            <div class="mx-auto mb-4 d-flex align-items-center justify-content-center"
                 style="width: 72px; height: 72px; border-radius: 50%; background: #fff3cd; color: #b7791f; font-size: 34px;">
                <i class="bi bi-shield-lock"></i>
            </div>

            <h1 class="fw-bold mb-2">Akses Ditolak</h1>

            <p class="text-muted mb-4">
                Anda tidak memiliki hak akses untuk membuka halaman ini.
                Silakan gunakan menu yang tersedia sesuai role akun Anda.
            </p>

            <a href="{{ $homeRoute }}" class="btn btn-success px-4">
                <i class="bi bi-arrow-left-circle me-1"></i>
                Kembali ke Halaman Utama
            </a>

        </div>

    </div>

</body>
</html>