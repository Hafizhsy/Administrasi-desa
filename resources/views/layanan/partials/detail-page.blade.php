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
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#00241a',
                        'primary-container': '#0d3b2e',
                        'tertiary-container': '#cba72f',
                        'on-tertiary-container': '#4e3d00',
                        surface: '#f8f9ff',
                        'outline-variant': '#c0c8c3',
                        outline: '#717974',
                        'on-surface': '#0b1c30',
                        'on-surface-variant': '#414845',
                    },
                    spacing: {
                        'container-max': '1280px',
                        'margin-mobile': '16px',
                        'margin-desktop': '48px',
                        gutter: '24px',
                        'stack-md': '24px',
                        'stack-lg': '48px',
                    },
                    fontFamily: {
                        body: ['Public Sans'],
                        button: ['Work Sans'],
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
    </style>
</head>

<body class="bg-surface font-body text-on-surface antialiased">
    <header class="fixed top-0 left-0 z-50 flex h-16 w-full items-center border-b border-slate-200 bg-white px-4">
        <button type="button" onclick="window.history.back()" class="mr-4 rounded-full p-2 hover:bg-slate-50">
            <span class="material-symbols-outlined text-primary-container">arrow_back</span>
        </button>
        <h1 class="text-lg font-semibold tracking-tight text-primary-container">Detail Layanan</h1>
    </header>

    <main class="mx-auto mb-32 mt-16 max-w-container-max px-margin-mobile py-stack-lg md:px-margin-desktop">
        <div class="grid grid-cols-1 gap-gutter lg:grid-cols-12">
            <div class="lg:col-span-8">
                <section class="mb-stack-md overflow-hidden rounded-xl border border-outline-variant bg-white">
                    <div class="relative h-56 w-full bg-primary-container">
                        <img alt="Kantor pelayanan Desa Kopandakan I" class="h-full w-full object-cover opacity-55"
                            src="{{ asset('images/tugu-kope.jpg') }}" />
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-primary-container via-primary-container/60 to-transparent"></div>
                        <div class="absolute bottom-0 left-0 w-full p-6">
                            <span
                                class="mb-3 inline-flex items-center gap-2 rounded-full bg-tertiary-container px-3 py-1 text-sm font-semibold text-on-tertiary-container">
                                <span class="material-symbols-outlined text-base">{{ $layanan['icon'] }}</span>
                                {{ $layanan['category'] }}
                            </span>
                            <h2 class="text-3xl font-semibold leading-tight text-white">{{ $layanan['label'] }}</h2>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="mb-3 text-2xl font-semibold text-primary-container">Deskripsi Layanan</h3>
                        <p class="text-lg leading-relaxed text-on-surface-variant">{{ $layanan['description'] }}</p>
                    </div>
                </section>

                <section class="mb-stack-md rounded-xl border border-outline-variant bg-white p-6">
                    <div class="mb-5 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary-container">description</span>
                        <h3 class="text-2xl font-semibold">Persyaratan Dokumen</h3>
                    </div>
                    <p class="mb-5 text-sm font-medium text-outline">
                        Format file: PDF, JPG, JPEG, atau PNG. Ukuran maksimal 2 MB per file.
                    </p>
                    <ul class="space-y-3">
                        @foreach ($layanan['documents'] as $dokumen)
                            <li class="flex items-start gap-3 rounded-lg bg-slate-50 p-3">
                                <span class="material-symbols-outlined mt-1 text-primary-container"
                                    style="font-variation-settings: 'FILL' 1;">check_box</span>
                                <div>
                                    <p class="font-semibold text-on-surface">{{ $dokumen }}</p>
                                    <p class="text-sm text-outline">Pastikan dokumen terlihat jelas dan sesuai data pemohon.</p>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </section>
            </div>

            <aside class="lg:col-span-4">
                <div class="sticky top-24 space-y-6">
                    <section class="rounded-xl border border-outline-variant bg-white p-6">
                        <div class="mb-5 flex items-center gap-2">
                            <span class="material-symbols-outlined text-primary-container">account_tree</span>
                            <h3 class="text-2xl font-semibold">Alur Proses</h3>
                        </div>
                        <div
                            class="relative space-y-6 before:absolute before:bottom-2 before:left-4 before:top-2 before:w-[2px] before:bg-outline-variant before:content-['']">
                            @foreach (['Lengkapi berkas persyaratan.', 'Ajukan permohonan melalui sistem.', 'Admin desa memverifikasi data.', 'Cetak atau unduh surat setelah disetujui.'] as $step)
                                <div class="relative pl-10">
                                    <div
                                        class="absolute left-0 top-1 z-10 flex h-8 w-8 items-center justify-center rounded-full bg-primary-container font-bold text-white">
                                        {{ $loop->iteration }}
                                    </div>
                                    <p>{{ $step }}</p>
                                </div>
                            @endforeach
                        </div>
                    </section>

                    <section class="rounded-xl border border-outline-variant bg-white p-6">
                        <h3 class="mb-3 text-2xl font-semibold text-primary-container">Catatan</h3>
                        <p class="leading-relaxed text-on-surface-variant">
                            Dokumen asli dapat diminta saat verifikasi atau pengambilan surat di kantor desa.
                        </p>
                    </section>
                </div>
            </aside>
        </div>
    </main>

    <div class="fixed bottom-0 left-0 z-50 w-full border-t border-slate-200 bg-white/95 p-4 shadow-[0_-4px_20px_-5px_rgba(0,0,0,0.1)] backdrop-blur-md md:px-margin-desktop">
        <div class="mx-auto flex max-w-container-max flex-col gap-3 md:flex-row md:items-center md:justify-between">
            <div class="flex items-start gap-3">
                <span class="material-symbols-outlined text-3xl text-primary-container">support_agent</span>
                <div>
                    <p class="font-button text-primary-container">Siap mengajukan permohonan?</p>
                    <p class="text-sm text-on-surface-variant">Pastikan berkas lengkap sebelum mengirim pengajuan.</p>
                </div>
            </div>
            <a href="{{ route('user.pengajuan.create', ['jenis' => $layanan['slug']]) }}"
                class="flex h-14 w-full items-center justify-center gap-2 rounded-xl bg-primary-container px-8 font-button text-white transition-all hover:brightness-110 active:scale-[0.98] md:w-auto md:min-w-[240px]">
                <span class="material-symbols-outlined">send</span>
                Ajukan Permohonan
            </a>
        </div>
    </div>
</body>

</html>
