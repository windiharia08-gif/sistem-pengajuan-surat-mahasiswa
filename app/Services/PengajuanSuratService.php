<?php

namespace App\Services;

use App\Models\PengajuanSurat;
use App\Models\Notifikasi;

class PengajuanSuratService
{
    public function approve(PengajuanSurat $pengajuan)
    {
        $pengajuan->update([
            'status' => 'APPROVED',
            'alasan_penolakan' => null,
        ]);

        Notifikasi::create([
            'user_id' => $pengajuan->user_id,
            'application_id' => $pengajuan->id,
            'judul' => 'Pengajuan Surat Disetujui',
            'pesan' => 'Pengajuan ' .
                $pengajuan->jenisSurat->nama_surat .
                ' telah disetujui oleh admin.',
            'dibaca' => false,
        ]);

        return $pengajuan;
    }

    public function reject(
        PengajuanSurat $pengajuan,
        string $alasan
    ) {
        $pengajuan->update([
            'status' => 'REJECTED',
            'alasan_penolakan' => $alasan,
        ]);

        Notifikasi::create([
            'user_id' => $pengajuan->user_id,
            'application_id' => $pengajuan->id,
            'judul' => 'Pengajuan Surat Ditolak',
            'pesan' => 'Pengajuan ' .
                $pengajuan->jenisSurat->nama_surat .
                ' ditolak. Alasan: ' .
                $alasan,
            'dibaca' => false,
        ]);

        return $pengajuan;
    }
}