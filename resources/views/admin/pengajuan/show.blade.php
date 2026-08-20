<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Detail Pengajuan Surat - Admin</title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #f4f6fa;
            color: #172b4d;
            min-height: 100vh;
        }

        /* ================= NAVBAR ================= */

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

        .logout-btn {
            background: #697586;
            padding: 12px 22px;
            border-radius: 8px;
        }

        .logout-btn:hover {
            background: #7c8797 !important;
            color: white !important;
        }

        /* ================= CONTAINER ================= */

        .container {
            max-width: 1590px;
            margin: 42px auto;
            padding: 0 25px;
        }

        /* ================= PAGE HEADER ================= */

        .page-header {
            margin-bottom: 28px;
        }

        .page-header h1 {
            font-size: 38px;
            line-height: 1.2;
            color: #102a4c;
            margin-bottom: 12px;
        }

        .page-header p {
            font-size: 18px;
            color: #64748b;
        }

        /* ================= CARD ================= */

        .card {
            background: white;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 5px 18px rgba(15, 23, 42, 0.07);
            margin-bottom: 25px;
        }

        /* ================= CARD HEADER ================= */

        .card-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            gap: 20px;
            margin-bottom: 28px;
        }

        .card-header h2 {
            font-size: 25px;
            color: #172b4d;
            margin-bottom: 7px;
        }

        .card-header p {
            color: #64748b;
            font-size: 16px;
        }

        /* ================= STATUS ================= */

        .status {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 9px 16px;
            border-radius: 999px;
            font-size: 13px;
            font-weight: 700;
            letter-spacing: 0.3px;
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

        /* ================= INFO GRID ================= */

        .info-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }

        .info-item {
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 10px;
            padding: 18px;
        }

        .info-label {
            font-size: 13px;
            color: #64748b;
            margin-bottom: 7px;
            font-weight: 600;
        }

        .info-value {
            font-size: 17px;
            color: #172b4d;
            font-weight: 600;
            line-height: 1.5;
        }

        .info-full {
            grid-column: 1 / -1;
        }

        /* ================= ACTION CARD ================= */

        .action-card {
            background: white;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 5px 18px rgba(15, 23, 42, 0.07);
        }

        .action-card h2 {
            font-size: 25px;
            margin-bottom: 8px;
        }

        .action-description {
            color: #64748b;
            font-size: 16px;
            margin-bottom: 25px;
        }

        /* ================= BUTTON AREA ================= */

        .approve-btn {
            border: none;
            background: #16a34a;
            color: white;
            padding: 13px 21px;
            border-radius: 8px;
            font-size: 15px;
            font-weight: 600;
            cursor: pointer;
            transition: 0.2s;
        }

        .approve-btn:hover {
            background: #15803d;
            transform: translateY(-1px);
        }

        .reject-btn {
            border: none;
            background: #dc2626;
            color: white;
            padding: 13px 21px;
            border-radius: 8px;
            font-size: 15px;
            font-weight: 600;
            cursor: pointer;
            transition: 0.2s;
        }

        .reject-btn:hover {
            background: #b91c1c;
            transform: translateY(-1px);
        }

        .button-row {
            display: flex;
            gap: 12px;
            flex-wrap: wrap;
            margin-bottom: 25px;
        }

        /* ================= REJECT FORM ================= */

        .reject-form {
            border-top: 1px solid #e5e7eb;
            padding-top: 23px;
        }

        .reject-form label {
            display: block;
            font-size: 15px;
            font-weight: 700;
            color: #334155;
            margin-bottom: 9px;
        }

        .reject-form textarea {
            width: 100%;
            min-height: 125px;
            resize: vertical;
            border: 1px solid #cbd5e1;
            border-radius: 9px;
            padding: 13px 15px;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 15px;
            color: #334155;
            outline: none;
            transition: 0.2s;
            margin-bottom: 14px;
        }

        .reject-form textarea:focus {
            border-color: #2864e6;
            box-shadow: 0 0 0 3px rgba(40, 100, 230, 0.10);
        }

        /* ================= ALREADY PROCESSED ================= */

        .processed-message {
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 10px;
            padding: 18px;
            color: #475569;
            font-size: 15px;
            line-height: 1.6;
        }

        /* ================= FOOTER ================= */

        .footer {
            max-width: 1590px;
            margin: 0 auto 30px;
            padding: 0 25px;
            color: #64748b;
            font-size: 14px;
        }

        .back-link {
            display: inline-block;
            color: #2864e6;
            text-decoration: none;
            font-size: 15px;
            font-weight: 600;
            margin-bottom: 12px;
        }

        .back-link:hover {
            text-decoration: underline;
        }

        /* ================= RESPONSIVE ================= */

        @media (max-width: 800px) {

            .navbar {
                padding: 20px 25px;
                flex-direction: column;
                align-items: flex-start;
                gap: 18px;
            }

            .navbar-menu {
                width: 100%;
                flex-wrap: wrap;
                gap: 20px;
            }

            .container {
                margin-top: 30px;
            }

            .page-header h1 {
                font-size: 32px;
            }

            .info-grid {
                grid-template-columns: 1fr;
            }

            .info-full {
                grid-column: auto;
            }

            .card,
            .action-card {
                padding: 22px;
            }
        }

        @media (max-width: 600px) {

            .navbar-title {
                font-size: 20px;
            }

            .navbar-menu a {
                font-size: 16px;
            }

            .container {
                padding: 0 15px;
            }

            .page-header h1 {
                font-size: 28px;
            }

            .card-header {
                flex-direction: column;
            }
        }
    </style>
</head>

<body>

    <!-- ================= NAVBAR ================= -->

    <nav class="navbar">

        <div class="navbar-title">
            Sistem Pengajuan Surat - Admin
        </div>

        <div class="navbar-menu">

            <a href="{{ url('/admin/dashboard') }}">
                Dashboard
            </a>

            <a href="{{ url('/admin/pengajuan') }}">
                Kelola Pengajuan
            </a>

           <form action="{{ route('logout') }}" method="POST">
    @csrf
    <button type="submit" class="logout-btn">
        Logout
    </button>
</form>

        </div>

    </nav>


    <!-- ================= MAIN ================= -->

    <main class="container">

        <div class="page-header">

            <h1>
                Detail Pengajuan Surat
            </h1>

            <p>
                Periksa informasi pengajuan sebelum mengambil tindakan.
            </p>

        </div>


        <!-- ================= INFORMATION ================= -->

        <section class="card">

            <div class="card-header">

                <div>
                    <h2>
                        Informasi Pengajuan
                    </h2>

                    <p>
                        Informasi mahasiswa dan detail surat yang diajukan.
                    </p>
                </div>

                @php
                    $status = strtoupper($pengajuan->status ?? 'PENDING');
                @endphp

                <div>

                    @if($status === 'PENDING')

                        <span class="status status-pending">
                            PENDING
                        </span>

                    @elseif($status === 'APPROVED')

                        <span class="status status-approved">
                            APPROVED
                        </span>

                    @elseif($status === 'REJECTED')

                        <span class="status status-rejected">
                            REJECTED
                        </span>

                    @else

                        <span class="status status-default">
                            {{ $status }}
                        </span>

                    @endif

                </div>

            </div>


            <div class="info-grid">

                <div class="info-item">

                    <div class="info-label">
                        Nama Mahasiswa
                    </div>

                    <div class="info-value">
                        {{ $pengajuan->mahasiswa->name ?? $pengajuan->user->name ?? '-' }}
                    </div>

                </div>


                <div class="info-item">

                    <div class="info-label">
                        Email
                    </div>

                    <div class="info-value">
                        {{ $pengajuan->mahasiswa->email ?? $pengajuan->user->email ?? '-' }}
                    </div>

                </div>


                <div class="info-item">

                    <div class="info-label">
                        Jenis Surat
                    </div>

                    <div class="info-value">
                        {{ $pengajuan->jenis_surat ?? '-' }}
                    </div>

                </div>


                <div class="info-item">

                    <div class="info-label">
                        Tanggal Pengajuan
                    </div>

                    <div class="info-value">

                        @if($pengajuan->created_at)

                            {{ $pengajuan->created_at->format('d-m-Y H:i') }}

                        @else

                            -

                        @endif

                    </div>

                </div>


                <div class="info-item info-full">

                    <div class="info-label">
                        Keperluan
                    </div>

                    <div class="info-value">
                        {{ $pengajuan->keperluan ?? '-' }}
                    </div>

                </div>


                @if(!empty($pengajuan->alasan_penolakan))

                    <div class="info-item info-full">

                        <div class="info-label">
                            Alasan Penolakan
                        </div>

                        <div class="info-value">
                            {{ $pengajuan->alasan_penolakan }}
                        </div>

                    </div>

                @endif

            </div>

        </section>


        <!-- ================= ADMIN ACTION ================= -->

        <section class="action-card">

            <h2>
                Tindakan Admin
            </h2>

            <p class="action-description">
                Pilih tindakan untuk pengajuan surat ini.
            </p>


            @if($status === 'PENDING')

                <div class="button-row">

                    <!--
                        Pertahankan action form APPROVE dari kode lama kamu
                        jika route approve yang digunakan berbeda.
                    -->

                    <form
                        action="{{ url('/admin/pengajuan/' . $pengajuan->id . '/approve') }}"
                        method="POST"
                    >

                        @csrf

                        <button
                            type="submit"
                            class="approve-btn"
                            onclick="return confirm('Apakah Anda yakin ingin menyetujui pengajuan ini?')"
                        >
                            ✓ Setujui Pengajuan
                        </button>

                    </form>

                </div>


                <div class="reject-form">

                    <form
                        action="{{ url('/admin/pengajuan/' . $pengajuan->id . '/reject') }}"
                        method="POST"
                    >

                        @csrf

                        <label for="alasan_penolakan">
                            Alasan Penolakan
                        </label>

                        <textarea
                            id="alasan_penolakan"
                            name="alasan_penolakan"
                            placeholder="Masukkan alasan penolakan..."
                        ></textarea>

                        <button
                            type="submit"
                            class="reject-btn"
                            onclick="return confirm('Apakah Anda yakin ingin menolak pengajuan ini?')"
                        >
                            ✕ Tolak Pengajuan
                        </button>

                    </form>

                </div>

            @elseif($status === 'APPROVED')

                <div class="processed-message">
                    Pengajuan ini telah <strong>disetujui</strong>.
                    Tidak ada tindakan admin yang perlu dilakukan lagi.
                </div>

            @elseif($status === 'REJECTED')

                <div class="processed-message">
                    Pengajuan ini telah <strong>ditolak</strong>.
                    Silakan lihat alasan penolakan pada informasi pengajuan di atas.
                </div>

            @endif

        </section>

    </main>


    <!-- ================= FOOTER ================= -->

    <footer class="footer">

        <a
            href="{{ url('/admin/pengajuan') }}"
            class="back-link"
        >
            ← Kembali ke Kelola Pengajuan
        </a>

        <div>
            Sistem Pengajuan Surat © 2026
        </div>

    </footer>

</body>

</html>