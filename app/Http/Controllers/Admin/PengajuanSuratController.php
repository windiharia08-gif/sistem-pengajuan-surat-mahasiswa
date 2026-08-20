<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PengajuanSurat;
use Illuminate\Http\Request;
use App\Services\PengajuanSuratService;

class PengajuanSuratController extends Controller
{
    protected $pengajuanService;

    public function __construct(PengajuanSuratService $pengajuanService)
    {
        $this->pengajuanService = $pengajuanService;
    }

    /*
    |--------------------------------------------------------------------------
    | DASHBOARD ADMIN
    |--------------------------------------------------------------------------
    */

    public function dashboard()
    {
        /*
        |--------------------------------------------------------------------------
        | Total seluruh pengajuan
        |--------------------------------------------------------------------------
        */

        $totalPengajuan = PengajuanSurat::count();


        /*
        |--------------------------------------------------------------------------
        | Pengajuan menunggu
        |--------------------------------------------------------------------------
        |
        | Sesuai UML:
        | PENDING = pengajuan yang sedang menunggu pemeriksaan admin.
        |
        */

        $pengajuanMenunggu = PengajuanSurat::where(
            'status',
            'PENDING'
        )->count();


        /*
        |--------------------------------------------------------------------------
        | Pengajuan disetujui
        |--------------------------------------------------------------------------
        |
        | Sesuai UML:
        | APPROVED = pengajuan yang disetujui admin.
        |
        */

        $pengajuanDisetujui = PengajuanSurat::where(
            'status',
            'APPROVED'
        )->count();


        /*
        |--------------------------------------------------------------------------
        | Pengajuan ditolak
        |--------------------------------------------------------------------------
        |
        | Sesuai UML:
        | REJECTED = pengajuan yang ditolak admin.
        |
        */

        $pengajuanDitolak = PengajuanSurat::where(
            'status',
            'REJECTED'
        )->count();


        /*
        |--------------------------------------------------------------------------
        | Pengajuan terbaru
        |--------------------------------------------------------------------------
        |
        | Ambil 5 pengajuan terbaru.
        |
        | Relasi:
        | - user
        | - jenisSurat
        |
        */

        $pengajuanTerbaru = PengajuanSurat::with([
            'user',
            'jenisSurat'
        ])
        ->latest()
        ->take(5)
        ->get();


        /*
        |--------------------------------------------------------------------------
        | Kirim seluruh data ke Dashboard Admin
        |--------------------------------------------------------------------------
        */

        return view('admin.dashboard', compact(
            'totalPengajuan',
            'pengajuanMenunggu',
            'pengajuanDisetujui',
            'pengajuanDitolak',
            'pengajuanTerbaru'
        ));
    }


    /*
    |--------------------------------------------------------------------------
    | DAFTAR PENGAJUAN
    |--------------------------------------------------------------------------
    */

    public function index()
    {
        $pengajuan = PengajuanSurat::with([
            'user',
            'jenisSurat'
        ])
        ->latest()
        ->get();

        return view(
            'admin.pengajuan.index',
            compact('pengajuan')
        );
    }


    /*
    |--------------------------------------------------------------------------
    | DETAIL PENGAJUAN
    |--------------------------------------------------------------------------
    */

    public function show($id)
    {
        $pengajuan = PengajuanSurat::with([
            'user',
            'jenisSurat',
            'dokumen'
        ])->findOrFail($id);

        return view(
            'admin.pengajuan.show',
            compact('pengajuan')
        );
    }


    /*
    |--------------------------------------------------------------------------
    | APPROVE
    |--------------------------------------------------------------------------
    */

    public function approve($id)
    {
        $pengajuan = PengajuanSurat::findOrFail($id);

        $this->pengajuanService->approve(
            $pengajuan
        );

        return redirect()
            ->route('admin.pengajuan.index')
            ->with(
                'success',
                'Pengajuan berhasil disetujui.'
            );
    }


    /*
    |--------------------------------------------------------------------------
    | REJECT
    |--------------------------------------------------------------------------
    */

    public function reject(
        Request $request,
        $id
    ) {
        $request->validate([
            'alasan_penolakan' => 'required|string|max:1000',
        ]);

        $pengajuan = PengajuanSurat::findOrFail($id);

        $this->pengajuanService->reject(
            $pengajuan,
            $request->alasan_penolakan
        );

        return redirect()
            ->route('admin.pengajuan.index')
            ->with(
                'success',
                'Pengajuan berhasil ditolak.'
            );
    }
}