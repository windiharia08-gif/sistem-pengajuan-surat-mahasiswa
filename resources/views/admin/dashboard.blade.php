<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        Dashboard Admin - Sistem Pengajuan Surat
    </title>


    <style>

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }


        body {
            font-family:
                Arial,
                Helvetica,
                sans-serif;

            background: #f4f6fa;

            color: #172b4d;

            min-height: 100vh;
        }


        /* =====================================================
           NAVBAR
        ====================================================== */

        .navbar {
            min-height: 92px;

            background: #1e293b;

            display: flex;

            align-items: center;

            justify-content: space-between;

            padding: 0 43px;

            color: white;
        }


        .navbar-title {
            font-size: 24px;

            font-weight: 700;

            white-space: nowrap;
        }


        .navbar-menu {
            display: flex;

            align-items: center;

            gap: 34px;
        }


        .navbar-menu a {
            color: white;

            text-decoration: none;

            font-size: 18px;

            font-weight: 500;

            transition: 0.2s;
        }


        .navbar-menu a:hover {
            color: #bfdbfe;
        }


        /*
        |--------------------------------------------------------------------------
        | Logout
        |--------------------------------------------------------------------------
        |
        | Logout menggunakan POST karena route logout Laravel
        | menerima method POST.
        |
        */

        .logout-form {
            margin: 0;
        }


        .logout-btn {
            background: #697586;

            color: white;

            border: none;

            padding: 12px 22px;

            border-radius: 8px;

            font-size: 18px;

            font-weight: 500;

            font-family: inherit;

            cursor: pointer;

            transition: 0.2s;
        }


        .logout-btn:hover {
            background: #7c8797;
        }


        /* =====================================================
           MAIN CONTAINER
        ====================================================== */

        .container {
            max-width: 1590px;

            margin: 42px auto;

            padding: 0 25px;
        }


        /* =====================================================
           WELCOME CARD
        ====================================================== */

        .welcome-card {
            background: white;

            border-radius: 15px;

            padding: 30px;

            box-shadow:
                0 5px 18px
                rgba(15, 23, 42, 0.07);

            margin-bottom: 30px;
        }


        .welcome-card h1 {
            font-size: 38px;

            line-height: 1.2;

            color: #102a4c;

            margin-bottom: 18px;
        }


        .welcome-card p {
            font-size: 18px;

            color: #475569;

            line-height: 1.6;

            margin-bottom: 7px;
        }


        .welcome-card strong {
            color: #172b4d;
        }


        .primary-btn {
            display: inline-block;

            background: #2864e6;

            color: white;

            text-decoration: none;

            padding: 12px 20px;

            border-radius: 8px;

            font-size: 16px;

            font-weight: 600;

            margin-top: 16px;

            transition: 0.2s;
        }


        .primary-btn:hover {
            background: #1d4ed8;
        }


        /* =====================================================
           SECTION TITLE
        ====================================================== */

        .section-title {
            font-size: 26px;

            color: #172b4d;

            margin-bottom: 18px;
        }


        /* =====================================================
           STATISTICS
        ====================================================== */

        .stats-grid {
            display: grid;

            grid-template-columns:
                repeat(4, 1fr);

            gap: 20px;

            margin-bottom: 30px;
        }


        .stat-card {
            background: white;

            border-radius: 14px;

            padding: 24px;

            box-shadow:
                0 5px 18px
                rgba(15, 23, 42, 0.06);

            border-left: 5px solid #2864e6;
        }


        .stat-card.waiting {
            border-left-color: #f59e0b;
        }


        .stat-card.approved {
            border-left-color: #22c55e;
        }


        .stat-card.rejected {
            border-left-color: #ef4444;
        }


        .stat-label {
            color: #64748b;

            font-size: 16px;

            margin-bottom: 10px;
        }


        .stat-number {
            font-size: 34px;

            line-height: 1;

            font-weight: 700;

            color: #172b4d;
        }


        /* =====================================================
           TABLE CARD
        ====================================================== */

        .table-card {
            background: white;

            border-radius: 15px;

            padding: 28px;

            box-shadow:
                0 5px 18px
                rgba(15, 23, 42, 0.07);
        }


        .table-header {
            display: flex;

            align-items: center;

            justify-content: space-between;

            gap: 20px;

            margin-bottom: 22px;
        }


        .table-header h2 {
            font-size: 25px;

            color: #172b4d;

            margin-bottom: 6px;
        }


        .table-header p {
            color: #64748b;

            font-size: 15px;
        }


        .view-all {
            color: #2864e6;

            text-decoration: none;

            font-size: 15px;

            font-weight: 600;

            white-space: nowrap;
        }


        .view-all:hover {
            text-decoration: underline;
        }


        /* =====================================================
           TABLE
        ====================================================== */

        .table-wrapper {
            width: 100%;

            overflow-x: auto;
        }


        table {
            width: 100%;

            min-width: 900px;

            border-collapse: collapse;
        }


        thead th {
            background: #f1f5f9;

            color: #334155;

            text-align: left;

            padding: 15px;

            font-size: 14px;

            font-weight: 700;

            border-bottom:
                1px solid #e2e8f0;
        }


        tbody td {
            padding: 16px 15px;

            font-size: 15px;

            color: #334155;

            border-bottom:
                1px solid #e5e7eb;

            vertical-align: middle;
        }


        tbody tr {
            transition: 0.2s;
        }


        tbody tr:hover {
            background: #f8fafc;
        }


        .student-name {
            color: #172b4d;

            font-weight: 700;
        }


        /* =====================================================
           STATUS BADGE
        ====================================================== */

        .status {
            display: inline-flex;

            align-items: center;

            justify-content: center;

            min-width: 95px;

            padding: 7px 13px;

            border-radius: 999px;

            font-size: 12px;

            font-weight: 700;

            letter-spacing: 0.2px;
        }


        .status-pending {
            background: #fef3c7;

            color: #92400e;
        }


        .status-approved {
            background: #dcfce7;

            color: #166534;
        }


        .status-rejected {
            background: #fee2e2;

            color: #b91c1c;
        }


        .status-default {
            background: #e2e8f0;

            color: #475569;
        }


        /* =====================================================
           DETAIL BUTTON
        ====================================================== */

        .detail-btn {
            display: inline-flex;

            align-items: center;

            justify-content: center;

            background: #2864e6;

            color: white;

            text-decoration: none;

            padding: 9px 15px;

            border-radius: 8px;

            font-size: 13px;

            font-weight: 600;

            transition: 0.2s;
        }


        .detail-btn:hover {
            background: #1d4ed8;

            transform: translateY(-1px);
        }


        /* =====================================================
           EMPTY STATE
        ====================================================== */

        .empty-state {
            text-align: center;

            padding: 55px 20px;

            color: #64748b;
        }


        .empty-icon {
            font-size: 42px;

            margin-bottom: 12px;
        }


        .empty-state h3 {
            font-size: 20px;

            color: #334155;

            margin-bottom: 7px;
        }


        .empty-state p {
            font-size: 15px;
        }


        /* =====================================================
           RESPONSIVE
        ====================================================== */

        @media (max-width: 1000px) {

            .stats-grid {
                grid-template-columns:
                    repeat(2, 1fr);
            }


            .navbar {
                padding: 0 25px;
            }


            .navbar-menu {
                gap: 20px;
            }

        }


        @media (max-width: 700px) {

            .navbar {
                padding: 20px;

                flex-direction: column;

                align-items: flex-start;

                gap: 18px;
            }


            .navbar-menu {
                width: 100%;

                flex-wrap: wrap;

                gap: 18px;
            }


            .stats-grid {
                grid-template-columns: 1fr;
            }


            .container {
                padding: 0 15px;

                margin-top: 30px;
            }


            .welcome-card {
                padding: 22px;
            }


            .welcome-card h1 {
                font-size: 30px;
            }


            .table-card {
                padding: 20px;
            }


            .table-header {
                align-items: flex-start;

                flex-direction: column;
            }

        }


    </style>

</head>


<body>


    <!-- =====================================================
         NAVBAR
    ====================================================== -->

    <nav class="navbar">


        <div class="navbar-title">

            Sistem Pengajuan Surat - Admin

        </div>


        <div class="navbar-menu">


            <a href="{{ route('admin.dashboard') }}">

                Dashboard

            </a>


            <a href="{{ route('admin.pengajuan.index') }}">

                Kelola Pengajuan

            </a>


            <form
                action="{{ route('logout') }}"
                method="POST"
                class="logout-form"
            >

                @csrf

                <button
                    type="submit"
                    class="logout-btn"
                >

                    Logout

                </button>

            </form>


        </div>


    </nav>



    <!-- =====================================================
         MAIN
    ====================================================== -->

    <main class="container">


        <!-- =================================================
             WELCOME
        ================================================== -->

        <section class="welcome-card">


            <h1>

                Dashboard Admin

            </h1>


            <p>

                Selamat datang,
                <strong>
                    {{ Auth::user()->name ?? 'Admin' }}
                </strong>

            </p>


            <p>

                Kelola dan pantau pengajuan surat mahasiswa
                melalui sistem ini.

            </p>


            <a
                href="{{ route('admin.pengajuan.index') }}"
                class="primary-btn"
            >

                Kelola Pengajuan

            </a>


        </section>



        <!-- =================================================
             RINGKASAN
        ================================================== -->

        <h2 class="section-title">

            Ringkasan Pengajuan

        </h2>


        <section class="stats-grid">


            <!-- TOTAL -->

            <div class="stat-card">


                <div class="stat-label">

                    Total Pengajuan

                </div>


                <div class="stat-number">

                    {{ $totalPengajuan }}

                </div>


            </div>



            <!-- PENDING -->

            <div class="stat-card waiting">


                <div class="stat-label">

                    Menunggu

                </div>


                <div class="stat-number">

                    {{ $pengajuanMenunggu }}

                </div>


            </div>



            <!-- APPROVED -->

            <div class="stat-card approved">


                <div class="stat-label">

                    Disetujui

                </div>


                <div class="stat-number">

                    {{ $pengajuanDisetujui }}

                </div>


            </div>



            <!-- REJECTED -->

            <div class="stat-card rejected">


                <div class="stat-label">

                    Ditolak

                </div>


                <div class="stat-number">

                    {{ $pengajuanDitolak }}

                </div>


            </div>


        </section>



        <!-- =================================================
             PENGAJUAN TERBARU
        ================================================== -->

        <section class="table-card">


            <div class="table-header">


                <div>

                    <h2>

                        Pengajuan Terbaru

                    </h2>


                    <p>

                        Lima pengajuan surat terbaru dari mahasiswa.

                    </p>

                </div>


                <a
                    href="{{ route('admin.pengajuan.index') }}"
                    class="view-all"
                >

                    Lihat Semua →

                </a>


            </div>



            @if($pengajuanTerbaru->count() > 0)


                <div class="table-wrapper">


                    <table>


                        <thead>

                            <tr>

                                <th>
                                    No
                                </th>

                                <th>
                                    Mahasiswa
                                </th>

                                <th>
                                    Jenis Surat
                                </th>

                                <th>
                                    Tanggal Pengajuan
                                </th>

                                <th>
                                    Status
                                </th>

                                <th>
                                    Aksi
                                </th>

                            </tr>

                        </thead>


                        <tbody>


                            @foreach(
                                $pengajuanTerbaru
                                as $index => $pengajuan
                            )


                                <tr>


                                    <td>

                                        {{ $index + 1 }}

                                    </td>


                                    <td>

                                        <span class="student-name">

                                            {{ $pengajuan->user->name ?? '-' }}

                                        </span>

                                    </td>


                                    <td>

                                        {{ $pengajuan->jenisSurat->nama_surat ?? '-' }}

                                    </td>


                                    <td>

                                        @if($pengajuan->created_at)

                                            {{ $pengajuan->created_at->format('d-m-Y') }}

                                        @else

                                            -

                                        @endif

                                    </td>


                                    <td>


                                        @if($pengajuan->status === 'PENDING')


                                            <span
                                                class="status status-pending"
                                            >

                                                Menunggu

                                            </span>


                                        @elseif($pengajuan->status === 'APPROVED')


                                            <span
                                                class="status status-approved"
                                            >

                                                Disetujui

                                            </span>


                                        @elseif($pengajuan->status === 'REJECTED')


                                            <span
                                                class="status status-rejected"
                                            >

                                                Ditolak

                                            </span>


                                        @else


                                            <span
                                                class="status status-default"
                                            >

                                                {{ $pengajuan->status }}

                                            </span>


                                        @endif


                                    </td>


                                    <td>


                                        <a
                                            href="{{ route(
                                                'admin.pengajuan.show',
                                                $pengajuan->id
                                            ) }}"
                                            class="detail-btn"
                                        >

                                            Detail

                                        </a>


                                    </td>


                                </tr>


                            @endforeach


                        </tbody>


                    </table>


                </div>


            @else


                <div class="empty-state">


                    <div class="empty-icon">

                        📄

                    </div>


                    <h3>

                        Belum Ada Pengajuan

                    </h3>


                    <p>

                        Belum terdapat pengajuan surat mahasiswa.

                    </p>


                </div>


            @endif


        </section>


    </main>


</body>

</html>