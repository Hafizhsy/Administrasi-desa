<!DOCTYPE html>

<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Civic Horizon - Detail Layanan SKTM</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@400;500;600;700;800&amp;family=Work+Sans:wght@400;500;600&amp;display=swap"
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
            vertical-align: middle;
        }

        .step-connector::after {
            content: '';
            position: absolute;
            left: 20px;
            top: 40px;
            bottom: -20px;
            width: 2px;
            background-color: #e2e8f0;
        }

        .step-item:last-child .step-connector::after {
            display: none;
        }

        .tonal-card {
            background-color: #ffffff;
            border: 1px solid #e2e8f0;
        }
    </style>
    <style>
        body {
            min-height: max(884px, 100dvh);
        }
    </style>
</head>

<body class="bg-background text-on-surface font-body-md antialiased min-h-screen pb-32">
    <!-- TopAppBar -->
    <header
        class="fixed top-0 left-0 w-full z-50 flex items-center px-4 h-16 bg-white dark:bg-slate-950 border-b border-slate-200 dark:border-slate-800 transition-colors duration-200">
        <button class="p-2 mr-2 rounded-full hover:bg-slate-50 dark:hover:bg-slate-900 transition-colors">
            <span class="material-symbols-outlined text-[#0D3B2E] dark:text-emerald-400" onclick="window.history.back()"
                data-icon="arrow_back">arrow_back</span>
        </button>
        <h1 class="text-lg font-bold text-[#0D3B2E] dark:text-emerald-50 font-['Public_Sans'] tracking-tight">Civic
            Horizon</h1>
    </header>
    <main class="pt-16 max-w-container-max mx-auto px-4 md:px-margin-desktop">
        <!-- Hero Section -->
        <section
            class="mt-stack-sm rounded-xl overflow-hidden relative h-64 md:h-96 shadow-sm border border-outline-variant">
            <img alt="Social welfare and community support" class="w-full h-full object-cover"
                data-alt="A warm and uplifting photograph capturing a diverse group of community members and social workers interacting with kindness in a sun-drenched, clean modern community center. The scene is bathed in soft, natural high-key lighting that emphasizes a trustworthy and supportive atmosphere. The color palette features soothing greens and clean whites, reflecting a professional yet empathetic governmental service environment. The mood is one of hope and institutional reliability."
                src="https://lh3.googleusercontent.com/aida-public/AB6AXuBOBCC_PCckWbxPBd5aSrQj_GBo7yqhpJMWwjQEFytFURvj_35xyL36NQLK_UpPA_2K2FKvrAe_7uOhE5ozfmH5WbGOIuKMvzCc-jV5wIuQogvM2qPnNk9ZZlfuDlFTD8f1bb0l22wUXhQxpZFzk_cIhn-1w0auszpjWBeLMil_SOLOaTn2B38q4JvpP-F0qIQvihGJ_3nZhbM4SBIkj8K-I_H_9UPXItnctCL-KYjuhROZOx9ktQiAmkxoYeaSHjDBxpuEv9WYqwA" />
            <div
                class="absolute inset-0 bg-gradient-to-t from-primary/80 to-transparent flex flex-col justify-end p-gutter">
                <span
                    class="bg-tertiary text-white text-xs font-bold px-2 py-1 rounded w-max mb-2 uppercase tracking-wider">Pelayanan
                    Sosial</span>
                <h2 class="font-h1 text-white text-h2 md:text-h1">Surat Keterangan Tidak Mampu (SKTM)</h2>
            </div>
        </section>
        <!-- Service Description -->
        <section class="mt-stack-md">
            <div class="tonal-card p-gutter rounded-xl">
                <h3 class="font-h3 text-h3 text-primary mb-stack-sm flex items-center gap-2">
                    <span class="material-symbols-outlined text-tertiary-container" data-icon="info">info</span>
                    Tentang Layanan
                </h3>
                <p class="font-body-lg text-body-lg text-on-surface-variant">
                    Layanan ini diperuntukkan bagi warga Desa Kopandakan I yang membutuhkan surat keterangan untuk
                    keringanan biaya pendidikan, kesehatan, atau pengajuan bantuan sosial dari pemerintah.
                </p>
            </div>
        </section>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-gutter mt-stack-md">
            <!-- Requirements Checklist -->
            <section>
                <div class="tonal-card p-gutter rounded-xl h-full">
                    <h3 class="font-h3 text-h3 text-primary mb-stack-sm flex items-center gap-2">
                        <span class="material-symbols-outlined text-tertiary-container"
                            data-icon="assignment">assignment</span>
                        Persyaratan Berkas
                    </h3>
                    <ul class="space-y-4">
                        <li
                            class="flex items-start gap-3 p-3 bg-surface-container-low rounded-lg border border-outline-variant">
                            <span class="material-symbols-outlined text-primary-container" data-icon="check_circle"
                                style="font-variation-settings: 'FILL' 1;">check_circle</span>
                            <span class="font-body-md text-body-md text-on-surface">Fotokopi KTP Pemohon</span>
                        </li>
                        <li
                            class="flex items-start gap-3 p-3 bg-surface-container-low rounded-lg border border-outline-variant">
                            <span class="material-symbols-outlined text-primary-container" data-icon="check_circle"
                                style="font-variation-settings: 'FILL' 1;">check_circle</span>
                            <span class="font-body-md text-body-md text-on-surface">Fotokopi Kartu Keluarga</span>
                        </li>
                        <li
                            class="flex items-start gap-3 p-3 bg-surface-container-low rounded-lg border border-outline-variant">
                            <span class="material-symbols-outlined text-primary-container" data-icon="check_circle"
                                style="font-variation-settings: 'FILL' 1;">check_circle</span>
                            <span class="font-body-md text-body-md text-on-surface">Surat Pengantar RT/RW</span>
                        </li>
                        <li
                            class="flex items-start gap-3 p-3 bg-surface-container-low rounded-lg border border-outline-variant">
                            <span class="material-symbols-outlined text-primary-container" data-icon="check_circle"
                                style="font-variation-settings: 'FILL' 1;">check_circle</span>
                            <span class="font-body-md text-body-md text-on-surface">Foto Rumah (Tampak Depan)</span>
                        </li>
                        <li
                            class="flex items-start gap-3 p-3 bg-surface-container-low rounded-lg border border-outline-variant">
                            <span class="material-symbols-outlined text-primary-container" data-icon="check_circle"
                                style="font-variation-settings: 'FILL' 1;">check_circle</span>
                            <span class="font-body-md text-body-md text-on-surface">Slip Gaji atau Surat Pernyataan
                                Penghasilan</span>
                        </li>
                    </ul>
                </div>
            </section>
            <!-- Process Flow -->
            <section>
                <div class="tonal-card p-gutter rounded-xl h-full">
                    <h3 class="font-h3 text-h3 text-primary mb-stack-sm flex items-center gap-2">
                        <span class="material-symbols-outlined text-tertiary-container"
                            data-icon="timeline">timeline</span>
                        Alur Pengurusan
                    </h3>
                    <div class="space-y-6 relative ml-2">
                        <div class="step-item relative flex items-start gap-4 step-connector">
                            <div
                                class="w-10 h-10 rounded-full bg-primary-container flex items-center justify-center shrink-0 z-10 shadow-sm border-2 border-white">
                                <span class="text-white font-bold text-sm">01</span>
                            </div>
                            <div>
                                <h4 class="font-h3 text-body-lg font-bold text-primary">Lengkapi berkas</h4>
                                <p class="text-on-surface-variant text-sm mt-1">Siapkan semua dokumen persyaratan sesuai
                                    daftar.</p>
                            </div>
                        </div>
                        <div class="step-item relative flex items-start gap-4 step-connector">
                            <div
                                class="w-10 h-10 rounded-full bg-primary-container flex items-center justify-center shrink-0 z-10 shadow-sm border-2 border-white">
                                <span class="text-white font-bold text-sm">02</span>
                            </div>
                            <div>
                                <h4 class="font-h3 text-body-lg font-bold text-primary">Ajukan permohonan</h4>
                                <p class="text-on-surface-variant text-sm mt-1">Tekan tombol di bawah untuk mengisi
                                    formulir digital.</p>
                            </div>
                        </div>
                        <div class="step-item relative flex items-start gap-4 step-connector">
                            <div
                                class="w-10 h-10 rounded-full bg-tertiary-container flex items-center justify-center shrink-0 z-10 shadow-sm border-2 border-white">
                                <span class="text-white font-bold text-sm">03</span>
                            </div>
                            <div>
                                <h4 class="font-h3 text-body-lg font-bold text-primary">Verifikasi &amp; Survey lapangan
                                </h4>
                                <p class="text-on-surface-variant text-sm mt-1">Estimasi 1-3 hari kerja untuk pengecekan
                                    validitas data.</p>
                            </div>
                        </div>
                        <div class="step-item relative flex items-start gap-4">
                            <div
                                class="w-10 h-10 rounded-full bg-primary-container flex items-center justify-center shrink-0 z-10 shadow-sm border-2 border-white">
                                <span class="text-white font-bold text-sm">04</span>
                            </div>
                            <div>
                                <h4 class="font-h3 text-body-lg font-bold text-primary">Ambil surat di balai desa</h4>
                                <p class="text-on-surface-variant text-sm mt-1">Kami akan memberi notifikasi jika surat
                                    siap diambil.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- Help/Notice Banner -->
        <div
            class="mt-stack-md p-4 bg-tertiary-fixed rounded-xl flex items-center gap-4 border border-tertiary-container/30">
            <span class="material-symbols-outlined text-on-tertiary-fixed text-3xl"
                data-icon="help_outline">help_outline</span>
            <div>
                <p class="font-button text-on-tertiary-fixed">Butuh Bantuan?</p>
                <p class="text-label-sm text-on-tertiary-fixed-variant">Hubungi layanan masyarakat desa melalui WhatsApp
                    di 0812-3456-7890 jika mengalami kendala berkas.</p>
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
            <a href="{{ route('login') }}"
                class="w-full md:w-auto md:min-w-[240px] h-14 px-8 bg-primary-container text-white font-button text-button rounded-xl hover:brightness-110 active:scale-[0.98] transition-all flex items-center justify-center gap-2 shadow-lg shadow-primary-container/20">
                <span class="material-symbols-outlined" data-icon="send">send</span>
                Ajukan Permohonan
            </a>
        </div>
    </div>
    <!-- Atmosphere/Interactions Scripts -->
    <script>
        // Subtle scroll behavior for the top bar
        window.addEventListener('scroll', () => {
            const header = document.querySelector('header');
            if (window.scrollY > 20) {
                header.classList.add('shadow-md');
                header.classList.remove('border-b');
            } else {
                header.classList.remove('shadow-md');
                header.classList.add('border-b');
            }
        });

        // Hover animation for process steps
        document.querySelectorAll('.step-item').forEach(item => {
            item.addEventListener('mouseenter', () => {
                item.querySelector('.rounded-full').classList.add('scale-110');
            });
            item.addEventListener('mouseleave', () => {
                item.querySelector('.rounded-full').classList.remove('scale-110');
            });
        });
    </script>
</body>

</html>
