<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        Notifikasi | Sistem Pengajuan Surat
    </title>

    <style>

        * {
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            margin: 0;
            padding: 0;

            font-family:
                Arial,
                Helvetica,
                sans-serif;

            background: #f4f7fb;
            color: #172033;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        button {
            font-family: inherit;
        }


        /* =========================
           NAVBAR
        ========================= */

        .navbar {
            width: 100%;
            height: 76px;

            background: #102a56;
            color: white;

            box-shadow:
                0 2px 10px rgba(0, 0, 0, 0.12);
        }

        .navbar-container {
            max-width: 1200px;
            height: 76px;

            margin: 0 auto;
            padding: 0 28px;

            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .brand-logo {
            width: 44px;
            height: 44px;

            background: white;
            border-radius: 10px;
            padding: 4px;

            display: flex;
            align-items: center;
            justify-content: center;
        }

        .brand-logo img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        .brand-text {
            display: flex;
            flex-direction: column;
        }

        .brand-title {
            font-size: 17px;
            font-weight: 700;
            line-height: 1.2;
        }

        .brand-subtitle {
            font-size: 12px;
            color: #cbd7ea;
            margin-top: 3px;
        }

        .nav-menu {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .nav-link {
            color: #dbe5f4;

            font-size: 14px;
            font-weight: 600;

            padding: 10px 15px;

            border-radius: 8px;

            transition: 0.2s;
        }

        .nav-link:hover {
            background: rgba(255, 255, 255, 0.12);
            color: white;
        }

        .nav-link.active {
            background: #f5c542;
            color: #172033;
        }


        /* =========================
           MAIN
        ========================= */

        .main {
            max-width: 1200px;

            margin: 0 auto;

            padding: 42px 28px 60px;
        }


        /* =========================
           PAGE HEADER
        ========================= */

        .page-header {
            margin-bottom: 25px;
        }

        .page-header h1 {
            margin: 0;

            color: #102a56;

            font-size: 30px;
            line-height: 1.25;
        }

        .page-header p {
            margin: 9px 0 0;

            color: #68758a;

            font-size: 15px;
            line-height: 1.6;
        }


        /* =========================
           SUCCESS ALERT
        ========================= */

        .success-alert {
            background: #e5f7ed;

            border: 1px solid #bfe6cf;

            color: #21834b;

            border-radius: 12px;

            padding: 14px 16px;

            margin-bottom: 20px;

            font-size: 14px;
        }


        /* =========================
           NOTIFICATION LIST
        ========================= */

        .notification-list {
            display: flex;

            flex-direction: column;

            gap: 14px;

            margin-bottom: 25px;
        }


        /* =========================
           NOTIFICATION CARD
        ========================= */

        .notification-card {
            background: white;

            border: 1px solid #e1e7f0;

            border-radius: 16px;

            padding: 22px 24px;

            box-shadow:
                0 4px 15px rgba(31, 50, 81, 0.05);

            transition:
                transform 0.2s,
                box-shadow 0.2s;
        }

        .notification-card:hover {
            transform: translateY(-2px);

            box-shadow:
                0 8px 22px rgba(31, 50, 81, 0.09);
        }

        .notification-card.unread {
            border-left: 4px solid #1d5bbf;
        }


        /* =========================
           NOTIFICATION HEADER
        ========================= */

        .notification-header {
            display: flex;

            align-items: center;

            justify-content: space-between;

            gap: 25px;
        }

        .notification-content {
            flex: 1;
            min-width: 0;
        }

        .notification-title {
            margin: 0;

            color: #102a56;

            font-size: 17px;

            line-height: 1.4;
        }

        .notification-message {
            margin: 7px 0 0;

            color: #68758a;

            font-size: 14px;

            line-height: 1.65;
        }

        .notification-date {
            margin-top: 11px;

            color: #8a96a8;

            font-size: 12px;
        }


        /* =========================
           ACTION
        ========================= */

        .notification-action {
            flex-shrink: 0;
        }

        .notification-read {
            display: inline-flex;

            align-items: center;
            justify-content: center;

            padding: 7px 11px;

            border-radius: 20px;

            background: #e5f7ed;

            color: #21834b;

            font-size: 11px;

            font-weight: 700;

            letter-spacing: 0.3px;
        }

        .yellow-button {
            border: none;

            background: #f5c542;

            color: #172033;

            padding: 10px 15px;

            border-radius: 9px;

            font-size: 12px;

            font-weight: 700;

            cursor: pointer;

            transition: 0.2s;
        }

        .yellow-button:hover {
            background: #ffd75d;

            transform: translateY(-1px);
        }


        /* =========================
           EMPTY CARD
        ========================= */

        .content-card {
            background: white;

            border: 1px solid #e1e7f0;

            border-radius: 16px;

            box-shadow:
                0 4px 15px rgba(31, 50, 81, 0.05);

            padding: 25px;

            margin-bottom: 25px;
        }

        .empty-alert {
            background: #eaf2ff;

            border: 1px solid #d7e6ff;

            color: #1d5bbf;

            border-radius: 10px;

            padding: 14px 16px;

            font-size: 14px;
        }


        /* =========================
           BACK LINK
        ========================= */

        .back-link {
            display: inline-block;

            color: #1d5bbf;

            font-size: 14px;
            font-weight: 700;

            margin-top: 3px;
        }

        .back-link:hover {
            color: #164b9e;
        }


        /* =========================
           FOOTER
        ========================= */

        .footer {
            background: #102a56;

            color: #d5dfed;

            margin-top: 20px;
        }

        .footer-container {
            max-width: 1200px;

            margin: 0 auto;

            padding: 20px 28px;

            display: flex;

            align-items: center;
            justify-content: space-between;

            gap: 20px;
        }

        .footer-text {
            font-size: 13px;
        }

        .logout-button {
            border: none;

            background: #f5c542;

            color: #172033;

            padding: 9px 17px;

            border-radius: 8px;

            font-size: 13px;
            font-weight: 700;

            cursor: pointer;

            transition: 0.2s;
        }

        .logout-button:hover {
            background: #ffd75d;
        }


        /* =========================
           RESPONSIVE
        ========================= */

        @media (max-width: 700px) {

            .navbar {
                height: auto;
            }

            .navbar-container {
                height: auto;

                min-height: 76px;

                flex-wrap: wrap;

                padding-top: 12px;
                padding-bottom: 12px;

                gap: 12px;
            }

            .nav-menu {
                width: 100%;

                overflow-x: auto;

                padding-bottom: 2px;
            }

            .main {
                padding: 25px 16px 45px;
            }

            .notification-header {
                align-items: flex-start;

                flex-direction: column;

                gap: 15px;
            }

            .notification-action {
                width: 100%;
            }

            .yellow-button {
                width: 100%;
            }

            .footer-container {
                flex-direction: column;

                text-align: center;
            }

        }

    </style>

</head>


<body>


    {{-- =========================
         NAVBAR
    ========================== --}}

    <header class="navbar">

        <div class="navbar-container">

            <a
                href="{{ route('mahasiswa.dashboard') }}"
                class="brand"
            >

                <div class="brand-logo">

                    <img
                        src="{{ asset('images/logounw.png') }}"
                        alt="Logo Universitas"
                    >

                </div>

                <div class="brand-text">

                    <span class="brand-title">
                        Sistem Pengajuan Surat
                    </span>

                    <span class="brand-subtitle">
                        Portal Mahasiswa
                    </span>

                </div>

            </a>


            <nav class="nav-menu">

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
                    class="nav-link active"
                >
                    Notifikasi
                </a>

            </nav>

        </div>

    </header>



    {{-- =========================
         MAIN
    ========================== --}}

    <main class="main">


        <div class="page-header">

            <h1>
                Notifikasi
            </h1>

            <p>
                Informasi terbaru mengenai pengajuan surat Anda.
            </p>

        </div>


        @if(session('success'))

            <div class="success-alert">
                {{ session('success') }}
            </div>

        @endif


        @if($notifikasi->count())


            <div class="notification-list">


                @foreach($notifikasi as $item)


                    <div
                        class="notification-card {{ !$item->dibaca ? 'unread' : '' }}"
                    >


                        <div class="notification-header">


                            <div class="notification-content">

                                <h3 class="notification-title">
                                    {{ $item->judul }}
                                </h3>

                                <p class="notification-message">
                                    {{ $item->pesan }}
                                </p>

                                <div class="notification-date">

                                    {{ $item->created_at->format('d-m-Y H:i') }}

                                </div>

                            </div>


                            <div class="notification-action">


                                @if($item->dibaca)

                                    <span class="notification-read">
                                        DIBACA
                                    </span>


                                @else

                                    <form
                                        action="{{ route('mahasiswa.notifikasi.read', $item->id) }}"
                                        method="POST"
                                    >

                                        @csrf

                                        <button
                                            type="submit"
                                            class="yellow-button"
                                        >
                                            Tandai Dibaca
                                        </button>

                                    </form>

                                @endif


                            </div>


                        </div>


                    </div>


                @endforeach


            </div>


        @else


            <div class="content-card">

                <div class="empty-alert">
                    Belum ada notifikasi.
                </div>

            </div>


        @endif


        <a
            href="{{ route('mahasiswa.dashboard') }}"
            class="back-link"
        >
            ← Kembali ke Dashboard
        </a>


    </main>



    {{-- =========================
         FOOTER
    ========================== --}}

    <footer class="footer">

        <div class="footer-container">

            <div class="footer-text">

                © {{ date('Y') }}
                Sistem Pengajuan Surat

            </div>


            <form
                method="POST"
                action="{{ route('logout') }}"
            >

                @csrf

                <button
                    type="submit"
                    class="logout-button"
                >
                    Logout
                </button>

            </form>

        </div>

    </footer>


</body>

</html>