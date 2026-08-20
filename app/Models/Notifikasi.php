<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\User;
use App\Models\PengajuanSurat;

class Notifikasi extends Model
{
    use HasFactory;

    protected $table = 'notifikasi';

    protected $fillable = [
        'user_id',
        'application_id',
        'judul',
        'pesan',
        'dibaca',
    ];

    protected $casts = [
        'dibaca' => 'boolean',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function pengajuanSurat()
{
    return $this->belongsTo(PengajuanSurat::class, 'application_id');
}
}