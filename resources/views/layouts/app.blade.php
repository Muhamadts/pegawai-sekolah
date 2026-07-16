<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SD Plus IGM Palembang</title>

    @vite([
        'resources/css/app.css',
        'resources/js/app.js'
    ])

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
</head>

<body class="app-body">

    <div class="app-shell">

        @include('layouts.sidebar')

        <div class="sidebar-overlay" id="sidebarOverlay"></div>

        <div class="app-main">

            @include('layouts.navbar')

            <main class="app-content">
                @yield('content')
            </main>

        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const sidebar = document.getElementById('appSidebar');
            const overlay = document.getElementById('sidebarOverlay');
            const openButton = document.getElementById('mobileMenuButton');
            const closeButton = document.getElementById('mobileSidebarClose');

            function openSidebar() {
                if (! sidebar || ! overlay) return;

                sidebar.classList.add('sidebar-open');
                overlay.classList.add('overlay-show');
                document.body.classList.add('sidebar-locked');
            }

            function closeSidebar() {
                if (! sidebar || ! overlay) return;

                sidebar.classList.remove('sidebar-open');
                overlay.classList.remove('overlay-show');
                document.body.classList.remove('sidebar-locked');
            }

            if (openButton) {
                openButton.addEventListener('click', openSidebar);
            }

            if (closeButton) {
                closeButton.addEventListener('click', closeSidebar);
            }

            if (overlay) {
                overlay.addEventListener('click', closeSidebar);
            }

            document.querySelectorAll('.sidebar .menu').forEach(function (link) {
                link.addEventListener('click', closeSidebar);
            });
        });
    </script>

    @stack('scripts')

</body>
</html>