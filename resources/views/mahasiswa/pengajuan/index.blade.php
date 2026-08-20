<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        Pengajuan Surat Saya | Sistem Pengajuan Surat
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
           CARD
        ========================= */

        .content-card {
            background: white;
            border: 1px solid #e1e7f0;
            border-radius: 16px;

            box-shadow:
                0 4px 15px rgba(31, 50, 81, 0.05);

            overflow: hidden;
            margin-bottom: 25px;
        }

        .content-card-header {
            padding: 23px 25px;

            display: flex;
            align-items: center;
            justify-content: space-between;

            gap: 20px;

            border-bottom: 1px solid #edf0f5;
        }

        .content-card-header h2 {
            margin: 0;
            color: #102a56;
            font-size: 20px;
        }

        .content-card-header p {
            margin: 5px 0 0;
            color: #7b8798;
            font-size: 14px;
        }


        /* =========================
           BUTTON
        ========================= */

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
           TABLE
        ========================= */

        .table-wrapper {
            width: 100%;
            overflow-x: auto;
        }

        .data-table {
            width: 100%;
            border-collapse: collapse;
            min-width: 750px;
        }

        .data-table th {
            background: #f8faff;

            color: #52627a;

            font-size: 12px;
            font-weight: 700;

            text-transform: uppercase;
            letter-spacing: 0.3px;

            text-align: left;

            padding: 16px 20px;

            border-bottom: 1px solid #e5eaf2;
        }

        .data-table td {
            padding: 18px 20px;

            color: #68758a;

            font-size: 14px;

            border-bottom: 1px solid #edf0f5;

            vertical-align: middle;
        }

        .data-table tbody tr:last-child td {
            border-bottom: none;
        }

        .data-table tbody tr:hover {
            background: #fafcff;
        }

        .data-table td strong {
            color: #172033;
            font-weight: 700;
        }


        /* =========================
           STATUS
        ========================= */

        .status-badge {
            display: inline-flex;
            align-items: center;
            justify-content: center;

            padding: 6px 10px;

            border-radius: 20px;

            font-size: 11px;
            font-weight: 700;

            letter-spacing: 0.3px;
        }

        .status-pending {
            background: #fff7d6;
            color: #9a7600;
        }

        .status-approved {
            background: #e5f7ed;
            color: #21834b;
        }

        .status-rejected {
            background: #fdeaea;
            color: #c53b3b;
        }


        /* =========================
           ALERT
        ========================= */

        .alert {
            margin: 20px 25px;
            padding: 14px 16px;

            border-radius: 10px;

            font-size: 14px;
        }

        .alert-info {
            background: #eaf2ff;
            color: #1d5bbf;
            border: 1px solid #d7e6ff;
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

            .content-card-header {
                align-items: flex-start;
                flex-direction: column;
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
                    class="nav-link active"
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


        <div class="page-header">

            <h1>
                Pengajuan Surat Saya
            </h1>

            <p>
                Kelola dan pantau status pengajuan surat Anda.
            </p>

        </div>


        <div class="content-card">

            <div class="content-card-header">

                <div>

                    <h2>
                        Daftar Pengajuan
                    </h2>

                    <p>
                        Riwayat pengajuan surat Anda.
                    </p>

                </div>


                <a
                    href="{{ route('mahasiswa.pengajuan.create') }}"
                    class="primary-button"
                >
                    + Ajukan Surat
                </a>

            </div>


            @if($pengajuan->count())

                <div class="table-wrapper">

                    <table class="data-table">

                        <thead>

                            <tr>

                                <th>
                                    No
                                </th>

                                <th>
                                    Jenis Surat
                                </th>

                                <th>
                                    Keperluan
                                </th>

                                <th>
                                    Status
                                </th>

                                <th>
                                    Tanggal
                                </th>

                            </tr>

                        </thead>


                        <tbody>

                            @foreach($pengajuan as $item)

                                <tr>

                                    <td>
                                        {{ $loop->iteration }}
                                    </td>

                                    <td>

                                        <strong>
                                            {{ $item->jenisSurat->nama_surat }}
                                        </strong>

                                    </td>

                                    <td>
                                        {{ $item->keperluan }}
                                    </td>

                                    <td>

                                        @if($item->status === 'PENDING')

                                            <span class="status-badge status-pending">
                                                PENDING
                                            </span>

                                        @elseif($item->status === 'APPROVED')

                                            <span class="status-badge status-approved">
                                                APPROVED
                                            </span>

                                        @elseif($item->status === 'REJECTED')

                                            <span class="status-badge status-rejected">
                                                REJECTED
                                            </span>

                                        @else

                                            <span class="status-badge">
                                                {{ $item->status }}
                                            </span>

                                        @endif

                                    </td>

                                    <td>
                                        {{ $item->created_at->format('d-m-Y') }}
                                    </td>

                                </tr>

                            @endforeach

                        </tbody>

                    </table>

                </div>

            @else

                <div class="alert alert-info">
                    Belum ada pengajuan surat.
                </div>

            @endif

        </div>


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