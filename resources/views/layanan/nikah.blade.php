<!DOCTYPE html>

<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@400;500;600;700&amp;family=Work+Sans:wght@500;600&amp;display=swap"
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
                        "surface-container-highest": "#d3e4fe",
                        "outline": "#717974",
                        "on-secondary": "#ffffff",
                        "tertiary-fixed-dim": "#e9c349",
                        "on-tertiary-fixed-variant": "#574500",
                        "secondary": "#5c5f61",
                        "tertiary-container": "#cba72f",
                        "on-error-container": "#93000a",
                        "on-secondary-fixed-variant": "#444749",
                        "secondary-fixed": "#e0e3e5",
                        "tertiary-fixed": "#ffe088",
                        "on-tertiary-fixed": "#241a00",
                        "on-tertiary": "#ffffff",
                        "surface": "#f8f9ff",
                        "on-secondary-fixed": "#191c1e",
                        "surface-bright": "#f8f9ff",
                        "surface-variant": "#d3e4fe",
                        "secondary-fixed-dim": "#c4c7c9",
                        "inverse-surface": "#213145",
                        "surface-container-lowest": "#ffffff",
                        "on-tertiary-container": "#4e3d00",
                        "on-secondary-container": "#626567",
                        "on-primary-container": "#79a694",
                        "primary-container": "#0d3b2e",
                        "outline-variant": "#c0c8c3",
                        "on-primary-fixed": "#002117",
                        "secondary-container": "#e0e3e5",
                        "error": "#ba1a1a",
                        "tertiary": "#735c00",
                        "error-container": "#ffdad6",
                        "primary-fixed-dim": "#a3d0be",
                        "on-surface": "#0b1c30",
                        "primary": "#00241a",
                        "on-surface-variant": "#414845",
                        "on-primary-fixed-variant": "#234e40",
                        "surface-container-high": "#dce9ff",
                        "inverse-primary": "#a3d0be",
                        "background": "#f8f9ff",
                        "on-background": "#0b1c30",
                        "surface-container-low": "#eff4ff",
                        "on-primary": "#ffffff",
                        "primary-fixed": "#beedd9",
                        "on-error": "#ffffff",
                        "surface-dim": "#cbdbf5",
                        "surface-container": "#e5eeff",
                        "inverse-on-surface": "#eaf1ff",
                        "surface-tint": "#3c6658"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.125rem",
                        "lg": "0.25rem",
                        "xl": "0.5rem",
                        "full": "0.75rem"
                    },
                    "spacing": {
                        "stack-sm": "12px",
                        "margin-mobile": "16px",
                        "gutter": "24px",
                        "container-max": "1280px",
                        "base": "8px",
                        "stack-md": "24px",
                        "stack-lg": "48px",
                        "margin-desktop": "48px"
                    },
                    "fontFamily": {
                        "button": ["Work Sans"],
                        "body-lg": ["Public Sans"],
                        "h1": ["Public Sans"],
                        "body-md": ["Public Sans"],
                        "label-sm": ["Work Sans"],
                        "h3": ["Public Sans"],
                        "h2": ["Public Sans"]
                    },
                    "fontSize": {
                        "button": ["16px", { "lineHeight": "1", "letterSpacing": "0.01em", "fontWeight": "600" }],
                        "body-lg": ["18px", { "lineHeight": "1.6", "letterSpacing": "0", "fontWeight": "400" }],
                        "h1": ["40px", { "lineHeight": "1.2", "letterSpacing": "-0.02em", "fontWeight": "700" }],
                        "body-md": ["16px", { "lineHeight": "1.6", "letterSpacing": "0", "fontWeight": "400" }],
                        "label-sm": ["14px", { "lineHeight": "1", "letterSpacing": "0.02em", "fontWeight": "500" }],
                        "h3": ["24px", { "lineHeight": "1.4", "letterSpacing": "0", "fontWeight": "600" }],
                        "h2": ["32px", { "lineHeight": "1.3", "letterSpacing": "-0.01em", "fontWeight": "600" }]
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
            text-transform: none;
            letter-spacing: normal;
            word-wrap: normal;
            white-space: nowrap;
            direction: ltr;
        }

        body {
            background-color: #f8f9ff;
            color: #0b1c30;
        }
    </style>
    <style>
        body {
            min-height: max(884px, 100dvh);
        }
    </style>
</head>

<body class="font-body-md text-body-md antialiased">
    <!-- TopAppBar -->
    <header
        class="fixed top-0 left-0 w-full z-50 flex items-center px-4 h-16 bg-white dark:bg-slate-950 border-b border-slate-200 dark:border-slate-800">
        <button class="mr-4 p-2 transition-colors duration-200 hover:bg-slate-50 dark:hover:bg-slate-900 rounded-full">
            <span class="material-symbols-outlined text-[#0D3B2E] dark:text-emerald-400"
                onclick="window.history.back()">arrow_back</span>
        </button>
        <h1 class="font-['Public_Sans'] font-semibold tracking-tight text-lg text-[#0D3B2E] dark:text-emerald-50">Detail
            Layanan</h1>
    </header>
    <main class="mt-16 mb-24 max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop py-stack-lg">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter">
            <!-- Hero Card Section -->
            <div class="lg:col-span-8">
                <div
                    class="bg-surface-container-lowest border border-outline-variant rounded-xl overflow-hidden shadow-none mb-stack-md">
                    <div class="h-48 w-full bg-primary-container relative">
                        <img alt="Wedding Rings" class="w-full h-full object-cover opacity-60"
                            data-alt="Close up of two silver wedding bands resting on a white silk fabric with elegant soft lighting and professional aesthetic"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuAYMYSIIutF9WJzD_4nlDQKOg4B-x09PW9qlTtZVRtWvHEJR209Cf41wx5tsSL0RY4M9_lLp3iItiHHBATC5mp5MslSJmXkhoxPOI05IedMV5-Od2Rf8gXBxcVghGFa5wQIrsFf7mS7ZbqvtF9J3GhDYL_Oi6UO1AS7uA-YXeohG7GDe9TWcenFxqvVco0ZqyqkroTwtOvsfsmGNqQIsmPfvzAX07X-PNDCwRkpkERUdyRxXwxoXJUmLREkf1VmBvyvrmNAbexOccA" />
                        <div
                            class="absolute bottom-0 left-0 p-stack-md w-full bg-gradient-to-t from-primary-container to-transparent">
                            <span
                                class="inline-block px-3 py-1 bg-tertiary-container text-on-tertiary-container font-label-sm text-label-sm rounded-full mb-2">Administrasi
                                Nikah</span>
                            <h2 class="font-h2 text-h2 text-white leading-tight">Surat Pernyataan Nikah</h2>
                        </div>
                    </div>
                    <div class="p-stack-md">
                        <h3 class="font-h3 text-h3 mb-stack-sm text-primary-container">Deskripsi Layanan</h3>
                        <p class="font-body-lg text-body-lg text-on-surface-variant">
                            Layanan ini ditujukan bagi warga Desa Kopandakan I untuk mengurus surat keterangan atau
                            pernyataan terkait status pernikahan untuk berbagai keperluan administratif.
                        </p>
                    </div>
                </div>
                <!-- Persyaratan Section -->
                <div
                    class="bg-surface-container-lowest border border-outline-variant rounded-xl p-stack-md shadow-none mb-stack-md">
                    <div class="flex items-center gap-2 mb-stack-md">
                        <span class="material-symbols-outlined text-primary-container">description</span>
                        <h3 class="font-h3 text-h3">Persyaratan Dokumen</h3>
                    </div>
                    <ul class="space-y-4">
                        <li
                            class="flex items-start gap-3 p-3 rounded-lg border border-transparent hover:border-outline-variant transition-colors">
                            <div class="mt-1">
                                <span class="material-symbols-outlined text-primary-container"
                                    style="font-variation-settings: 'FILL' 1;">check_box</span>
                            </div>
                            <div>
                                <p class="font-body-md text-body-md font-semibold text-on-surface">Fotokopi KTP Pemohon
                                    (Suami &amp; Istri)</p>
                                <p class="text-label-sm font-label-sm text-outline">Pastikan KTP masih berlaku dan
                                    terbaca dengan jelas.</p>
                            </div>
                        </li>
                        <li
                            class="flex items-start gap-3 p-3 rounded-lg border border-transparent hover:border-outline-variant transition-colors">
                            <div class="mt-1">
                                <span class="material-symbols-outlined text-primary-container"
                                    style="font-variation-settings: 'FILL' 1;">check_box</span>
                            </div>
                            <div>
                                <p class="font-body-md text-body-md font-semibold text-on-surface">Fotokopi Kartu
                                    Keluarga (KK)</p>
                                <p class="text-label-sm font-label-sm text-outline">Sertakan KK terbaru yang sudah
                                    terdata di sistem kependudukan.</p>
                            </div>
                        </li>
                        <li
                            class="flex items-start gap-3 p-3 rounded-lg border border-transparent hover:border-outline-variant transition-colors">
                            <div class="mt-1">
                                <span class="material-symbols-outlined text-primary-container"
                                    style="font-variation-settings: 'FILL' 1;">check_box</span>
                            </div>
                            <div>
                                <p class="font-body-md text-body-md font-semibold text-on-surface">Surat Pengantar RT/RW
                                </p>
                                <p class="text-label-sm font-label-sm text-outline">Wajib membawa surat fisik asli saat
                                    pengambilan dokumen.</p>
                            </div>
                        </li>
                        <li
                            class="flex items-start gap-3 p-3 rounded-lg border border-transparent hover:border-outline-variant transition-colors">
                            <div class="mt-1">
                                <span class="material-symbols-outlined text-primary-container"
                                    style="font-variation-settings: 'FILL' 1;">check_box</span>
                            </div>
                            <div>
                                <p class="font-body-md text-body-md font-semibold text-on-surface">Fotokopi Akta Nikah /
                                    Buku Nikah</p>
                                <p class="text-label-sm font-label-sm text-outline">Halaman identitas dan halaman
                                    pengesahan.</p>
                            </div>
                        </li>
                        <li
                            class="flex items-start gap-3 p-3 rounded-lg border border-transparent hover:border-outline-variant transition-colors">
                            <div class="mt-1">
                                <span class="material-symbols-outlined text-primary-container"
                                    style="font-variation-settings: 'FILL' 1;">check_box</span>
                            </div>
                            <div>
                                <p class="font-body-md text-body-md font-semibold text-on-surface">Pas Foto 3x4
                                    (Background Biru)</p>
                                <p class="text-label-sm font-label-sm text-outline">Foto terbaru dengan pakaian rapi dan
                                    formal.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Sidebar / Alur Proses -->
            <div class="lg:col-span-4">
                <div class="sticky top-24 space-y-stack-md">
                    <div
                        class="bg-surface-container-lowest border border-outline-variant rounded-xl p-stack-md shadow-none">
                        <div class="flex items-center gap-2 mb-stack-md">
                            <span class="material-symbols-outlined text-primary-container">account_tree</span>
                            <h3 class="font-h3 text-h3">Alur Proses</h3>
                        </div>
                        <div
                            class="relative space-y-6 before:content-[''] before:absolute before:left-4 before:top-2 before:bottom-2 before:w-[2px] before:bg-outline-variant">
                            <div class="relative pl-10">
                                <div
                                    class="absolute left-0 top-1 w-8 h-8 rounded-full bg-primary-container text-white flex items-center justify-center font-bold z-10">
                                    1</div>
                                <p class="font-body-md text-body-md text-on-surface">Lengkapi berkas persyaratan.</p>
                            </div>
                            <div class="relative pl-10">
                                <div
                                    class="absolute left-0 top-1 w-8 h-8 rounded-full bg-primary-container text-white flex items-center justify-center font-bold z-10">
                                    2</div>
                                <p class="font-body-md text-body-md text-on-surface">Ajukan permohonan melalui sistem
                                    ini.</p>
                            </div>
                            <div class="relative pl-10">
                                <div
                                    class="absolute left-0 top-1 w-8 h-8 rounded-full bg-primary-container text-white flex items-center justify-center font-bold z-10">
                                    3</div>
                                <p class="font-body-md text-body-md text-on-surface">Verifikasi data oleh admin desa
                                    (1-2 hari kerja).</p>
                            </div>
                            <div class="relative pl-10">
                                <div
                                    class="absolute left-0 top-1 w-8 h-8 rounded-full bg-primary-container text-white flex items-center justify-center font-bold z-10">
                                    4</div>
                                <p class="font-body-md text-body-md text-on-surface">Unduh atau ambil surat di balai
                                    desa.</p>
                            </div>
                        </div>
                    </div>
                    <!-- CTA Section for Desktop -->
                    <div class="hidden md:block">
                        <a href="{{ route('login') }}"
                            class="w-full h-14 bg-primary-container text-on-primary font-button text-button rounded-xl flex items-center justify-center gap-2 hover:bg-opacity-90 transition-all">
                            <span class="material-symbols-outlined"
                                style="font-variation-settings: 'FILL' 1;">send</span>
                            Ajukan Permohonan
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- Bottom Action Bar (Mobile Only) -->
    <div class="md:hidden fixed bottom-0 left-0 w-full z-50 bg-white border-t border-slate-200 p-4 pb-safe shadow-lg">
        <button
            class="w-full h-14 bg-primary-container text-on-primary font-button text-button rounded-xl flex items-center justify-center gap-2">
            <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">send</span>
            Ajukan Permohonan
        </button>
    </div>
    <!-- BottomNavBar (Only for top-level destinations, but included as per requirements structure, we hide it here as this is a sub-page/detail-page based on "The Destination Rule") -->
    <!-- Suppression logic applied for detail page focus -->
</body>

</html>