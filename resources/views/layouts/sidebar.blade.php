<div class="sidebar d-flex flex-column">

    <div class="p-4">

        <div class="d-flex align-items-center">

            <div class="logo-circle">

                <i class="bi bi-book"></i>

            </div>

            <div class="ms-3">

                <h5 class="mb-0 fw-bold text-white">
                    SD Plus IGM
                </h5>

                <small class="text-white-50">
                    Palembang
                </small>

            </div>

        </div>

    </div>

    <div class="px-3 flex-grow-1">

        <a href="/dashboard" class="menu active">

            <i class="bi bi-house"></i>

            Beranda

        </a>

<a href="{{ route('guru.index') }}" class="menu">
    <i class="bi bi-people"></i>
    Data Guru
</a>

        <a href="#" class="menu">

            <i class="bi bi-person-workspace"></i>

            Data Tendik

        </a>

        <a href="#" class="menu">

            <i class="bi bi-folder2"></i>

            Data Induk

        </a>

        <a href="#" class="menu">

            <i class="bi bi-file-earmark-text"></i>

            Laporan

        </a>

    </div>

    <div class="sidebar-user">

   <div class="user-info">

    <div class="user-avatar">

        <i class="bi bi-person-fill"></i>

    </div>

    <div class="user-detail">

        <strong>Ryuzen</strong>

        <small>Administrator</small>

    </div>

</div>

    <form method="POST" action="{{ route('logout') }}">
        @csrf

        <button type="submit" class="btn-logout">

            <i class="bi bi-box-arrow-right"></i>

            Logout

        </button>

    </form>

</div>

</div>