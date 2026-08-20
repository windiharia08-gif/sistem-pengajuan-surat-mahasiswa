<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        Dashboard Mahasiswa | Sistem Pengajuan Surat
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
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.12);
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


        /* BRAND */

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


        /* NAV MENU */

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
           WELCOME
        ========================= */

        .welcome-card {
            background: white;
            border-radius: 18px;
            padding: 32px;

            border: 1px solid #e3e9f2;

            box-shadow:
                0 5px 20px rgba(31, 50, 81, 0.07);

            display: flex;
            align-items: center;
            justify-content: space-between;

            gap: 30px;

            margin-bottom: 35px;
        }

        .welcome-content {
            flex: 1;
        }

        .welcome-label {
            display: inline-block;

            color: #1d5bbf;
            background: #eaf2ff;

            padding: 7px 12px;

            border-radius: 20px;

            font-size: 12px;
            font-weight: 700;

            letter-spacing: 0.4px;

            margin-bottom: 12px;
        }

        .welcome-title {
            margin: 0;

            font-size: 31px;
            line-height: 1.25;

            color: #102a56;
        }

        .welcome-description {
            margin: 12px 0 0;

            max-width: 720px;

            color: #68758a;

            font-size: 15px;
            line-height: 1.7;
        }


        /* BUTTON AJUKAN */

        .primary-button {
            display: inline-flex;
            align-items: center;
            justify-content: center;

            gap: 8px;

            padding: 13px 20px;

            border-radius: 10px;

            background: #1d5bbf;
            color: white;

            font-size: 14px;
            font-weight: 700;

            transition: 0.2s;

            white-space: nowrap;
        }

        .primary-button:hover {
            background: #164b9e;
            transform: translateY(-1px);
        }


        /* =========================
           SECTION TITLE
        ========================= */

        .section-heading {
            margin-bottom: 17px;
        }

        .section-title {
            margin: 0;

            color: #102a56;

            font-size: 21px;
            font-weight: 700;
        }

        .section-description {
            margin: 5px 0 0;

            color: #7b8798;

            font-size: 14px;
        }


        /* =========================
           QUICK MENU
        ========================= */

        .quick-menu {
            display: grid;

            grid-template-columns:
                repeat(3, minmax(0, 1fr));

            gap: 20px;

            margin-bottom: 38px;
        }


        /* CARD */

        .menu-card {
            position: relative;

            background: white;

            border: 1px solid #e1e7f0;

            border-radius: 16px;

            padding: 25px;

            min-height: 220px;

            display: flex;
            flex-direction: column;

            box-shadow:
                0 4px 15px rgba(31, 50, 81, 0.05);

            transition:
                transform 0.2s,
                box-shadow 0.2s,
                border-color 0.2s;
        }

        .menu-card:hover {
            transform: translateY(-4px);

            box-shadow:
                0 10px 25px rgba(31, 50, 81, 0.11);
        }


        /* ICON */

        .menu-icon {
            width: 48px;
            height: 48px;

            border-radius: 12px;

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 22px;
            font-weight: bold;

            margin-bottom: 18px;
        }


        /* BLUE */

        .menu-blue {
            border-top: 4px solid #1d5bbf;
        }

        .menu-blue .menu-icon {
            background: #eaf2ff;
            color: #1d5bbf;
        }

        .menu-blue .menu-link {
            color: #1d5bbf;
        }


        /* YELLOW */

        .menu-yellow {
            border-top: 4px solid #f5c542;
        }

        .menu-yellow .menu-icon {
            background: #fff7d6;
            color: #9a7600;
        }

        .menu-yellow .menu-link {
            color: #9a7600;
        }


        /* GREEN-BLUE */

        .menu-teal {
            border-top: 4px solid #159a9c;
        }

        .menu-teal .menu-icon {
            background: #e4f8f8;
            color: #087779;
        }

        .menu-teal .menu-link {
            color: #087779;
        }


        .menu-title {
            margin: 0;

            font-size: 19px;
            font-weight: 700;

            color: #172033;
        }

        .menu-description {
            margin: 9px 0 0;

            color: #718096;

            font-size: 14px;
            line-height: 1.6;
        }

        .menu-link {
            margin-top: auto;

            padding-top: 18px;

            font-size: 14px;
            font-weight: 700;
        }


        /* =========================
           INFORMATION
        ========================= */

        .information-card {
            background: white;

            border: 1px solid #e1e7f0;

            border-radius: 16px;

            box-shadow:
                0 4px 15px rgba(31, 50, 81, 0.05);

            overflow: hidden;

            margin-bottom: 25px;
        }

        .information-header {
            padding: 23px 25px;

            border-bottom: 1px solid #edf0f5;
        }

        .information-title {
            margin: 0;

            color: #102a56;

            font-size: 20px;
        }

        .information-description {
            margin: 5px 0 0;

            color: #7b8798;

            font-size: 14px;
        }


        .steps {
            display: grid;

            grid-template-columns:
                repeat(3, minmax(0, 1fr));

            gap: 0;
        }

        .step {
            padding: 25px;

            display: flex;

            gap: 14px;
        }

        .step + .step {
            border-left: 1px solid #edf0f5;
        }

        .step-number {
            flex-shrink: 0;

            width: 36px;
            height: 36px;

            border-radius: 10px;

            background: #edf4ff;

            color: #1d5bbf;

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 14px;
            font-weight: 700;
        }

        .step-title {
            margin: 0;

            font-size: 15px;

            color: #172033;
        }

        .step-description {
            margin: 5px 0 0;

            color: #7b8798;

            font-size: 13px;

            line-height: 1.55;
        }


        /* =========================
           REMINDER
        ========================= */

        .reminder {
            background: #fff9e6;

            border: 1px solid #f4df8b;

            border-radius: 14px;

            padding: 18px 20px;

            display: flex;

            align-items: center;

            gap: 14px;

            margin-bottom: 35px;
        }

        .reminder-icon {
            width: 40px;
            height: 40px;

            flex-shrink: 0;

            border-radius: 10px;

            background: #f5c542;

            color: #624d00;

            display: flex;
            align-items: center;
            justify-content: center;

            font-weight: bold;
        }

        .reminder-title {
            margin: 0;

            color: #6d5600;

            font-size: 14px;
            font-weight: 700;
        }

        .reminder-text {
            margin: 4px 0 0;

            color: #806b1d;

            font-size: 13px;
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


        /* LOGOUT */

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

        @media (max-width: 900px) {

            .quick-menu {
                grid-template-columns:
                    repeat(2, minmax(0, 1fr));
            }

            .steps {
                grid-template-columns:
                    1fr;
            }

            .step + .step {
                border-left: none;

                border-top: 1px solid #edf0f5;
            }

        }


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
                padding:
                    25px 16px 45px;
            }

            .welcome-card {
                padding: 23px;

                flex-direction: column;

                align-items: flex-start;
            }

            .welcome-title {
                font-size: 26px;
            }

            .quick-menu {
                grid-template-columns: 1fr;
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


            {{-- BRAND --}}
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


            {{-- MENU --}}
            <nav class="nav-menu">

                <a
                    href="{{ route('mahasiswa.dashboard') }}"
                    class="nav-link active"
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

            </nav>

        </div>

    </header>



    {{-- =========================
         MAIN
    ========================== --}}

    <main class="main">


        {{-- WELCOME --}}

        <section class="welcome-card">

            <div class="welcome-content">

                <span class="welcome-label">
                    DASHBOARD MAHASISWA
                </span>

                <h1 class="welcome-title">

                    Selamat Datang,
                    {{ auth()->user()->name }} 👋

                </h1>

                <p class="welcome-description">

                    Kelola pengajuan surat akademik Anda dengan mudah.
                    Ajukan surat, pantau status pengajuan, dan terima
                    informasi dari admin melalui sistem ini.

                </p>

            </div>


            <a
                href="{{ route('mahasiswa.pengajuan.create') }}"
                class="primary-button"
            >

                <span>+</span>

                Ajukan Surat

            </a>

        </section>



        {{-- QUICK MENU --}}

        <section>

            <div class="section-heading">

                <h2 class="section-title">
                    Akses Cepat
                </h2>

                <p class="section-description">
                    Gunakan menu berikut untuk mengelola pengajuan Anda.
                </p>

            </div>


            <div class="quick-menu">


                {{-- CARD 1 --}}

                <a
                    href="{{ route('mahasiswa.pengajuan.create') }}"
                    class="menu-card menu-blue"
                >

                    <div class="menu-icon">
                        +
                    </div>

                    <h3 class="menu-title">
                        Ajukan Surat
                    </h3>

                    <p class="menu-description">
                        Buat pengajuan surat akademik baru
                        melalui sistem.
                    </p>

                    <span class="menu-link">
                        Buat pengajuan →
                    </span>

                </a>


                {{-- CARD 2 --}}

                <a
                    href="{{ route('mahasiswa.pengajuan.index') }}"
                    class="menu-card menu-yellow"
                >

                    <div class="menu-icon">
                        ✓
                    </div>

                    <h3 class="menu-title">
                        Pengajuan Saya
                    </h3>

                    <p class="menu-description">
                        Lihat daftar pengajuan dan pantau
                        status surat Anda.
                    </p>

                    <span class="menu-link">
                        Lihat pengajuan →
                    </span>

                </a>


                {{-- CARD 3 --}}

                <a
                    href="{{ route('mahasiswa.notifikasi.index') }}"
                    class="menu-card menu-teal"
                >

                    <div class="menu-icon">
                        🔔
                    </div>

                    <h3 class="menu-title">
                        Notifikasi
                    </h3>

                    <p class="menu-description">
                        Lihat pemberitahuan dan informasi
                        terbaru dari admin.
                    </p>

                    <span class="menu-link">
                        Lihat notifikasi →
                    </span>

                </a>


            </div>

        </section>



        {{-- =========================
             INFORMATION
        ========================== --}}

        <section class="information-card">

            <div class="information-header">

                <h2 class="information-title">
                    Informasi Sistem
                </h2>

                <p class="information-description">
                    Alur singkat proses pengajuan surat.
                </p>

            </div>


            <div class="steps">


                <div class="step">

                    <div class="step-number">
                        1
                    </div>

                    <div>

                        <h3 class="step-title">
                            Ajukan Surat
                        </h3>

                        <p class="step-description">
                            Pilih jenis surat, isi data pengajuan,
                            dan lengkapi dokumen yang diperlukan.
                        </p>

                    </div>

                </div>


                <div class="step">

                    <div class="step-number">
                        2
                    </div>

                    <div>

                        <h3 class="step-title">
                            Verifikasi Admin
                        </h3>

                        <p class="step-description">
                            Admin akan memeriksa dan memproses
                            pengajuan surat Anda.
                        </p>

                    </div>

                </div>


                <div class="step">

                    <div class="step-number">
                        3
                    </div>

                    <div>

                        <h3 class="step-title">
                            Terima Informasi
                        </h3>

                        <p class="step-description">
                            Pantau hasil pengajuan melalui menu
                            Pengajuan dan Notifikasi.
                        </p>

                    </div>

                </div>


            </div>

        </section>



        {{-- =========================
             REMINDER
        ========================== --}}

        <section class="reminder">

            <div class="reminder-icon">
                !
            </div>

            <div>

                <h3 class="reminder-title">
                    Periksa data sebelum mengirim pengajuan
                </h3>

                <p class="reminder-text">
                    Pastikan jenis surat, data pengajuan,
                    dan dokumen yang diunggah sudah benar.
                </p>

            </div>

        </section>


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