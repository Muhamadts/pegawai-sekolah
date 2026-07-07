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

<body class="bg-light">

<div class="d-flex">

    @include('layouts.sidebar')

    <div class="flex-grow-1">

        @include('layouts.navbar')

        <main class="p-4">

            @yield('content')

        </main>

    </div>

</div>

</body>

</html>