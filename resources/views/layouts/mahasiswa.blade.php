<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        @yield('title', 'Sistem Pengajuan Surat')
    </title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>

    <nav class="main-navbar">

        <div class="nav-left">

            <a href="{{ route('mahasiswa.dashboard') }}" class="nav-brand">
                Sistem Pengajuan Surat
            </a>

            <div class="nav-menu">

                <a href="{{ route('mahasiswa.dashboard') }}"
                   class="{{ request()->routeIs('mahasiswa.dashboard') ? 'active' : '' }}">
                    Dashboard
                </a>

                <a href="{{ route('mahasiswa.pengajuan.index') }}"
                   class="{{ request()->routeIs('mahasiswa.pengajuan.*') ? 'active' : '' }}">
                    Pengajuan
                </a>

                <a href="{{ route('mahasiswa.notifikasi.index') }}"
                   class="{{ request()->routeIs('mahasiswa.notifikasi.*') ? 'active' : '' }}">
                    Notifikasi
                </a>

            </div>

        </div>

        <img
            src="{{ asset('images/logounw.png') }}"
            alt="Logo Universitas"
            class="nav-logo"
        >

    </nav>

    @if(session('success'))
        <div class="page-container" style="padding-bottom: 0;">
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        </div>
    @endif

    @if(session('info'))
        <div class="page-container" style="padding-bottom: 0;">
            <div class="alert alert-info">
                {{ session('info') }}
            </div>
        </div>
    @endif

    @if(session('error'))
        <div class="page-container" style="padding-bottom: 0;">
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        </div>
    @endif

    @yield('content')

    <footer class="page-footer">
        Sistem Pengajuan Surat © {{ date('Y') }}
    </footer>

</body>
</html>