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

<div class="app-container">

    <nav class="navbar">

        <div class="navbar-inner">

            @if(auth()->check() && auth()->user()->role === 'ADMIN')

                <a href="{{ route('admin.dashboard') }}" class="brand">
                    Sistem Pengajuan Surat
                </a>

                <div class="nav-menu">

                    <a
                        href="{{ route('admin.dashboard') }}"
                        class="nav-link"
                    >
                        Dashboard
                    </a>

                    <a
                        href="{{ route('admin.pengajuan.index') }}"
                        class="nav-link"
                    >
                        Kelola Pengajuan
                    </a>

                </div>

            @else

                <a href="{{ route('mahasiswa.dashboard') }}" class="brand">
                    Sistem Pengajuan Surat
                </a>

                <div class="nav-menu">

                    <a
                        href="{{ route('mahasiswa.dashboard') }}"
                        class="nav-link"
                    >
                        Dashboard
                    </a>

                    <a
                        href="{{ route('mahasiswa.pengajuan.index') }}"
                        class="nav-link"
                    >
                        Pengajuan
                    </a>

                    <a
                        href="{{ route('mahasiswa.notifikasi.index') }}"
                        class="nav-link"
                    >
                        Notifikasi
                    </a>

                </div>

            @endif

        </div>

    </nav>


    <main class="main-content">

        @if(session('success'))

            <div class="alert alert-success">
                {{ session('success') }}
            </div>

        @endif


        @if(session('error'))

            <div class="alert alert-error">
                {{ session('error') }}
            </div>

        @endif


        @yield('content')

    </main>


    <footer class="footer">
        Sistem Pengajuan Surat &copy; {{ date('Y') }}
    </footer>

</div>

</body>

</html>