<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PengajuanSuratController;
use App\Http\Controllers\Admin\PengajuanSuratController as AdminPengajuanSuratController;
use App\Http\Controllers\NotifikasiController;


/*
|--------------------------------------------------------------------------
| Halaman Utama
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});


/*
|--------------------------------------------------------------------------
| MAHASISWA
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'role:MAHASISWA'])->group(function () {

    /*
    |--------------------------------------------------------------------------
    | Dashboard Mahasiswa
    |--------------------------------------------------------------------------
    */

    Route::get('/mahasiswa/dashboard', function () {
        return view('mahasiswa.dashboard');
    })->name('mahasiswa.dashboard');


    /*
    |--------------------------------------------------------------------------
    | Pengajuan Surat
    |--------------------------------------------------------------------------
    */

    Route::get(
        '/mahasiswa/pengajuan',
        [PengajuanSuratController::class, 'index']
    )->name('mahasiswa.pengajuan.index');


    Route::get(
        '/mahasiswa/pengajuan/create',
        [PengajuanSuratController::class, 'create']
    )->name('mahasiswa.pengajuan.create');


    Route::post(
        '/mahasiswa/pengajuan',
        [PengajuanSuratController::class, 'store']
    )->name('mahasiswa.pengajuan.store');


    /*
    |--------------------------------------------------------------------------
    | Notifikasi
    |--------------------------------------------------------------------------
    */

    Route::get(
        '/mahasiswa/notifikasi',
        [NotifikasiController::class, 'index']
    )->name('mahasiswa.notifikasi.index');


    Route::post(
        '/mahasiswa/notifikasi/{id}/read',
        [NotifikasiController::class, 'read']
    )->name('mahasiswa.notifikasi.read');

});


/*
|--------------------------------------------------------------------------
| ADMIN
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'role:ADMIN'])->group(function () {

    Route::get(
        '/admin/dashboard',
        [\App\Http\Controllers\Admin\PengajuanSuratController::class, 'dashboard']
    )->name('admin.dashboard');


    Route::get(
        '/admin/pengajuan',
        [\App\Http\Controllers\Admin\PengajuanSuratController::class, 'index']
    )->name('admin.pengajuan.index');


    Route::get(
        '/admin/pengajuan/{id}',
        [\App\Http\Controllers\Admin\PengajuanSuratController::class, 'show']
    )->name('admin.pengajuan.show');


    Route::post(
        '/admin/pengajuan/{id}/approve',
        [\App\Http\Controllers\Admin\PengajuanSuratController::class, 'approve']
    )->name('admin.pengajuan.approve');


    Route::post(
        '/admin/pengajuan/{id}/reject',
        [\App\Http\Controllers\Admin\PengajuanSuratController::class, 'reject']
    )->name('admin.pengajuan.reject');



    /*
    |--------------------------------------------------------------------------
    | Tolak Pengajuan
    |--------------------------------------------------------------------------
    */

    Route::post(
        '/admin/pengajuan/{id}/reject',
        [AdminPengajuanSuratController::class, 'reject']
    )->name('admin.pengajuan.reject');

});


/*
|--------------------------------------------------------------------------
| Authentication
|--------------------------------------------------------------------------
*/

require __DIR__.'/auth.php';