<?php

namespace Tests\Feature;

use App\Models\JenisSurat;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PengajuanSuratTest extends TestCase
{
    use RefreshDatabase;

    public function test_mahasiswa_dapat_membuka_halaman_pengajuan(): void
    {
        $user = User::factory()->create([
            'role' => 'MAHASISWA',
        ]);

        $this->actingAs($user);

        $response = $this->get('/mahasiswa/pengajuan/create');

        $response->assertStatus(200);
    }

    public function test_mahasiswa_dapat_mengirim_pengajuan_surat(): void
    {
        $user = User::factory()->create([
            'role' => 'MAHASISWA',
        ]);

        $jenisSurat = JenisSurat::create([
            'nama_surat' => 'Surat Keterangan Aktif Kuliah',
            'deskripsi' => 'Surat untuk keperluan mahasiswa.',
        ]);

        $this->actingAs($user);

        $response = $this->post('/mahasiswa/pengajuan', [
            'jenis_surat_id' => $jenisSurat->id,
            'keperluan' => 'Untuk keperluan administrasi mahasiswa.',
        ]);

        $response->assertRedirect('/mahasiswa/pengajuan');

        $this->assertDatabaseHas('pengajuan_surat', [
            'user_id' => $user->id,
            'jenis_surat_id' => $jenisSurat->id,
            'status' => 'PENDING',
        ]);
    }

    public function test_admin_tidak_dapat_mengakses_halaman_mahasiswa(): void
    {
        $admin = User::factory()->create([
            'role' => 'ADMIN',
        ]);

        $this->actingAs($admin);

        $response = $this->get('/mahasiswa/dashboard');

        $response->assertStatus(403);
    }
}