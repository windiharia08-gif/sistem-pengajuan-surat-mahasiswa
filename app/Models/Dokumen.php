<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Dokumen extends Model
{
    use HasFactory;

    protected $table = 'dokumen';

    protected $fillable = [
        'pengajuan_surat_id',
        'nama_file',
        'path_file',
        'tipe_file',
    ];

    public function pengajuanSurat(): BelongsTo
    {
        return $this->belongsTo(
            PengajuanSurat::class,
            'pengajuan_surat_id'
        );
    }
}