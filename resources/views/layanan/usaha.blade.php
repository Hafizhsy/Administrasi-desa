<!DOCTYPE html>

<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
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
                }
            }
        }
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        body {
            background-color: #f8f9ff;
            color: #0b1c30;
        }

        .bento-grid {
            display: grid;
            grid-template-columns: repeat(12, 1fr);
            gap: 24px;
        }

        .custom-shadow {
            box-shadow: 0 4px 20px -2px rgba(13, 59, 46, 0.08);
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
        <div class="max-w-[1280px] mx-auto w-full flex items-center justify-between">
            <div class="flex items-center gap-4">
                <button class="p-2 hover:bg-slate-50 transition-colors duration-200 rounded-full">
                    <span class="material-symbols-outlined text-[#0D3B2E]" data-icon="arrow_back"
                        onclick="window.history.back()">arrow_back</span>
                </button>
                <h1 class="text-lg font-bold text-[#0D3B2E] font-['Public_Sans'] tracking-tight">Surat Keterangan Usaha
                </h1>
            </div>
            <div class="text-[#0D3B2E] font-semibold text-sm hidden md:block">Civic Horizon</div>
        </div>
    </header>
    <main class="pt-16 pb-32">
        <!-- Hero Section -->
        <section class="relative h-[300px] md:h-[450px] w-full overflow-hidden">
            <img alt="Micro-enterprise business owner" class="w-full h-full object-cover"
                data-alt="A professional and inspiring scene of a modern micro-enterprise owner working in a clean, brightly lit workshop environment. The lighting is soft and natural, emphasizing a productive and optimistic atmosphere. The color palette features deep greens and soft whites, mirroring a corporate yet accessible government service aesthetic. The focus is sharp on the entrepreneur's hands or a detail of their craft, symbolizing reliability and institutional support."
                src="https://lh3.googleusercontent.com/aida-public/AB6AXuAqK0634JJctR7Y7pCSDUL0xbIWncWaH9YC4Ca11p0mxbFwd8f8XejUHhwGqLGraBO236MHW3p15sQe8mJa5nPeAj1NgGd8BdcVXdJuJOH8MePZ5MpJLElkNNb053SZK89xCObduLSKfd0UCydyZsIcuVPTBg-wIjxl4deMYsAfDvFUPlx0kbvAuuyu3GMCrOjDQVoxCi0aj-06rH-t63skw6GQdAXRKoFlB2drQ0YpWrNUerfXBJLj60XQzGDthnlmqts9D7i4rc4" />
            <div
                class="absolute inset-0 bg-gradient-to-t from-[#00241a]/80 via-[#00241a]/20 to-transparent flex items-end">
                <div class="max-w-[1280px] mx-auto w-full px-margin-mobile md:px-margin-desktop pb-stack-md">
                    <div
                        class="inline-flex items-center gap-2 px-3 py-1 bg-tertiary-container text-on-tertiary-container rounded-full text-label-sm font-label-sm mb-4">
                        <span class="material-symbols-outlined text-[16px]" data-icon="verified">verified</span>
                        Layanan Legalitas Usaha
                    </div>
                    <h2 class="font-h1 text-h1 text-white max-w-2xl mb-2">Legalitaskan Usaha Anda dengan Mudah</h2>
                    <p class="text-white/80 font-body-lg text-body-lg max-w-xl">Dukungan resmi Desa Kopandakan I untuk
                        kemajuan UMKM lokal.</p>
                </div>
            </div>
        </section>
        <div class="max-w-[1280px] mx-auto px-margin-mobile md:px-margin-desktop mt-stack-md">
            <div class="flex flex-col lg:flex-row gap-gutter">
                <!-- Main Content Left -->
                <div class="flex-1 space-y-stack-md">
                    <!-- Description Card -->
                    <div class="bg-white border border-outline-variant p-stack-md rounded-xl custom-shadow">
                        <h3 class="font-h3 text-h3 text-primary-container mb-4">Deskripsi Layanan</h3>
                        <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
                            Layanan ini diberikan kepada warga Desa Kopandakan I yang memiliki usaha untuk keperluan
                            legalitas, pengajuan bantuan UMKM, atau persyaratan kredit perbankan. Surat Keterangan Usaha
                            (SKU) berfungsi sebagai bukti resmi keberadaan aktivitas usaha di wilayah desa.
                        </p>
                    </div>
                    <!-- Requirements Grid -->
                    <div class="bg-white border border-outline-variant p-stack-md rounded-xl custom-shadow">
                        <h3 class="font-h3 text-h3 text-primary-container mb-6">Persyaratan Berkas</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div
                                class="flex items-start gap-3 p-4 bg-surface-container-low rounded-lg border border-surface-variant">
                                <span class="material-symbols-outlined text-primary-container"
                                    data-icon="badge">badge</span>
                                <div>
                                    <p class="font-button text-on-surface">Fotokopi KTP Pemohon</p>
                                    <p class="text-xs text-on-surface-variant">Pastikan data sesuai domisili</p>
                                </div>
                            </div>
                            <div
                                class="flex items-start gap-3 p-4 bg-surface-container-low rounded-lg border border-surface-variant">
                                <span class="material-symbols-outlined text-primary-container"
                                    data-icon="groups">groups</span>
                                <div>
                                    <p class="font-button text-on-surface">Fotokopi Kartu Keluarga</p>
                                    <p class="text-xs text-on-surface-variant">Data anggota keluarga terbaru</p>
                                </div>
                            </div>
                            <div
                                class="flex items-start gap-3 p-4 bg-surface-container-low rounded-lg border border-surface-variant">
                                <span class="material-symbols-outlined text-primary-container"
                                    data-icon="description">description</span>
                                <div>
                                    <p class="font-button text-on-surface">Surat Pengantar RT/RW</p>
                                    <p class="text-xs text-on-surface-variant">Tanda tangan &amp; stempel basah</p>
                                </div>
                            </div>
                            <div
                                class="flex items-start gap-3 p-4 bg-surface-container-low rounded-lg border border-surface-variant">
                                <span class="material-symbols-outlined text-primary-container"
                                    data-icon="photo_camera">photo_camera</span>
                                <div>
                                    <p class="font-button text-on-surface">Foto Tempat Usaha</p>
                                    <p class="text-xs text-on-surface-variant">Tampak depan dan aktivitas usaha</p>
                                </div>
                            </div>
                            <div
                                class="flex items-start gap-3 p-4 bg-surface-container-low rounded-lg border border-surface-variant md:col-span-2">
                                <span class="material-symbols-outlined text-primary-container"
                                    data-icon="assignment_ind">assignment_ind</span>
                                <div>
                                    <p class="font-button text-on-surface">Surat Pernyataan Kepemilikan Usaha</p>
                                    <p class="text-xs text-on-surface-variant">Bermaterai 10.000 (Tersedia template di
                                        kantor desa)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Process Sidebar -->
                <div class="w-full lg:w-[380px] space-y-stack-md">
                    <div class="bg-primary-container text-white p-stack-md rounded-xl sticky top-24">
                        <h3 class="font-h3 text-h3 mb-6">Alur Proses</h3>
                        <div class="space-y-6 relative">
                            <!-- Process Line -->
                            <div class="absolute left-[11px] top-2 bottom-2 w-[2px] bg-primary-fixed-dim/30"></div>
                            <!-- Steps -->
                            <div class="relative flex gap-4">
                                <div
                                    class="w-6 h-6 rounded-full bg-tertiary-fixed text-on-tertiary-fixed flex items-center justify-center text-xs font-bold z-10 shrink-0">
                                    1</div>
                                <div>
                                    <h4 class="font-button mb-1">Lengkapi berkas</h4>
                                    <p class="text-sm text-primary-fixed/80">Siapkan semua dokumen fisik/digital yang
                                        diperlukan.</p>
                                </div>
                            </div>
                            <div class="relative flex gap-4">
                                <div
                                    class="w-6 h-6 rounded-full bg-primary-fixed text-on-primary-fixed flex items-center justify-center text-xs font-bold z-10 shrink-0">
                                    2</div>
                                <div>
                                    <h4 class="font-button mb-1">Ajukan permohonan</h4>
                                    <p class="text-sm text-primary-fixed/80">Klik tombol ajukan dan unggah dokumen Anda.
                                    </p>
                                </div>
                            </div>
                            <div class="relative flex gap-4">
                                <div
                                    class="w-6 h-6 rounded-full bg-primary-fixed text-on-primary-fixed flex items-center justify-center text-xs font-bold z-10 shrink-0">
                                    3</div>
                                <div>
                                    <h4 class="font-button mb-1">Verifikasi admin</h4>
                                    <p class="text-sm text-primary-fixed/80">Petugas memeriksa berkas (1-2 hari kerja).
                                    </p>
                                </div>
                            </div>
                            <div class="relative flex gap-4">
                                <div
                                    class="w-6 h-6 rounded-full bg-primary-fixed text-on-primary-fixed flex items-center justify-center text-xs font-bold z-10 shrink-0">
                                    4</div>
                                <div>
                                    <h4 class="font-button mb-1">Ambil surat</h4>
                                    <p class="text-sm text-primary-fixed/80">Ambil surat fisik di Balai Desa dengan
                                        membawa berkas asli.</p>
                                </div>
                            </div>
                        </div>
                        <div class="mt-8 pt-6 border-t border-white/10">
                            <div class="flex items-center gap-3 text-tertiary-fixed">
                                <span class="material-symbols-outlined" data-icon="info">info</span>
                                <p class="text-xs">Estimasi penyelesaian tergantung pada kelengkapan berkas pemohon.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- Bottom Action Area -->
    <div
        class="fixed bottom-0 left-0 w-full z-50 bg-white/95 backdrop-blur-md border-t border-slate-200 p-4 md:px-margin-desktop shadow-[0_-4px_20px_-5px_rgba(0,0,0,0.1)]">
        <div class="max-w-container-max mx-auto flex flex-col md:flex-row md:items-center md:justify-between gap-3">
            <div class="flex items-start gap-3">
                <span class="material-symbols-outlined text-primary-container text-3xl"
                    data-icon="support_agent">support_agent</span>
                <div>
                    <p class="font-button text-primary-container">Siap mengajukan permohonan?</p>
                    <p class="text-label-sm text-on-surface-variant">Pastikan berkas lengkap. Bantuan WhatsApp:
                        0812-3456-7890</p>
                </div>
            </div>
            <a href="{{ route('user.pengajuan.create', ['jenis' => 'usaha']) }}"
                class="w-full md:w-auto md:min-w-[240px] h-14 px-8 bg-primary-container text-white font-button text-button rounded-xl hover:brightness-110 active:scale-[0.98] transition-all flex items-center justify-center gap-2 shadow-lg shadow-primary-container/20">
                <span class="material-symbols-outlined" data-icon="send">send</span>
                Ajukan Permohonan
            </a>
        </div>
    </div>
    <!-- Micro-interaction Scripts -->
    <script>
        document.querySelectorAll('button').forEach(button => {
            button.addEventListener('mousedown', function () {
                this.style.transform = 'scale(0.98)';
            });
            button.addEventListener('mouseup', function () {
                this.style.transform = 'scale(1)';
            });
            button.addEventListener('mouseleave', function () {
                this.style.transform = 'scale(1)';
            });
        });

        // Simple scroll appearance for the header
        window.addEventListener('scroll', () => {
            const header = document.querySelector('header');
            if (window.scrollY > 20) {
                header.classList.add('shadow-md');
            } else {
                header.classList.remove('shadow-md');
            }
        });
    </script>
</body>

</html>
