@extends('layouts.app')

@section('title', 'Kelola Pengajuan')

@section('content')

<div class="page-header">

    <h1>Kelola Pengajuan Surat</h1>

    <p>
        Periksa dan kelola seluruh pengajuan surat mahasiswa.
    </p>

</div>


<div class="card">

    <div style="
        display:flex;
        justify-content:space-between;
        align-items:center;
        margin-bottom:20px;
        gap:15px;
        flex-wrap:wrap;
    ">

        <div>

            <h2 style="margin:0;">
                Daftar Pengajuan
            </h2>

            <p style="
                margin:5px 0 0;
                color:#64748b;
            ">
                Data pengajuan surat mahasiswa.
            </p>

        </div>

        <span class="status-badge status-pending">
            {{ $pengajuan->count() }} Pengajuan
        </span>

    </div>


    @if($pengajuan->count())

        <div class="table-wrapper">

            <table class="data-table">

                <thead>

                    <tr>

                        <th>No</th>

                        <th>Mahasiswa</th>

                        <th>Jenis Surat</th>

                        <th>Keperluan</th>

                        <th>Status</th>

                        <th>Tanggal</th>

                        <th>Aksi</th>

                    </tr>

                </thead>

                <tbody>

                    @foreach($pengajuan as $index => $item)

                        <tr>

                            <td>
                                {{ $index + 1 }}
                            </td>

                            <td>

                                <strong>
                                    {{ $item->user->name }}
                                </strong>

                            </td>

                            <td>
                                {{ $item->jenisSurat->nama_surat }}
                            </td>

                            <td>
                                {{ $item->keperluan }}
                            </td>

                            <td>

                                @if($item->status === 'APPROVED')

                                    <span class="status-badge status-approved">
                                        APPROVED
                                    </span>

                                @elseif($item->status === 'REJECTED')

                                    <span class="status-badge status-rejected">
                                        REJECTED
                                    </span>

                                @else

                                    <span class="status-badge status-pending">
                                        PENDING
                                    </span>

                                @endif

                            </td>

                            <td>
                                {{ $item->created_at->format('d-m-Y') }}
                            </td>

                            <td>

                                <a
                                    href="{{ route('admin.pengajuan.show', $item->id) }}"
                                    class="btn btn-primary"
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

            <div class="empty-state-icon">
                📋
            </div>

            <h3>
                Belum ada pengajuan
            </h3>

            <p>
                Belum terdapat pengajuan surat dari mahasiswa.
            </p>

        </div>

    @endif

</div>


<a
    href="{{ route('admin.dashboard') }}"
    class="back-link"
>
    ← Kembali ke Dashboard
</a>

@endsection