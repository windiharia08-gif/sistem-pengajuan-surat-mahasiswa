<?php

namespace App\Http\Controllers;

use App\Models\Dokumen;
use App\Models\JenisSurat;
use App\Models\PengajuanSurat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PengajuanSuratController extends Controller
{
    public function index()
    {
        $pengajuan = PengajuanSurat::with('jenisSurat')
            ->where('user_id', Auth::id())
            ->latest()
            ->get();

        return view('mahasiswa.pengajuan.index', compact('pengajuan'));
    }

    public function create()
    {
        $jenisSurat = JenisSurat::all();

        return view('mahasiswa.pengajuan.create', compact('jenisSurat'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'jenis_surat_id' => 'required|exists:jenis_surat,id',
            'keperluan' => 'required|string|max:1000',
            'dokumen' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:2048',
        ]);

        $pengajuan = PengajuanSurat::create([
            'user_id' => Auth::id(),
            'jenis_surat_id' => $request->jenis_surat_id,
            'keperluan' => $request->keperluan,
            'status' => 'PENDING',
        ]);

        if ($request->hasFile('dokumen')) {

            $file = $request->file('dokumen');

            $namaFile = time() . '_' . $file->getClientOriginalName();

            $path = $file->storeAs(
                'dokumen_pengajuan',
                $namaFile,
                'public'
            );

            Dokumen::create([
                'pengajuan_surat_id' => $pengajuan->id,
                'nama_file' => $file->getClientOriginalName(),
                'path_file' => $path,
                'tipe_file' => $file->getClientMimeType(),
            ]);
        }

        return redirect()
            ->route('mahasiswa.pengajuan.index')
            ->with('success', 'Pengajuan surat berhasil dikirim.');
    }
}