<!DOCTYPE html>

<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Civic Horizon - Detail Layanan</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@400;500;600;700&amp;family=Work+Sans:wght@400;500;600&amp;display=swap"
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
                        "primary-container": "#0d3b2e",
                        "secondary-container": "#e0e3e5",
                        "tertiary": "#735c00",
                        "tertiary-fixed-dim": "#e9c349",
                        "tertiary-fixed": "#ffe088",
                        "secondary-fixed": "#e0e3e5",
                        "surface-dim": "#cbdbf5",
                        "primary": "#00241a",
                        "inverse-on-surface": "#eaf1ff",
                        "tertiary-container": "#cba72f",
                        "on-tertiary-fixed": "#241a00",
                        "on-surface-variant": "#414845",
                        "on-error-container": "#93000a",
                        "on-background": "#0b1c30",
                        "surface-container": "#e5eeff",
                        "secondary-fixed-dim": "#c4c7c9",
                        "on-primary-fixed-variant": "#234e40",
                        "on-error": "#ffffff",
                        "surface-container-low": "#eff4ff",
                        "inverse-surface": "#213145",
                        "primary-fixed": "#beedd9",
                        "error-container": "#ffdad6",
                        "on-secondary-fixed": "#191c1e",
                        "on-secondary": "#ffffff",
                        "on-primary": "#ffffff",
                        "inverse-primary": "#a3d0be",
                        "outline-variant": "#c0c8c3",
                        "on-primary-fixed": "#002117",
                        "on-primary-container": "#79a694",
                        "outline": "#717974",
                        "primary-fixed-dim": "#a3d0be",
                        "surface-container-highest": "#d3e4fe",
                        "surface-container-high": "#dce9ff",
                        "surface-bright": "#f8f9ff",
                        "secondary": "#5c5f61",
                        "surface-container-lowest": "#ffffff",
                        "surface-tint": "#3c6658",
                        "on-tertiary-fixed-variant": "#574500",
                        "on-secondary-fixed-variant": "#444749",
                        "surface-variant": "#d3e4fe",
                        "background": "#f8f9ff",
                        "on-surface": "#0b1c30",
                        "surface": "#f8f9ff",
                        "on-tertiary-container": "#4e3d00",
                        "on-tertiary": "#ffffff",
                        "on-secondary-container": "#626567",
                        "error": "#ba1a1a"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.125rem",
                        "lg": "0.25rem",
                        "xl": "0.5rem",
                        "full": "0.75rem"
                    },
                    "spacing": {
                        "stack-lg": "48px",
                        "stack-md": "24px",
                        "gutter": "24px",
                        "margin-mobile": "16px",
                        "margin-desktop": "48px",
                        "container-max": "1280px",
                        "base": "8px",
                        "stack-sm": "12px"
                    },
                    "fontFamily": {
                        "h2": ["Public Sans"],
                        "h1": ["Public Sans"],
                        "body-md": ["Public Sans"],
                        "body-lg": ["Public Sans"],
                        "label-sm": ["Work Sans"],
                        "button": ["Work Sans"],
                        "h3": ["Public Sans"]
                    },
                    "fontSize": {
                        "h2": ["32px", { "lineHeight": "1.3", "letterSpacing": "-0.01em", "fontWeight": "600" }],
                        "h1": ["40px", { "lineHeight": "1.2", "letterSpacing": "-0.02em", "fontWeight": "700" }],
                        "body-md": ["16px", { "lineHeight": "1.6", "letterSpacing": "0", "fontWeight": "400" }],
                        "body-lg": ["18px", { "lineHeight": "1.6", "letterSpacing": "0", "fontWeight": "400" }],
                        "label-sm": ["14px", { "lineHeight": "1", "letterSpacing": "0.02em", "fontWeight": "500" }],
                        "button": ["16px", { "lineHeight": "1", "letterSpacing": "0.01em", "fontWeight": "600" }],
                        "h3": ["24px", { "lineHeight": "1.4", "letterSpacing": "0", "fontWeight": "600" }]
                    }
                },
            },
        }
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            display: inline-block;
            line-height: 1;
        }

        .step-line::after {
            content: '';
            position: absolute;
            left: 20px;
            top: 40px;
            bottom: -20px;
            width: 2px;
            background-color: #e0e3e5;
        }

        .step-line:last-child::after {
            display: none;
        }

        body {
            background-color: #f8f9ff;
        }
    </style>
    <style>
        body {
            min-height: max(884px, 100dvh);
        }
    </style>
</head>

<body class="font-body-md text-on-surface">
    <!-- TopAppBar -->
    <header class="fixed top-0 left-0 w-full z-50 flex items-center px-4 h-16 bg-white border-b border-slate-200">
        <button class="mr-4 p-2 hover:bg-slate-50 transition-colors duration-200 rounded-full" onclick="history.back()">
            <span class="material-symbols-outlined text-[#0D3B2E]">arrow_back</span>
        </button>
        <h1 class="font-['Public_Sans'] font-semibold tracking-tight text-[#0D3B2E] text-lg">Surat Keterangan Lunas PBB
        </h1>
    </header>
    <main class="pt-16 pb-32">
        <!-- Hero Section -->
        <section class="relative w-full h-[300px] overflow-hidden">
            <img class="w-full h-full object-cover"
                data-alt="A professional architectural photograph of a modern government administrative building exterior under bright morning sunlight. The scene features clean lines, large glass windows reflecting a clear blue sky, and a sense of institutional stability. The color palette is dominated by soft whites and professional teals, creating a trustworthy and accessible atmosphere for public service."
                src="https://lh3.googleusercontent.com/aida-public/AB6AXuD2NG3qkX2AuTLlCXAGr9Sn1R__j80y3nj0cAvF7TkJowlMSywBukv3e2KE7oKD8Hbh1alkLynyQqxR32F0azXvgDWXpbVPhAzevOFMV0VrVht952ExjnBm2x9YIGqKPa5S5pGLA6V6musuITiKm0jt39IzKFG5ZV2FTlVD7Q2_34j9rWZCyoKhjD2g-ApLPNK04I7Xs46yQ3V9EGxRwJ4A6KB_VYKFeZ3pT_lH8F5AMKNXLlWx_kSDNCF0QbwjX7Xwqq243KXmgO8" />
            <div
                class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent flex items-end p-margin-mobile md:p-margin-desktop">
                <div class="max-w-container-max mx-auto w-full">
                    <span
                        class="bg-tertiary text-white text-label-sm font-label-sm px-3 py-1 rounded-full mb-2 inline-block">Layanan
                        Pertanahan</span>
                    <h2 class="font-h1 text-h1 text-white mb-2 text-shadow-sm">Detail Layanan Pajak</h2>
                </div>
            </div>
        </section>
        <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop mt-stack-md">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-gutter">
                <!-- Main Content Column -->
                <div class="lg:col-span-2 space-y-stack-md">
                    <!-- Description -->
                    <div class="bg-surface-container-lowest p-stack-md border border-outline-variant rounded-xl">
                        <h3 class="font-h3 text-h3 text-primary-container mb-stack-sm">Deskripsi Layanan</h3>
                        <p class="font-body-lg text-body-lg text-on-surface-variant">
                            Layanan ini membantu warga dalam memperoleh surat keterangan bukti pelunasan Pajak Bumi dan
                            Bangunan (PBB) untuk keperluan administrasi pertanahan atau transaksi properti.
                        </p>
                    </div>
                    <!-- Requirements Checklist -->
                    <div class="bg-surface-container-lowest p-stack-md border border-outline-variant rounded-xl">
                        <h3 class="font-h3 text-h3 text-primary-container mb-stack-sm">Persyaratan Berkas</h3>
                        <div class="space-y-4">
                            <div
                                class="flex items-start gap-3 p-3 bg-surface-bright border border-outline-variant rounded-lg">
                                <span class="material-symbols-outlined text-primary-container"
                                    style="font-variation-settings: 'FILL' 1;">check_circle</span>
                                <p class="font-body-md text-body-md">Fotokopi KTP Pemohon</p>
                            </div>
                            <div
                                class="flex items-start gap-3 p-3 bg-surface-bright border border-outline-variant rounded-lg">
                                <span class="material-symbols-outlined text-primary-container"
                                    style="font-variation-settings: 'FILL' 1;">check_circle</span>
                                <p class="font-body-md text-body-md">Fotokopi Kartu Keluarga</p>
                            </div>
                            <div
                                class="flex items-start gap-3 p-3 bg-surface-bright border border-outline-variant rounded-lg">
                                <span class="material-symbols-outlined text-primary-container"
                                    style="font-variation-settings: 'FILL' 1;">check_circle</span>
                                <p class="font-body-md text-body-md">Bukti Bayar PBB Tahun Berjalan</p>
                            </div>
                            <div
                                class="flex items-start gap-3 p-3 bg-surface-bright border border-outline-variant rounded-lg">
                                <span class="material-symbols-outlined text-primary-container"
                                    style="font-variation-settings: 'FILL' 1;">check_circle</span>
                                <p class="font-body-md text-body-md">Fotokopi SPPT PBB Terakhir</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Sidebar Content Column -->
                <div class="space-y-stack-md">
                    <!-- Process Flow Card -->
                    <div class="bg-surface-container-low p-stack-md border border-outline-variant rounded-xl">
                        <h3 class="font-h3 text-h3 text-primary-container mb-stack-sm">Alur Pengajuan</h3>
                        <div class="relative space-y-8">
                            <div class="flex gap-4 items-start relative step-line">
                                <div
                                    class="w-10 h-10 rounded-full bg-primary-container flex items-center justify-center text-white z-10 shrink-0">
                                    <span class="font-bold">1</span>
                                </div>
                                <div>
                                    <h4 class="font-h3 text-body-lg font-bold">Lengkapi berkas</h4>
                                    <p class="text-on-surface-variant text-label-sm">Pastikan semua dokumen dalam format
                                        PDF atau JPG yang jelas.</p>
                                </div>
                            </div>
                            <div class="flex gap-4 items-start relative step-line">
                                <div
                                    class="w-10 h-10 rounded-full bg-primary-container flex items-center justify-center text-white z-10 shrink-0">
                                    <span class="font-bold">2</span>
                                </div>
                                <div>
                                    <h4 class="font-h3 text-body-lg font-bold">Ajukan permohonan</h4>
                                    <p class="text-on-surface-variant text-label-sm">Unggah berkas melalui portal Civic
                                        Horizon atau tombol di bawah.</p>
                                </div>
                            </div>
                            <div class="flex gap-4 items-start relative step-line">
                                <div
                                    class="w-10 h-10 rounded-full bg-tertiary-container flex items-center justify-center text-on-tertiary-container z-10 shrink-0">
                                    <span class="material-symbols-outlined text-sm">schedule</span>
                                </div>
                                <div>
                                    <h4 class="font-h3 text-body-lg font-bold">Verifikasi data pajak</h4>
                                    <p class="text-on-surface-variant text-label-sm">Estimasi penyelesaian 1-2 hari
                                        kerja oleh petugas administrasi.</p>
                                </div>
                            </div>
                            <div class="flex gap-4 items-start">
                                <div
                                    class="w-10 h-10 rounded-full bg-secondary-container flex items-center justify-center text-secondary z-10 shrink-0">
                                    <span class="material-symbols-outlined">flag</span>
                                </div>
                                <div>
                                    <h4 class="font-h3 text-body-lg font-bold">Ambil surat</h4>
                                    <p class="text-on-surface-variant text-label-sm">Ambil fisik surat di balai desa
                                        setelah mendapat notifikasi selesai.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Information Card -->
                    <div class="bg-primary-fixed p-stack-md rounded-xl border border-primary-fixed-dim">
                        <div class="flex items-center gap-2 mb-2">
                            <span class="material-symbols-outlined text-on-primary-fixed">info</span>
                            <span class="font-button text-on-primary-fixed">Informasi Penting</span>
                        </div>
                        <p class="text-on-primary-fixed-variant text-label-sm">
                            Layanan ini bebas biaya (Gratis). Pastikan Anda tidak memiliki tunggakan PBB tahun-tahun
                            sebelumnya untuk mempercepat proses verifikasi.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- Fixed Bottom CTA -->
    <div
        class="fixed bottom-0 left-0 w-full bg-white border-t border-slate-200 p-4 z-50 shadow-[0_-4px_20px_-5px_rgba(0,0,0,0.1)]">
        <div class="max-w-container-max mx-auto flex gap-4">
            <a href="{{ route('login') }}"
                class="w-full md:w-auto px-12 py-4 bg-primary-container text-white font-button rounded-lg hover:brightness-110 transition-all duration-200 flex items-center justify-center gap-2 shadow-lg">
                Ajukan Permohonan
                <span class="material-symbols-outlined">arrow_forward</span>
            </a>
            <button class="p-4 border border-outline text-on-surface rounded-xl hover:bg-slate-50 transition-colors">
                <span class="material-symbols-outlined">share</span>
            </button>
        </div>
    </div>
    <!-- Bottom Nav (Hidden on focus screens as per mandate, but included for structure if needed) -->
    <!-- Suppressed for transactional focus -->
    <script>
        // Simple interaction for the button
        const mainBtn = document.querySelector('button.bg-primary-container');
        mainBtn.addEventListener('click', () => {
            mainBtn.innerHTML = '<span class="material-symbols-outlined animate-spin">sync</span> Memproses...';
            setTimeout(() => {
                alert('Sistem akan mengarahkan Anda ke formulir pengajuan digital.');
                mainBtn.innerHTML = 'Ajukan Permohonan <span class="material-symbols-outlined">arrow_forward</span>';
            }, 1000);
        });
    </script>
</body>

</html>