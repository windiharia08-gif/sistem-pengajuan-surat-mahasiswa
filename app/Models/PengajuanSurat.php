<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\User;
use App\Models\JenisSurat;
use App\Models\Notifikasi;

class PengajuanSurat extends Model
{
    use HasFactory;

    protected $table = 'pengajuan_surat';

    protected $fillable = [
        'user_id',
        'jenis_surat_id',
        'keperluan',
        'status',
        'alasan_penolakan',
    ];

    protected $casts = [
        'status' => 'string',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function notifikasi()
{
    return $this->hasMany(Notifikasi::class, 'application_id');
}
    public function jenisSurat(): BelongsTo
    {
        return $this->belongsTo(JenisSurat::class, 'jenis_surat_id');
    }

    public function dokumen(): HasMany
    {
        return $this->hasMany(Dokumen::class, 'pengajuan_surat_id');
    }
}