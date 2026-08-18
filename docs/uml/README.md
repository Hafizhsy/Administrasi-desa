# UML Sistem Administrasi Desa

Dokumen ini disusun berdasarkan implementasi route, controller, model, middleware, dan layanan surat pada proyek. Ruang lingkupnya mengikuti fitur yang benar-benar tersedia pada sistem.

## Aktor

1. **Pengunjung**: melihat informasi layanan, mendaftar, login, dan melakukan reset kata sandi.
2. **Warga / Pengguna**: mengajukan surat, mengunggah persyaratan, melihat status, mencetak surat yang disetujui, dan mengelola profil.
3. **Admin Desa**: memeriksa pengajuan, menyetujui atau menolak pengajuan, melihat laporan, dan melihat log aktivitas.

`Warga / Pengguna` merupakan generalisasi dari `Pengunjung`, karena warga tetap dapat menjalankan fungsi publik milik pengunjung.

## Daftar diagram

- [Use Case Diagram](use-case-diagram.puml)
- [Activity Diagram Informasi Layanan](activity-informasi-layanan.puml)
- [Activity Diagram Registrasi Warga](activity-registrasi-warga.puml)
- [Activity Diagram Login Warga dan Admin](activity-login.puml)
- [Activity Diagram Reset Kata Sandi](activity-reset-kata-sandi.puml)
- [Activity Diagram Pengajuan Warga](activity-pengajuan-warga.puml)
- [Activity Diagram Status dan Cetak Surat Bertanda Tangan](activity-status-cetak-surat.puml)
- [Activity Diagram Dashboard Admin](activity-dashboard-admin.puml)
- [Activity Diagram Verifikasi, Persetujuan, dan Tanda Tangan Admin](activity-verifikasi-admin.puml)
- [Activity Diagram Laporan Admin](activity-laporan-admin.puml)
- [Activity Diagram Log Aktivitas](activity-log-aktivitas.puml)
- [Activity Diagram Kelola Profil](activity-kelola-profil.puml)
- [Activity Diagram Logout](activity-logout.puml)

Setiap activity diagram memakai **swimlane** untuk memisahkan aktivitas aktor dan sistem, mengikuti gaya diagram referensi. File dipisahkan per proses agar mudah dimasukkan satu per satu ke draw.io dan tetap terbaca ketika dicetak.

## Aturan bisnis yang tergambar

- Pengajuan baru selalu disimpan dengan status **menunggu**.
- Jenis surat harus berasal dari daftar layanan yang tersedia.
- Semua dokumen yang dipersyaratkan untuk jenis surat terpilih wajib diunggah.
- Dokumen hanya menerima PDF/JPG/JPEG/PNG dengan ukuran maksimal 2 MB per berkas.
- Status pengajuan terdiri dari **menunggu**, **disetujui**, dan **ditolak**.
- Catatan admin wajib diisi jika pengajuan ditolak.
- Hanya pemilik pengajuan yang dapat membuka halaman cetak.
- Saat menyetujui pengajuan, admin wajib mengisi nomor surat, nama kepala desa, dan mengunggah tanda tangan; NIP bersifat opsional.
- Tanda tangan berformat PNG/JPG/JPEG dengan ukuran maksimal 2 MB dan disimpan khusus untuk setiap pengajuan.
- Pengajuan lama yang sudah disetujui tetapi belum memiliki tanda tangan harus dilengkapi melalui proses **Lengkapi TTD**.
- Surat hanya dapat dicetak jika status **disetujui** dan nomor surat, nama penanda tangan, serta tanda tangan sudah tersedia.
- Hanya admin atau warga pemilik pengajuan yang dapat mengakses gambar tanda tangan surat terkait.
- Pembuatan pengajuan dan perubahan status dicatat dalam log aktivitas.

## Cara membuka atau mengekspor

File `.puml` menggunakan sintaks PlantUML. Diagram dapat dipratinjau melalui ekstensi PlantUML di IDE atau diekspor dengan PlantUML CLI, misalnya:

```bash
plantuml docs/uml/*.puml
```

Perintah tersebut menghasilkan gambar diagram pada direktori yang sama.
