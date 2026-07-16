@php
    $title = 'Dashboard';

    if (request()->routeIs('guru.*')) {
        $title = 'Data Guru';
    } elseif (request()->routeIs('tendik.*')) {
        $title = 'Data Tendik';
    } elseif (request()->routeIs('data-induk.*')) {
        $title = 'Data Induk';
    } elseif (request()->routeIs('laporan.*')) {
        $title = 'Laporan';
    }
@endphp

<nav class="app-navbar">

    <button type="button" class="mobile-menu-btn" id="mobileMenuButton">
        <i class="bi bi-list"></i>
    </button>

    <div class="app-navbar-text">
        <h5 class="app-navbar-title">
            {{ $title }}
        </h5>
    </div>

</nav>