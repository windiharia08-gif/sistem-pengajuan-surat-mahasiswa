<?php

namespace App\Http\Controllers;

use App\Models\Notifikasi;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
class NotifikasiController extends Controller
{
    public function index()
    {
        $notifikasi = Notifikasi::where('user_id', Auth::id())
        ->orderBy('created_at', 'desc')
        ->get();

        return view('mahasiswa.notifikasi.index', compact('notifikasi'));
    }

    public function read($id)
    {
        $notifikasi = Notifikasi::where('id', $id)
            ->where('user_id', Auth::id())
            ->firstOrFail();

        $notifikasi->update([
            'dibaca' => true,
        ]);

        return redirect()
            ->route('mahasiswa.notifikasi.index')
            ->with('success', 'Notifikasi telah ditandai sudah dibaca.');
    }
}