<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        Ajukan Surat | Sistem Pengajuan Surat
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

        button,
        input,
        select,
        textarea {
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
           ALERT
        ========================= */

        .error-alert {
            background: #fdeaea;

            border: 1px solid #f2c4c4;

            color: #b33131;

            border-radius: 14px;

            padding: 17px 20px;

            margin-bottom: 20px;
        }

        .error-alert strong {
            display: block;

            margin-bottom: 7px;

            font-size: 14px;
        }

        .error-alert ul {
            margin: 0;
            padding-left: 20px;
        }

        .error-alert li {
            font-size: 13px;
            margin-bottom: 4px;
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
           FORM
        ========================= */

        .form-container {
            padding: 25px;
        }

        .form-group {
            margin-bottom: 22px;
        }

        .form-group:last-of-type {
            margin-bottom: 0;
        }

        .form-label,
        .form-group label {
            display: block;

            margin-bottom: 8px;

            color: #172033;

            font-size: 14px;
            font-weight: 700;
        }

        .form-control {
            width: 100%;

            padding: 12px 14px;

            border: 1px solid #dce3ed;

            border-radius: 10px;

            background: white;

            color: #172033;

            font-size: 14px;

            outline: none;

            transition:
                border-color 0.2s,
                box-shadow 0.2s;
        }

        .form-control:focus {
            border-color: #1d5bbf;

            box-shadow:
                0 0 0 3px rgba(29, 91, 191, 0.10);
        }

        textarea.form-control {
            min-height: 130px;

            resize: vertical;

            line-height: 1.6;
        }

        input[type="file"].form-control {
            padding: 10px 12px;
        }

        .form-help {
            display: block;

            margin-top: 7px;

            color: #7b8798;

            font-size: 12px;
        }


        /* =========================
           ACTION
        ========================= */

        .form-actions {
            margin-top: 28px;

            padding-top: 22px;

            border-top: 1px solid #edf0f5;

            display: flex;

            justify-content: flex-end;

            align-items: center;

            gap: 10px;
        }

        .secondary-button {
            display: inline-flex;

            align-items: center;
            justify-content: center;

            padding: 12px 18px;

            border-radius: 10px;

            background: #f1f4f8;

            color: #52627a;

            font-size: 14px;

            font-weight: 700;

            transition: 0.2s;
        }

        .secondary-button:hover {
            background: #e7ebf1;
        }

        .primary-button {
            display: inline-flex;

            align-items: center;
            justify-content: center;

            padding: 13px 20px;

            border: none;

            border-radius: 10px;

            background: #1d5bbf;

            color: white;

            font-size: 14px;

            font-weight: 700;

            cursor: pointer;

            transition: 0.2s;
        }

        .primary-button:hover {
            background: #164b9e;

            transform: translateY(-1px);
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

            .form-container {
                padding: 20px;
            }

            .form-actions {
                flex-direction: column-reverse;

                align-items: stretch;
            }

            .primary-button,
            .secondary-button {
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
                Ajukan Surat
            </h1>

            <p>
                Silakan lengkapi formulir pengajuan surat di bawah ini.
            </p>

        </div>


        @if($errors->any())

            <div class="error-alert">

                <strong>
                    Pengajuan belum dapat dikirim.
                </strong>

                <ul>

                    @foreach($errors->all() as $error)

                        <li>
                            {{ $error }}
                        </li>

                    @endforeach

                </ul>

            </div>

        @endif


        <div class="content-card">


            <div class="content-card-header">

                <h2>
                    Form Pengajuan Surat
                </h2>

                <p>
                    Isi data dengan lengkap dan benar.
                </p>

            </div>


            <form
                method="POST"
                action="{{ route('mahasiswa.pengajuan.store') }}"
                enctype="multipart/form-data"
                class="form-container"
            >

                @csrf


                {{-- JENIS SURAT --}}

                <div class="form-group">

                    <label for="jenis_surat_id">
                        Jenis Surat
                    </label>

                    <select
                        id="jenis_surat_id"
                        name="jenis_surat_id"
                        class="form-control"
                        required
                    >

                        <option value="">
                            -- Pilih Jenis Surat --
                        </option>

                        @foreach($jenisSurat as $jenis)

                            <option
                                value="{{ $jenis->id }}"
                                {{ old('jenis_surat_id') == $jenis->id ? 'selected' : '' }}
                            >
                                {{ $jenis->nama_surat }}
                            </option>

                        @endforeach

                    </select>

                </div>


                {{-- KEPERLUAN --}}

                <div class="form-group">

                    <label for="keperluan">
                        Keperluan
                    </label>

                    <textarea
                        id="keperluan"
                        name="keperluan"
                        class="form-control"
                        rows="5"
                        placeholder="Jelaskan keperluan pengajuan surat..."
                        required
                    >{{ old('keperluan') }}</textarea>

                </div>


                {{-- DOKUMEN --}}

                <div class="form-group">

                    <label for="dokumen">
                        Dokumen Pendukung
                    </label>

                    <input
                        id="dokumen"
                        type="file"
                        name="dokumen"
                        class="form-control"
                        accept=".pdf,.jpg,.jpeg,.png"
                    >

                    <small class="form-help">
                        Format: PDF, JPG, JPEG, PNG. Maksimal 2 MB.
                    </small>

                </div>


                {{-- BUTTON --}}

                <div class="form-actions">

                    <a
                        href="{{ route('mahasiswa.pengajuan.index') }}"
                        class="secondary-button"
                    >
                        ← Kembali
                    </a>

                    <button
                        type="submit"
                        class="primary-button"
                    >
                        Kirim Pengajuan
                    </button>

                </div>


            </form>

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