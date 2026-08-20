<?php

namespace App\Jobs;

use App\Models\PengajuanSurat;
use App\Models\Notifikasi;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class CheckPendingPengajuan implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public function handle(): void
    {
        $pengajuan = PengajuanSurat::where('status', 'PENDING')
            ->where('created_at', '<=', now()->subDays(2))
            ->get();

        foreach ($pengajuan as $item) {
             $sudahAda = Notifikasi::where(
            'application_id',
            $item->id
        )
        ->where(
            'judul',
            'Pengajuan Masih Diproses'
        )
        ->exists();

        if (!$sudahAda) {

            Notifikasi::create([
                'user_id' => $item->user_id,
                'application_id' => $item->id,
                'judul' => 'Pengajuan Masih Diproses',
                'pesan' => 'Pengajuan surat Anda masih dalam proses pemeriksaan admin.',
                'dibaca' => false,
            ]);
        }
    }
}
}