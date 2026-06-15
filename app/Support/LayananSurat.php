<?php

namespace App\Support;

class LayananSurat
{
    public static function all(): array
    {
        return [
            'belum_menikah' => [
                'label' => 'Keterangan Belum Menikah',
                'short_label' => 'Belum Menikah',
                'icon' => 'person_check',
                'category' => 'Administrasi Perkawinan',
                'description' => 'Layanan untuk warga yang membutuhkan surat keterangan status belum menikah sebagai persyaratan administrasi resmi.',
                'documents' => ['Scan KTP Pemohon', 'Scan Kartu Keluarga', 'Surat Pengantar RT RW'],
            ],
            'pernah_menikah' => [
                'label' => 'Keterangan Pernah Menikah',
                'short_label' => 'Pernah Menikah',
                'icon' => 'diversity_1',
                'category' => 'Administrasi Perkawinan',
                'description' => 'Layanan untuk menerangkan riwayat status perkawinan warga yang pernah menikah.',
                'documents' => ['Scan KTP Pemohon', 'Scan Kartu Keluarga', 'Scan Akta Cerai atau Akta Kematian Pasangan', 'Surat Pengantar RT RW'],
            ],
            'kematian' => [
                'label' => 'Keterangan Kematian',
                'short_label' => 'Kematian',
                'icon' => 'clinical_notes',
                'category' => 'Administrasi Kependudukan',
                'description' => 'Layanan untuk pengantar atau keterangan kematian warga sebagai dasar pengurusan dokumen kependudukan.',
                'documents' => ['Scan KTP Pelapor', 'Scan Kartu Keluarga', 'Akta Kematian atau Format Kematian dari Capil', 'Surat Pengantar RT RW'],
            ],
            'kelahiran' => [
                'label' => 'Keterangan Kelahiran',
                'short_label' => 'Kelahiran',
                'icon' => 'child_care',
                'category' => 'Administrasi Kependudukan',
                'description' => 'Layanan untuk pengantar atau keterangan kelahiran sebagai pendukung pengurusan akta dan data kependudukan.',
                'documents' => ['Scan KTP Orang Tua', 'Scan Kartu Keluarga', 'Akta Kelahiran atau Format Kelahiran dari Capil', 'Surat Pengantar RT RW'],
            ],
            'kitir_nikah' => [
                'label' => 'Kitir Nikah',
                'short_label' => 'Kitir Nikah',
                'icon' => 'favorite',
                'category' => 'Administrasi Perkawinan',
                'description' => 'Layanan pengantar administrasi pernikahan bagi warga Desa Kopandakan I.',
                'documents' => ['Scan KTP Pemohon', 'Scan Kartu Keluarga', 'Surat Pengantar RT RW', 'Pas Foto 3x4'],
            ],
            'waris' => [
                'label' => 'Keterangan Waris',
                'short_label' => 'Waris',
                'icon' => 'family_restroom',
                'category' => 'Administrasi Keluarga',
                'description' => 'Layanan untuk menerangkan ahli waris sebagai pendukung pengurusan hak dan administrasi keluarga.',
                'documents' => ['Scan KTP Ahli Waris', 'Scan Kartu Keluarga', 'Akta Kematian Pewaris', 'Surat Pernyataan Ahli Waris'],
            ],
            'pindah_penduduk' => [
                'label' => 'Keterangan Pindah Penduduk',
                'short_label' => 'Pindah Penduduk',
                'icon' => 'move_location',
                'category' => 'Administrasi Kependudukan',
                'description' => 'Layanan untuk warga yang membutuhkan keterangan pindah domisili atau perpindahan penduduk.',
                'documents' => ['Scan KTP Pemohon', 'Scan Kartu Keluarga', 'Surat Pengantar RT RW'],
            ],
            'domisili' => [
                'label' => 'Keterangan Domisili',
                'short_label' => 'Domisili',
                'icon' => 'home_pin',
                'category' => 'Administrasi Kependudukan',
                'description' => 'Layanan untuk menerangkan alamat domisili warga di wilayah Desa Kopandakan I.',
                'documents' => ['Scan KTP Pemohon', 'Scan Kartu Keluarga', 'Surat Pengantar RT RW'],
            ],
            'beda_nama' => [
                'label' => 'Keterangan Beda Nama',
                'short_label' => 'Beda Nama',
                'icon' => 'badge',
                'category' => 'Administrasi Kependudukan',
                'description' => 'Layanan untuk menerangkan perbedaan penulisan nama pada dokumen administrasi warga.',
                'documents' => ['Scan KTP Pemohon', 'Scan Kartu Keluarga', 'Akta Kelahiran atau Dokumen Pembanding', 'Surat Pengantar RT RW'],
            ],
            'kurang_mampu' => [
                'label' => 'Keterangan Kurang Mampu',
                'short_label' => 'Kurang Mampu',
                'icon' => 'volunteer_activism',
                'category' => 'Administrasi Sosial',
                'description' => 'Layanan untuk warga yang memerlukan keterangan kondisi ekonomi sebagai persyaratan bantuan, pendidikan, atau kesehatan.',
                'documents' => ['Scan KTP Pemohon', 'Scan Kartu Keluarga', 'Surat Pengantar RT RW', 'Foto Rumah Tampak Depan', 'Slip Gaji atau Surat Pernyataan Penghasilan'],
            ],
            'penghasilan' => [
                'label' => 'Keterangan Penghasilan',
                'short_label' => 'Penghasilan',
                'icon' => 'payments',
                'category' => 'Administrasi Sosial',
                'description' => 'Layanan untuk menerangkan penghasilan pemohon sesuai kebutuhan administrasi.',
                'documents' => ['Scan KTP Pemohon', 'Scan Kartu Keluarga', 'Surat Pengantar RT RW', 'Surat Pernyataan Penghasilan'],
            ],
            'usaha' => [
                'label' => 'Keterangan Usaha',
                'short_label' => 'Usaha',
                'icon' => 'storefront',
                'category' => 'Legalitas Usaha',
                'description' => 'Layanan untuk warga yang memiliki usaha dan membutuhkan keterangan usaha untuk legalitas, bantuan UMKM, atau keperluan lain.',
                'documents' => ['Scan KTP Pemohon', 'Scan Kartu Keluarga', 'Surat Pengantar RT RW', 'Foto Tempat Usaha', 'Surat Pernyataan Kepemilikan Usaha'],
            ],
            'puspaga' => [
                'label' => 'Surat Pengantar Puspaga',
                'short_label' => 'Puspaga',
                'icon' => 'support_agent',
                'category' => 'Layanan Keluarga',
                'description' => 'Layanan pengantar untuk kebutuhan Puspaga sesuai keperluan warga.',
                'documents' => ['Scan KTP Pemohon', 'Scan Kartu Keluarga', 'Surat Pengantar RT RW', 'Dokumen Pendukung Puspaga'],
            ],
            'lain_lain' => [
                'label' => 'Keterangan Lain-lain',
                'short_label' => 'Lain-lain',
                'icon' => 'description',
                'category' => 'Administrasi Umum',
                'description' => 'Layanan keterangan umum untuk kebutuhan administrasi yang belum masuk kategori layanan lainnya.',
                'documents' => ['Scan KTP Pemohon', 'Scan Kartu Keluarga', 'Surat Pengantar RT RW', 'Dokumen Pendukung'],
            ],
            'kepemilikan' => [
                'label' => 'Keterangan Kepemilikan',
                'short_label' => 'Kepemilikan',
                'icon' => 'real_estate_agent',
                'category' => 'Administrasi Aset',
                'description' => 'Layanan untuk menerangkan kepemilikan aset atau barang sesuai dokumen pendukung yang dimiliki warga.',
                'documents' => ['Scan KTP Pemohon', 'Scan Kartu Keluarga', 'Bukti Kepemilikan', 'Surat Pengantar RT RW'],
            ],
            'lunas_pbb' => [
                'label' => 'Keterangan Lunas PBB',
                'short_label' => 'Lunas PBB',
                'icon' => 'receipt_long',
                'category' => 'Pajak dan Pertanahan',
                'description' => 'Layanan untuk menerangkan status pelunasan Pajak Bumi dan Bangunan warga.',
                'documents' => ['Scan KTP Pemohon', 'Scan Kartu Keluarga', 'Bukti Bayar PBB Tahun Berjalan', 'Scan SPPT PBB Terakhir'],
            ],
        ];
    }

    public static function find(string $slug): ?array
    {
        $layanan = self::all()[$slug] ?? null;

        return $layanan ? ['slug' => $slug, ...$layanan] : null;
    }

    public static function labels(): array
    {
        return collect(self::all())->map(fn(array $layanan) => $layanan['label'])->all();
    }

    public static function documents(): array
    {
        return collect(self::all())->map(fn(array $layanan) => $layanan['documents'])->all();
    }
}
