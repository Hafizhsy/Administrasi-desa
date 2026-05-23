<!DOCTYPE html>

<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Layanan Surat Digital - Kopandakan I</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700;800;900&amp;family=Work+Sans:wght@400;500;600&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "primary-fixed-dim": "#a3d0be",
                        "on-primary-container": "#79a694",
                        "error-container": "#ffdad6",
                        "primary": "#00241a",
                        "secondary-container": "#e0e3e5",
                        "inverse-on-surface": "#eaf1ff",
                        "on-error-container": "#93000a",
                        "tertiary-fixed-dim": "#e9c349",
                        "outline-variant": "#c0c8c3",
                        "surface-tint": "#3c6658",
                        "on-background": "#0b1c30",
                        "on-secondary-fixed": "#191c1e",
                        "inverse-surface": "#213145",
                        "on-primary-fixed": "#002117",
                        "inverse-primary": "#a3d0be",
                        "error": "#ba1a1a",
                        "on-tertiary": "#ffffff",
                        "outline": "#717974",
                        "surface-dim": "#cbdbf5",
                        "on-secondary-fixed-variant": "#444749",
                        "secondary-fixed": "#e0e3e5",
                        "surface-container-high": "#dce9ff",
                        "surface-container-low": "#eff4ff",
                        "on-tertiary-fixed-variant": "#574500",
                        "on-surface": "#0b1c30",
                        "on-tertiary-fixed": "#241a00",
                        "surface-variant": "#d3e4fe",
                        "surface-bright": "#f8f9ff",
                        "tertiary-fixed": "#ffe088",
                        "primary-fixed": "#beedd9",
                        "surface": "#f8f9ff",
                        "on-surface-variant": "#414845",
                        "tertiary-container": "#cba72f",
                        "secondary": "#5c5f61",
                        "background": "#f8f9ff",
                        "on-secondary-container": "#626567",
                        "surface-container": "#e5eeff",
                        "on-tertiary-container": "#4e3d00",
                        "on-primary-fixed-variant": "#234e40",
                        "surface-container-highest": "#d3e4fe",
                        "primary-container": "#0d3b2e",
                        "on-primary": "#ffffff",
                        "on-error": "#ffffff",
                        "surface-container-lowest": "#ffffff",
                        "on-secondary": "#ffffff",
                        "tertiary": "#735c00",
                        "secondary-fixed-dim": "#c4c7c9"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.125rem",
                        "lg": "0.25rem",
                        "xl": "0.5rem",
                        "full": "0.75rem"
                    },
                    "spacing": {
                        "stack-lg": "48px",
                        "stack-sm": "12px",
                        "margin-mobile": "16px",
                        "container-max": "1280px",
                        "gutter": "24px",
                        "margin-desktop": "48px",
                        "stack-md": "24px",
                        "base": "8px"
                    },
                    "fontFamily": {
                        "body-md": ["Public Sans"],
                        "button": ["Work Sans"],
                        "body-lg": ["Public Sans"],
                        "h2": ["Public Sans"],
                        "h3": ["Public Sans"],
                        "h1": ["Public Sans"],
                        "label-sm": ["Work Sans"]
                    },
                    "fontSize": {
                        "body-md": ["16px", { "lineHeight": "1.6", "letterSpacing": "0", "fontWeight": "400" }],
                        "button": ["16px", { "lineHeight": "1", "letterSpacing": "0.01em", "fontWeight": "600" }],
                        "body-lg": ["18px", { "lineHeight": "1.6", "letterSpacing": "0", "fontWeight": "400" }],
                        "h2": ["32px", { "lineHeight": "1.3", "letterSpacing": "-0.01em", "fontWeight": "600" }],
                        "h3": ["24px", { "lineHeight": "1.4", "letterSpacing": "0", "fontWeight": "600" }],
                        "h1": ["40px", { "lineHeight": "1.2", "letterSpacing": "-0.02em", "fontWeight": "700" }],
                        "label-sm": ["14px", { "lineHeight": "1", "letterSpacing": "0.02em", "fontWeight": "500" }]
                    }
                },
            },
        }
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        .hide-scrollbar::-webkit-scrollbar {
            display: none;
        }

        .hide-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>
    <style>
        body {
            min-height: max(884px, 100dvh);
        }
    </style>
</head>

<body class="bg-background font-body-md text-on-background min-h-screen">
    <header
        class="fixed top-0 w-full z-50 bg-white border-b border-slate-200 flex justify-between items-center px-4 h-16 w-full">
        <div class="flex items-center gap-3">
            <div
                class="w-10 h-10 rounded-full bg-primary-fixed flex items-center justify-center text-primary-container overflow-hidden">
                <img class="w-full h-full object-cover"
                    data-alt="Official village emblem of Kopandakan I featuring traditional motifs and a shield design in gold and green colors"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuAtw5mkuliLkGyPLjSvXL0YgiV3b71v8Ya-nWfs7V8XZopYLCPhi8j3Sdw0KcLXG3JW8nbRDaUMgzXZvLfUUpnT2PDSqbPyKqG88skFpY_1wbTbprPPkfsAfx8wx55amHnle7OOK2wiVDAyt3ci-R9qbNaSNSaopin8yp1io05v5M3dG8ewBupV2urByUpoI4jHZLBGA1kl6xC3hLSPJAKsJfZc9o3jKBlnIehi2DwW-JBijtBrLUbbful1BG1X6kDShGBaEexAH90" />
            </div>
            <span class="font-public-sans font-bold text-lg text-emerald-900">Kopandakan I</span>
        </div>
        <div class="flex items-center gap-4">
            <button class="p-2 rounded-full hover:bg-slate-100 transition-colors active:scale-95 duration-150">
                <span class="material-symbols-outlined text-slate-600">notifications</span>
            </button>
            <div class="hidden md:flex items-center gap-6 text-sm font-semibold text-slate-600">
                <a class="text-emerald-700 font-bold" href="#">Beranda</a>
                <a class="hover:text-emerald-700" href="#">Layanan</a>
                <a class="hover:text-emerald-700" href="#">Status</a>
            </div>
        </div>
    </header>
    <main class="pt-24 pb-32 px-4 md:px-margin-desktop max-w-container-max mx-auto">
        <div class="mb-stack-lg text-center md:text-left">
            <h1 class="font-h1 text-h1 text-primary mb-2">Permohonan Surat</h1>
            <p class="text-body-lg text-on-surface-variant max-w-2xl">Silakan pilih jenis surat dan lengkapi formulir di
                bawah ini untuk mengajukan permohonan layanan administrasi desa.</p>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter">
            <section class="lg:col-span-12 mb-stack-md">
                <div class="flex items-center gap-2 mb-stack-sm overflow-x-auto hide-scrollbar pb-2">
                    <div
                        class="flex-shrink-0 flex items-center justify-center w-8 h-8 rounded-full bg-tertiary text-white font-bold text-sm">
                        1
                    </div>
                    <h2 class="font-h3 text-h3 text-on-surface whitespace-nowrap">Pilih Jenis Surat</h2>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">

                    <div class="surat-card cursor-pointer group relative bg-white border border-slate-200 p-5 rounded-xl shadow-sm transition-all hover:border-primary-fixed-dim hover:bg-slate-50"
                        data-surat="nikah">
                        <div
                            class="w-12 h-12 bg-primary-fixed/30 rounded-lg flex items-center justify-center mb-4 text-primary">
                            <span class="material-symbols-outlined text-3xl"
                                style="font-variation-settings: 'FILL' 1;">favorite</span>
                        </div>
                        <h3 class="font-bold text-on-surface text-lg leading-tight">Surat Pernyataan Nikah</h3>
                        <div class="check-icon hidden absolute top-4 right-4 text-white">
                            <span class="material-symbols-outlined">check_circle</span>
                        </div>
                    </div>

                    <div class="surat-card cursor-pointer group relative bg-white border border-slate-200 p-5 rounded-xl shadow-sm transition-all hover:border-primary-fixed-dim hover:bg-slate-50"
                        data-surat="usaha">
                        <div
                            class="w-12 h-12 bg-primary-fixed/30 rounded-lg flex items-center justify-center mb-4 text-primary">
                            <span class="material-symbols-outlined text-3xl">storefront</span>
                        </div>
                        <h3 class="font-bold text-on-surface text-lg leading-tight">Surat Keterangan Usaha</h3>
                        <div class="check-icon hidden absolute top-4 right-4 text-white">
                            <span class="material-symbols-outlined">check_circle</span>
                        </div>
                    </div>

                    <div class="surat-card cursor-pointer group relative bg-white border border-slate-200 p-5 rounded-xl shadow-sm transition-all hover:border-primary-fixed-dim hover:bg-slate-50"
                        data-surat="sktm">
                        <div
                            class="w-12 h-12 bg-primary-fixed/30 rounded-lg flex items-center justify-center mb-4 text-primary">
                            <span class="material-symbols-outlined text-3xl">volunteer_activism</span>
                        </div>
                        <h3 class="font-bold text-on-surface text-lg leading-tight">Surat Keterangan Tidak Mampu</h3>
                        <div class="check-icon hidden absolute top-4 right-4 text-white">
                            <span class="material-symbols-outlined">check_circle</span>
                        </div>
                    </div>

                    <div class="surat-card cursor-pointer group relative bg-white border border-slate-200 p-5 rounded-xl shadow-sm transition-all hover:border-primary-fixed-dim hover:bg-slate-50"
                        data-surat="pbb">
                        <div
                            class="w-12 h-12 bg-primary-fixed/30 rounded-lg flex items-center justify-center mb-4 text-primary">
                            <span class="material-symbols-outlined text-3xl">receipt_long</span>
                        </div>
                        <h3 class="font-bold text-on-surface text-lg leading-tight">Surat Keterangan Lunas PBB</h3>
                        <div class="check-icon hidden absolute top-4 right-4 text-white">
                            <span class="material-symbols-outlined">check_circle</span>
                        </div>
                    </div>

                </div>
            </section>
            <div id="form-area" class="hidden lg:col-span-12 grid grid-cols-1 lg:grid-cols-12 gap-gutter">
            <section class="lg:col-span-8 bg-white border border-slate-200 rounded-xl p-6 md:p-8 shadow-sm">
                <div class="flex items-center gap-2 mb-stack-md">
                    <div
                        class="flex-shrink-0 flex items-center justify-center w-8 h-8 rounded-full bg-tertiary text-white font-bold text-sm">
                        2</div>
                    <h2 class="font-h3 text-h3 text-on-surface">Detail Data Diri</h2>
                </div>
                <form action="{{ route('user.pengajuan.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="jenis_surat" id="jenis_surat" value="" />

                    <!-- <div class="space-y-2 mb-6">
                        <label class="font-label-sm text-on-surface-variant block">Jenis Surat</label>
                        <select name="jenis_surat" required
                            class="w-full h-12 px-4 rounded-xl border border-slate-300 focus:ring-2 focus:ring-sky-200 focus:border-sky-500 outline-none transition-all">
                            <option value="">Pilih jenis surat</option>
                            <option value="Surat Pernyataan Nikah">Surat Pernyataan Nikah</option>
                            <option value="Surat Keterangan Usaha">Surat Keterangan Usaha</option>
                            <option value="Surat Keterangan Tidak Mampu">Surat Keterangan Tidak Mampu</option>
                            <option value="Surat Keterangan Lunas PBB">Surat Keterangan Lunas PBB</option>
                        </select>
                    </div> -->

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="space-y-2">
                            <label class="font-label-sm text-on-surface-variant block">Nama Lengkap Sesuai KTP</label>
                            <input name="nama_pemohon" required
                                class="w-full h-12 px-4 rounded-xl border border-slate-300 focus:ring-2 focus:ring-sky-200 focus:border-sky-500 outline-none transition-all"
                                placeholder="Masukkan nama lengkap" type="text" />
                        </div>

                        <div class="space-y-2">
                            <label class="font-label-sm text-on-surface-variant block">NIK</label>
                            <input name="nik" required
                                class="w-full h-12 px-4 rounded-xl border border-slate-300 focus:ring-2 focus:ring-sky-200 focus:border-sky-500 outline-none transition-all"
                                placeholder="16 digit nomor NIK" type="text" />
                        </div>
                    </div>

                    <div class="space-y-2 mt-6">
                        <label class="font-label-sm text-on-surface-variant block">Alamat Lengkap</label>
                        <textarea name="alamat" required
                            class="w-full p-4 rounded-xl border border-slate-300 focus:ring-2 focus:ring-sky-200 focus:border-sky-500 outline-none transition-all resize-none"
                            placeholder="Jl. Raya Kopandakan I, No..." rows="3"></textarea>
                    </div>

                    <div class="border-t border-slate-100 pt-6 mt-6">
                        <h3 class="font-bold text-on-surface mb-4">Informasi Khusus Surat</h3>
                        <div class="space-y-2">
                            <label class="font-label-sm text-on-surface-variant block">Tujuan Pengajuan Surat</label>
                            <input name="keperluan"
                                class="w-full h-12 px-4 rounded-xl border border-slate-300 focus:ring-2 focus:ring-sky-200 focus:border-sky-500 outline-none transition-all"
                                placeholder="Contoh: Persyaratan pendaftaran pernikahan" type="text" />
                        </div>
                    </div>

                    <div class="border-t border-slate-100 pt-6 mt-6">
                        <h2 class="font-h3 text-h3 text-on-surface mb-4">Lampiran Dokumen</h2>

                        <div id="dokumen-nikah" class="dokumen-group hidden space-y-4">
                            <h3 class="font-bold text-lg text-emerald-900">Upload Persyaratan Surat Nikah</h3>

                            <div>
                                <label class="block font-semibold mb-2">Fotokopi KTP Pemohon Suami dan Istri</label>
                                <input type="file" name="dokumen[Fotokopi KTP Pemohon Suami dan Istri]"
                                    class="w-full border rounded-lg p-3">
                            </div>

                            <div>
                                <label class="block font-semibold mb-2">Fotokopi Kartu Keluarga</label>
                                <input type="file" name="dokumen[Fotokopi Kartu Keluarga]"
                                    class="w-full border rounded-lg p-3">
                            </div>

                            <div>
                                <label class="block font-semibold mb-2">Surat Pengantar RT/RW</label>
                                <input type="file" name="dokumen[Surat Pengantar RT RW]"
                                    class="w-full border rounded-lg p-3">
                            </div>

                            <div>
                                <label class="block font-semibold mb-2">Fotokopi Akta Nikah / Buku Nikah</label>
                                <input type="file" name="dokumen[Fotokopi Akta Nikah atau Buku Nikah]"
                                    class="w-full border rounded-lg p-3">
                            </div>

                            <div>
                                <label class="block font-semibold mb-2">Pas Foto 3x4 Background Biru</label>
                                <input type="file" name="dokumen[Pas Foto 3x4 Background Biru]"
                                    class="w-full border rounded-lg p-3">
                            </div>
                        </div>

                    </div>

                    <div class="pt-6">
                        <button
                            class="w-full md:w-auto px-10 h-14 bg-primary text-white font-button rounded-xl hover:bg-primary-container transition-all flex items-center justify-center gap-2 shadow-lg active:scale-95"
                            type="submit">
                            <span>Kirim Permohonan</span>
                            <span class="material-symbols-outlined">send</span>
                        </button>
                    </div>
                </form>
            </section>
            <aside class="lg:col-span-4 space-y-gutter">
                <div class="bg-primary-container text-white rounded-xl p-6 shadow-sm">
                    <h3 class="font-h3 text-lg mb-4 flex items-center gap-2">
                        <span class="material-symbols-outlined">info</span>
                        Informasi Penting
                    </h3>
                    <ul class="space-y-4 text-sm opacity-90">
                        <li class="flex gap-3">
                            <span class="material-symbols-outlined text-tertiary-fixed text-lg">history</span>
                            <span>Proses verifikasi dokumen memerlukan waktu 1-2 hari kerja.</span>
                        </li>
                        <li class="flex gap-3">
                            <span class="material-symbols-outlined text-tertiary-fixed text-lg">check_circle</span>
                            <span>Pastikan file scan terlihat jelas dan tidak terpotong.</span>
                        </li>
                        <li class="flex gap-3">
                            <span class="material-symbols-outlined text-tertiary-fixed text-lg">notifications_active</span>
                            <span>Notifikasi status akan dikirimkan melalui dashboard atau WhatsApp terdaftar.</span>
                        </li>
                    </ul>
                </div>
                <div class="bg-white border border-slate-200 rounded-xl p-6 shadow-sm">
                    <h3 class="font-bold text-on-surface mb-4">Statistik Layanan</h3>
                    <div class="space-y-4">
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-on-surface-variant">Hari Ini</span>
                            <span class="font-bold text-primary">12 Permohonan</span>
                        </div>
                        <div class="w-full bg-slate-100 h-2 rounded-full overflow-hidden">
                            <div class="bg-primary h-full w-[65%]"></div>
                        </div>
                        <p class="text-xs text-on-surface-variant italic">Kapasitas harian kantor desa Kopandakan I saat
                            ini beroperasi normal.</p>
                    </div>
                </div>
                <div class="relative rounded-xl overflow-hidden aspect-video group">
                    <img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                        data-alt="Modern government office interior with clean wooden desks, minimalist shelving, and soft natural lighting creating a professional atmosphere"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuCwWntktMU2IsWGjUSdM1-zqcBP7WF39dhGq1E--jIYDwBU3Qt6aI3eEgarr1YttJkIedtbjtoQOEqv4Z1xNA9CFwA-gDbG5BloiO0LijLae14cSqP9IAw9kBnJ6rqzdivcumnkwDJjCzzavhyf7zDsLR73Dzy2g5aRPqQrNrYoSPQaJSRqYLVGTyQoO8k-kNT-SK7bFGU4xtzJGM-3kWFya_HnFxO9ydyG7Kd7lkTp8iqiffNqfc7-ym4LfxcIcPv4mCYzuvb7OTw" />
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-primary/80 to-transparent flex flex-col justify-end p-4">
                        <p class="text-white font-bold">Butuh bantuan?</p>
                        <p class="text-white/80 text-xs">Hubungi operator desa via WhatsApp</p>
                    </div>
                </div>
            </aside>
            </div>
        </div>
    </main>
    <footer class="w-full bg-slate-50 py-8 border-t border-slate-200">
        <div
            class="w-full flex flex-col md:flex-row justify-between items-center px-8 gap-4 max-w-container-max mx-auto">
            <div class="text-center md:text-left">
                <span class="font-bold text-slate-900 block mb-1">Pemerintah Desa Kopandakan 1</span>
                <p class="font-public-sans text-xs text-slate-500">© 2024 Pemerintah Desa Kopandakan 1. Hak Cipta
                    Dilindungi.</p>
            </div>
            <div class="flex gap-6">
                <a class="font-public-sans text-xs text-slate-500 hover:text-emerald-700" href="#">Kontak</a>
                <a class="font-public-sans text-xs text-slate-500 hover:text-emerald-700" href="#">Peta Desa</a>
                <a class="font-public-sans text-xs text-slate-500 hover:text-emerald-700" href="#">Kebijakan Privasi</a>
            </div>
        </div>
    </footer>
    <nav
        class="md:hidden fixed bottom-0 left-0 w-full bg-white border-t border-slate-200 shadow-lg z-50 flex justify-around items-center px-2 pb-safe py-2">
        <a class="flex flex-col items-center justify-center text-slate-500 px-4 py-1.5 hover:bg-slate-50" href="#">
            <span class="material-symbols-outlined">home</span>
            <span class="font-public-sans text-[11px] font-semibold">Beranda</span>
        </a>
        <a class="flex flex-col items-center justify-center bg-emerald-50 text-emerald-900 rounded-xl px-4 py-1.5"
            href="#">
            <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">description</span>
            <span class="font-public-sans text-[11px] font-semibold">Layanan</span>
        </a>
        <a class="flex flex-col items-center justify-center text-slate-500 px-4 py-1.5 hover:bg-slate-50" href="#">
            <span class="material-symbols-outlined">account_circle</span>
            <span class="font-public-sans text-[11px] font-semibold">Status</span>
        </a>
    </nav>
    <script>
        const cards = document.querySelectorAll('.surat-card');
        const jenisSuratInput = document.getElementById('jenis_surat');
        const dokumenGroups = document.querySelectorAll('.dokumen-group');
        const formArea = document.getElementById('form-area');

        cards.forEach(card => {
            card.addEventListener('click', function () {
                if (formArea) {
                    formArea.classList.remove('hidden');
                }

                cards.forEach(c => {
                    c.classList.remove(
                        'bg-primary-container',
                        'border-2',
                        'border-primary',
                        'hover:shadow-md',
                        'ring-2',
                        'ring-primary',
                        'ring-offset-2'
                    );

                    c.classList.add(
                        'bg-white',
                        'border',
                        'border-slate-200',
                        'hover:border-primary-fixed-dim',
                        'hover:bg-slate-50'
                    );

                    const title = c.querySelector('h3');
                    const iconBox = c.querySelector('div');
                    const icon = c.querySelector('.check-icon');

                    if (title) {
                        title.classList.remove('text-white');
                        title.classList.add('text-on-surface');
                    }

                    if (iconBox) {
                        iconBox.classList.remove('bg-white/10', 'text-white');
                        iconBox.classList.add('bg-primary-fixed/30', 'text-primary');
                    }

                    if (icon) {
                        icon.classList.add('hidden');
                    }
                });

                this.classList.remove(
                    'bg-white',
                    'border',
                    'border-slate-200',
                    'hover:border-primary-fixed-dim',
                    'hover:bg-slate-50'
                );
                this.classList.add(
                    'bg-primary-container',
                    'border-2',
                    'border-primary',
                    'hover:shadow-md',
                    'ring-2',
                    'ring-primary',
                    'ring-offset-2'
                );

                const title = this.querySelector('h3');
                const iconBox = this.querySelector('div');
                const icon = this.querySelector('.check-icon');

                if (title) {
                    title.classList.remove('text-on-surface');
                    title.classList.add('text-white');
                }

                if (iconBox) {
                    iconBox.classList.remove('bg-primary-fixed/30', 'text-primary');
                    iconBox.classList.add('bg-white/10', 'text-white');
                }

                if (icon) {
                    icon.classList.remove('hidden');
                }

                const jenis = this.dataset.surat;
                jenisSuratInput.value = jenis;

                dokumenGroups.forEach(group => {
                    group.classList.add('hidden');
                });

                const activeGroup = document.getElementById('dokumen-' + jenis);

                if (activeGroup) {
                    activeGroup.classList.remove('hidden');
                }
            });
        });
    </script>
</body>

</html>
