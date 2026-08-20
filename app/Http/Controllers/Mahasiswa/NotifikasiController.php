<?php

namespace App\Http\Controllers\Mahasiswa;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Notifikasi;

class NotifikasiController extends Controller
{
    public function index()
    {
        $notifikasi = Notifikasi::where('user_id', Auth::id())
            ->orderBy('created_at', 'desc')
            ->get();

        return view('mahasiswa.notifikasi', compact('notifikasi'));
    }

    public function read($id)
    {
        $notifikasi = Notifikasi::where('id', $id)
            ->where('user_id', Auth::id())
            ->firstOrFail();

        $notifikasi->update([
            'dibaca' => true
        ]);

        return redirect()
            ->route('mahasiswa.notifikasi.index')
            ->with('success', 'Notifikasi telah ditandai sebagai sudah dibaca.');
    }
}