<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\JenisSurat;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        JenisSurat::create([
            'nama_surat' => 'Surat Keterangan Aktif Kuliah',
            'deskripsi' => 'Surat keterangan bahwa mahasiswa masih aktif kuliah.',
        ]);

        JenisSurat::create([
            'nama_surat' => 'Surat Keterangan Beasiswa',
            'deskripsi' => 'Surat keterangan untuk keperluan pengajuan beasiswa.',
        ]);

        JenisSurat::create([
            'nama_surat' => 'Surat Keterangan Lulus',
            'deskripsi' => 'Surat keterangan bahwa mahasiswa telah lulus.',
        ]);

        JenisSurat::create([
            'nama_surat' => 'Surat Pengantar',
            'deskripsi' => 'Surat pengantar untuk keperluan mahasiswa.',
        ]);
    }
}