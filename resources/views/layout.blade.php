<!DOCTYPE html>
<html>
<head>
    <title>Aplikasi Pengaduan Masyarakat</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="app.css">
</head>
<body>
    <nav class="navigasi">
        <a class="navbar-brand">Pengaduan Masyarakat</a>

        <div class="collapse" id="navbarNav">
            <ul class="navbar-nav" {list-style-type:none;}>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('pengaduan.index') }}">Pengaduan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('akun.index') }}">Akun</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('kelurahan.index') }}">Kelurahan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('informasi.index') }}">Informasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('penduduk.index') }}">Penduduk</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-4">
        @yield('content')
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>