<div class="sidebar d-flex flex-column">

    <div class="sidebar-header">

        <div class="logo">

            <div class="logo-icon">
                <i class="bi bi-mortarboard-fill"></i>
            </div>

            <div>
                <h5>SD Plus IGM</h5>
                <small>Palembang</small>
            </div>

        </div>

    </div>

    <div class="sidebar-menu">

        <a href="{{ route('dashboard') }}"
            class="menu {{ request()->routeIs('dashboard') ? 'active' : '' }}">

            <i class="bi bi-grid"></i>
            <span>Beranda</span>

        </a>

        <a href="{{ route('guru.index') }}"
            class="menu {{ request()->routeIs('guru.*') ? 'active' : '' }}">

            <i class="bi bi-people"></i>
            <span>Data Guru</span>

        </a>

        <a href="{{ route('tendik.index') }}"
    class="menu {{ request()->routeIs('tendik.*') ? 'active' : '' }}">

    <i class="bi bi-person-workspace"></i>

    <span>Data Tendik</span>

</a>

        <a href="{{ route('data-induk.index') }}"
   class="menu {{ request()->routeIs('data-induk.*') ? 'active' : '' }}">

    <i class="bi bi-folder2-open"></i>

    <span>Data Induk</span>

</a>

        <a href="#"
            class="menu">

            <i class="bi bi-file-earmark-text"></i>
            <span>Laporan</span>

        </a>

    </div>

    <div class="sidebar-footer">

        <div class="profile">

            <div class="avatar">

                {{ strtoupper(substr(Auth::user()->name,0,1)) }}

            </div>

            <div>

                <strong>{{ Auth::user()->name }}</strong>

                <small>Administrator</small>

            </div>

        </div>

        <form method="POST" action="{{ route('logout') }}">

            @csrf

            <button class="logout-btn">

                <i class="bi bi-box-arrow-right"></i>

                Logout

            </button>

        </form>

    </div>

</div>