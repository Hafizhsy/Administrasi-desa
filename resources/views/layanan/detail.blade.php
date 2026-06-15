<!DOCTYPE html>

<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>{{ $layanan['label'] }} - Detail Layanan</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@400;500;600;700&amp;family=Work+Sans:wght@500;600&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#00241a',
                        'primary-container': '#0d3b2e',
                        'primary-fixed': '#beedd9',
                        'tertiary-container': '#cba72f',
                        'on-tertiary-container': '#4e3d00',
                        'surface': '#f8f9ff',
                        'surface-container-lowest': '#ffffff',
                        'surface-container-low': '#eff4ff',
                        'outline': '#717974',
                        'outline-variant': '#c0c8c3',
                        'on-surface': '#0b1c30',
                        'on-surface-variant': '#414845',
                    },
                    borderRadius: {
                        xl: '0.5rem',
                    },
                    spacing: {
                        'stack-sm': '12px',
                        'stack-md': '24px',
                        'stack-lg': '48px',
                        'gutter': '24px',
                        'margin-mobile': '16px',
                        'margin-desktop': '48px',
                        'container-max': '1280px',
                    },
                    fontFamily: {
                        'body-md': ['Public Sans'],
                        'body-lg': ['Public Sans'],
                        button: ['Work Sans'],
                        h2: ['Public Sans'],
                        h3: ['Public Sans'],
                        'label-sm': ['Work Sans'],
                    },
                    fontSize: {
                        'body-md': ['16px', { lineHeight: '1.6', letterSpacing: '0', fontWeight: '400' }],
                        'body-lg': ['18px', { lineHeight: '1.6', letterSpacing: '0', fontWeight: '400' }],
                        h2: ['32px', { lineHeight: '1.3', letterSpacing: '0', fontWeight: '600' }],
                        h3: ['24px', { lineHeight: '1.4', letterSpacing: '0', fontWeight: '600' }],
                        button: ['16px', { lineHeight: '1', letterSpacing: '0.01em', fontWeight: '600' }],
                        'label-sm': ['14px', { lineHeight: '1.2', letterSpacing: '0.02em', fontWeight: '500' }],
                    },
                },
            },
        }
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            line-height: 1;
        }

        body {
            min-height: max(884px, 100dvh);
        }
    </style>
</head>

<body class="bg-surface font-body-md text-on-surface antialiased">
    <header class="fixed top-0 left-0 w-full z-50 flex items-center px-4 h-16 bg-white border-b border-slate-200">
        <button type="button" onclick="window.history.back()"
            class="mr-4 p-2 transition-colors duration-200 hover:bg-slate-50 rounded-full">
            <span class="material-symbols-outlined text-primary-container">arrow_back</span>
        </button>
        <h1 class="font-semibold tracking-tight text-lg text-primary-container">Detail Layanan</h1>
    </header>

    <main class="mt-16 mb-32 max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop py-stack-lg">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter">
            <div class="lg:col-span-8">
                <section
                    class="bg-surface-container-lowest border border-outline-variant rounded-xl overflow-hidden mb-stack-md">
                    <div class="h-56 w-full bg-primary-container relative">
                        <img alt="Kantor pelayanan Desa Kopandakan I" class="w-full h-full object-cover opacity-55"
                            src="{{ asset('images/tugu-kope.jpg') }}" />
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-primary-container via-primary-container/60 to-transparent">
                        </div>
                        <div class="absolute bottom-0 left-0 p-stack-md w-full">
                            <span
                                class="inline-flex items-center gap-2 px-3 py-1 bg-tertiary-container text-on-tertiary-container font-label-sm text-label-sm rounded-full mb-3">
                                <span class="material-symbols-outlined text-base">{{ $layanan['icon'] }}</span>
                                {{ $layanan['category'] }}
                            </span>
                            <h2 class="font-h2 text-h2 text-white leading-tight">{{ $layanan['label'] }}</h2>
                        </div>
                    </div>
                    <div class="p-stack-md">
                        <h3 class="font-h3 text-h3 mb-stack-sm text-primary-container">Deskripsi Layanan</h3>
                        <p class="font-body-lg text-body-lg text-on-surface-variant">
                            {{ $layanan['description'] }}
                        </p>
                    </div>
                </section>

                <section
                    class="bg-surface-container-lowest border border-outline-variant rounded-xl p-stack-md mb-stack-md">
                    <div class="flex items-center gap-2 mb-stack-md">
                        <span class="material-symbols-outlined text-primary-container">description</span>
                        <h3 class="font-h3 text-h3">Persyaratan Dokumen</h3>
                    </div>
                    <p class="text-label-sm font-label-sm text-outline mb-stack-md">
                        Format file: PDF, JPG, JPEG, atau PNG. Ukuran maksimal 2 MB per file.
                    </p>
                    <ul class="space-y-3">
                        @foreach ($layanan['documents'] as $dokumen)
                            <li class="flex items-start gap-3 p-3 rounded-lg bg-surface-container-low">
                                <span class="material-symbols-outlined text-primary-container mt-1"
                                    style="font-variation-settings: 'FILL' 1;">check_box</span>
                                <div>
                                    <p class="font-body-md font-semibold text-on-surface">{{ $dokumen }}</p>
                                    <p class="text-label-sm text-outline">Pastikan dokumen terlihat jelas dan sesuai data
                                        pemohon.</p>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </section>
            </div>

            <aside class="lg:col-span-4">
                <div class="sticky top-24 space-y-stack-md">
                    <section class="bg-white border border-outline-variant rounded-xl p-stack-md">
                        <div class="flex items-center gap-2 mb-stack-md">
                            <span class="material-symbols-outlined text-primary-container">account_tree</span>
                            <h3 class="font-h3 text-h3">Alur Proses</h3>
                        </div>
                        <div
                            class="relative space-y-6 before:content-[''] before:absolute before:left-4 before:top-2 before:bottom-2 before:w-[2px] before:bg-outline-variant">
                            @foreach (['Lengkapi berkas persyaratan.', 'Ajukan permohonan melalui sistem.', 'Admin desa memverifikasi data.', 'Cetak atau unduh surat setelah disetujui.'] as $step)
                                <div class="relative pl-10">
                                    <div
                                        class="absolute left-0 top-1 w-8 h-8 rounded-full bg-primary-container text-white flex items-center justify-center font-bold z-10">
                                        {{ $loop->iteration }}
                                    </div>
                                    <p class="font-body-md text-on-surface">{{ $step }}</p>
                                </div>
                            @endforeach
                        </div>
                    </section>

                    <section class="bg-white border border-outline-variant rounded-xl p-stack-md">
                        <h3 class="font-h3 text-h3 text-primary-container mb-3">Catatan</h3>
                        <p class="text-body-md text-on-surface-variant">
                            Dokumen asli dapat diminta saat verifikasi atau pengambilan surat di kantor desa.
                        </p>
                    </section>
                </div>
            </aside>
        </div>
    </main>

    <div
        class="fixed bottom-0 left-0 w-full z-50 bg-white/95 backdrop-blur-md border-t border-slate-200 p-4 md:px-margin-desktop shadow-[0_-4px_20px_-5px_rgba(0,0,0,0.1)]">
        <div class="max-w-container-max mx-auto flex flex-col md:flex-row md:items-center md:justify-between gap-3">
            <div class="flex items-start gap-3">
                <span class="material-symbols-outlined text-primary-container text-3xl">support_agent</span>
                <div>
                    <p class="font-button text-primary-container">Siap mengajukan permohonan?</p>
                    <p class="text-label-sm text-on-surface-variant">Pastikan berkas lengkap sebelum mengirim pengajuan.
                    </p>
                </div>
            </div>
            <a href="{{ route('user.pengajuan.create', ['jenis' => $layanan['slug']]) }}"
                class="w-full md:w-auto md:min-w-[240px] h-14 px-8 bg-primary-container text-white font-button text-button rounded-xl hover:brightness-110 active:scale-[0.98] transition-all flex items-center justify-center gap-2">
                <span class="material-symbols-outlined">send</span>
                Ajukan Permohonan
            </a>
        </div>
    </div>
</body>

</html>