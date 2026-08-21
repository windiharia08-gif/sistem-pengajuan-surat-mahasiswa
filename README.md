# Sistem Pengajuan Surat Mahasiswa

Sistem Pengajuan Surat Mahasiswa adalah aplikasi berbasis web yang digunakan untuk mempermudah proses pengajuan surat akademik oleh mahasiswa secara online serta membantu admin dalam melakukan pengelolaan dan verifikasi pengajuan.

Aplikasi ini dibuat untuk menggantikan proses pengajuan surat secara manual sehingga proses pengajuan, pemeriksaan, dan pemantauan status surat dapat dilakukan secara lebih terstruktur.

---

## Fitur Utama

### Mahasiswa

- Login sebagai mahasiswa
- Mengakses dashboard mahasiswa
- Melihat jenis surat yang tersedia
- Mengajukan surat secara online
- Mengisi data pengajuan surat
- Mengunggah dokumen pendukung
- Melihat daftar pengajuan
- Memantau status pengajuan surat

### Admin

- Login sebagai admin
- Mengakses dashboard admin
- Melihat jumlah pengajuan surat
- Melihat pengajuan terbaru
- Melihat daftar pengajuan mahasiswa
- Melihat detail pengajuan
- Melakukan proses verifikasi pengajuan
- Mengubah status pengajuan
- Mengelola proses pengajuan surat

### Keamanan dan Hak Akses

- Sistem memiliki role mahasiswa dan admin
- Halaman mahasiswa dilindungi dari akses admin yang tidak sesuai
- Halaman admin dilindungi dari akses mahasiswa
- Pengguna harus melakukan autentikasi sebelum mengakses halaman yang dilindungi

---

## Alur Sistem

### Alur Mahasiswa

1. Mahasiswa melakukan login.
2. Mahasiswa masuk ke dashboard.
3. Mahasiswa memilih menu pengajuan surat.
4. Mahasiswa memilih jenis surat.
5. Mahasiswa mengisi data yang diperlukan.
6. Mahasiswa mengunggah dokumen pendukung.
7. Mahasiswa mengirim pengajuan.
8. Pengajuan tersimpan ke dalam sistem.
9. Mahasiswa dapat memantau status pengajuan.

### Alur Admin

1. Admin melakukan login.
2. Admin masuk ke dashboard admin.
3. Admin melihat daftar pengajuan mahasiswa.
4. Admin membuka detail pengajuan.
5. Admin memeriksa data dan dokumen pengajuan.
6. Admin melakukan proses verifikasi.
7. Status pengajuan diperbarui.
8. Mahasiswa dapat melihat status pengajuan melalui sistem.

---

## Teknologi yang Digunakan

- Laravel
- PHP
- MySQL
- Blade
- HTML
- CSS
- JavaScript
- Composer
- Vite
- Git
- GitHub

---

## Struktur Sistem

Aplikasi menggunakan framework Laravel dengan struktur utama:

```text
sistem-pengajuan-surat-mahasiswa/
├── app/
├── bootstrap/
├── config/
├── database/
│   ├── migrations/
│   └── seeders/
├── public/
├── resources/
│   └── views/
├── routes/
├── storage/
├── tests/
├── vendor/
├── .env.example
├── artisan
├── composer.json
├── package.json
└── README.md