@php
    $user = Auth::user();

    $role = $user->role ?? 'guru_tendik';

    $roleLabel = [
        'admin' => 'Administrator',
        'guru_tendik' => 'Guru dan Tendik',
        'kepsek' => 'Kepala Sekolah',
    ][$role] ?? 'Pengguna';

    $menus = [
        [
            'label' => 'Beranda',
            'route' => 'dashboard',
            'active' => 'dashboard',
            'icon' => 'bi-grid',
            'roles' => ['admin'],
        ],
        [
            'label' => 'Data Guru',
            'route' => 'guru.index',
            'active' => 'guru.*',
            'icon' => 'bi-people',
            'roles' => ['admin', 'guru_tendik'],
        ],
        [
            'label' => 'Data Tendik',
            'route' => 'tendik.index',
            'active' => 'tendik.*',
            'icon' => 'bi-person-workspace',
            'roles' => ['admin', 'guru_tendik'],
        ],
        [
            'label' => 'Data Induk',
            'route' => 'data-induk.index',
            'active' => 'data-induk.*',
            'icon' => 'bi-folder2-open',
            'roles' => ['admin', 'guru_tendik'],
        ],
        [
            'label' => 'Laporan',
            'route' => 'laporan.index',
            'active' => 'laporan.*',
            'icon' => 'bi-file-earmark-text',
            'roles' => ['admin', 'kepsek'],
        ],
    ];
@endphp

<div class="sidebar d-flex flex-column" id="appSidebar">

    <button type="button" class="mobile-sidebar-close" id="mobileSidebarClose">
        <i class="bi bi-x-lg"></i>
    </button>

    <div class="sidebar-header">
        <div class="logo">
            <div class="logo-icon">
                 <img src="{{ asset('images/logo.jpg') }}" alt="Logo SD Plus Indo Global Mandiri">
            </div>

            <div>
                <h5>SD Plus Indo Global Mandiri</h5>
                <small>Palembang</small>
            </div>
        </div>
    </div>

    <div class="sidebar-menu">

        @foreach ($menus as $menu)
            @if (in_array($role, $menu['roles'], true))
                <a href="{{ route($menu['route']) }}"
                   class="menu {{ request()->routeIs($menu['active']) ? 'active' : '' }}">

                    <i class="bi {{ $menu['icon'] }}"></i>
                    <span>{{ $menu['label'] }}</span>

                </a>
            @endif
        @endforeach

    </div>

    <div class="sidebar-footer">

        <div class="profile">

            <div class="avatar">
                {{ strtoupper(substr($user->name, 0, 1)) }}
            </div>

            <div class="profile-text">
                <strong>{{ $user->name }}</strong>
                <small>{{ $roleLabel }}</small>
            </div>

        </div>

        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button type="submit" class="logout-btn">
                <i class="bi bi-box-arrow-right"></i>
                Logout
            </button>
        </form>

    </div>

</div>