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

        input[type="file"] {
            width: 100%;
            cursor: pointer;
            border: 1.5px dashed #a3d0be;
            border-radius: 0.75rem;
            background: #f8fffc;
            padding: 0.875rem;
            color: #414845;
            transition: border-color 160ms ease, background-color 160ms ease, box-shadow 160ms ease;
        }

        input[type="file"]:hover {
            border-color: #0d3b2e;
            background: #f0fbf6;
        }

        input[type="file"]:focus {
            outline: none;
            border-color: #0d3b2e;
            box-shadow: 0 0 0 3px rgba(13, 59, 46, 0.14);
        }

        input[type="file"]::file-selector-button {
            margin-right: 1rem;
            border: 0;
            border-radius: 0.625rem;
            background: #0d3b2e;
            color: #ffffff;
            padding: 0.65rem 1rem;
            font-family: "Work Sans", sans-serif;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 160ms ease, transform 160ms ease;
        }

        input[type="file"]::file-selector-button:hover {
            background: #00241a;
        }

        .file-input-hidden {
            position: absolute;
            width: 1px !important;
            height: 1px !important;
            padding: 0 !important;
            margin: -1px;
            overflow: hidden;
            clip: rect(0, 0, 0, 0);
            white-space: nowrap;
            border: 0;
        }

        .file-upload {
            display: flex;
            align-items: center;
            gap: 0.875rem;
            width: 100%;
            cursor: pointer;
            border: 1.5px dashed #a3d0be;
            border-radius: 0.75rem;
            background: #f8fffc;
            padding: 0.875rem;
            transition: border-color 160ms ease, background-color 160ms ease, box-shadow 160ms ease, transform 160ms ease;
        }

        .file-upload:hover {
            border-color: #0d3b2e;
            background: #f0fbf6;
            transform: translateY(-1px);
        }

        .file-upload:focus-within {
            border-color: #0d3b2e;
            box-shadow: 0 0 0 3px rgba(13, 59, 46, 0.14);
        }

        .file-upload-icon {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            width: 2.75rem;
            height: 2.75rem;
            border-radius: 0.75rem;
            background: #0d3b2e;
            color: #ffffff;
        }

        .file-upload-title {
            display: block;
            font-family: "Work Sans", sans-serif;
            font-weight: 700;
            color: #0d3b2e;
        }

        .file-upload-name {
            display: block;
            margin-top: 0.125rem;
            font-size: 0.875rem;
            color: #717974;
            word-break: break-word;
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
                    src="https://tse2.mm.bing.net/th/id/OIP.e3qAPtdwr3_s22nmrHur3AHaIo?rs=1&pid=ImgDetMain&o=7&rm=3" />
            </div>
            <span class="font-public-sans font-bold text-lg text-emerald-900">Kopandakan I</span>
        </div>
        <div class="flex items-center gap-3">
            <x-notification-dropdown />
            <a href="{{ route('user.dashboard') }}"
                class="h-10 px-4 rounded-xl bg-primary-container text-white font-button text-sm flex items-center gap-2 hover:bg-primary transition-all active:scale-95">
                <span class="material-symbols-outlined text-lg">arrow_back</span>
                <span class="hidden sm:inline">Dashboard</span>
            </a>
        </div>
    </header>
    <main class="pt-24 pb-32 px-4 md:px-margin-desktop max-w-container-max mx-auto">
        <div class="mb-stack-lg text-center md:text-left">
            <h1 class="font-h1 text-h1 text-primary mb-2">Permohonan Surat</h1>
            <p class="text-body-lg text-on-surface-variant max-w-2xl">Silakan pilih jenis surat dan lengkapi formulir di
                bawah ini untuk mengajukan permohonan layanan administrasi desa.</p>
        </div>

        @if ($errors->any())
            <div class="mb-6 rounded-xl border border-red-200 bg-red-50 p-4 text-red-800">
                <p class="font-bold">Pengajuan belum bisa dikirim.</p>
                <ul class="mt-2 list-disc space-y-1 pl-5 text-sm">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter items-start">
            <aside class="lg:col-span-4 xl:col-span-3 lg:sticky lg:top-24 lg:self-start">
                <div
                    class="bg-white border border-slate-200 rounded-xl overflow-hidden shadow-sm lg:max-h-[calc(100vh-7rem)] lg:flex lg:flex-col">
                    <div class="p-5 border-b border-slate-100">
                        <div class="flex items-center gap-3">
                            <div
                                class="flex h-9 w-9 items-center justify-center rounded-full bg-tertiary text-sm font-bold text-white">
                                1</div>
                            <div>
                                <h2 class="font-h3 text-xl text-primary">Pilih Surat</h2>
                                <p class="text-sm text-on-surface-variant">Klik salah satu layanan.</p>
                            </div>
                        </div>
                    </div>
                    <div class="max-h-[360px] overflow-y-auto p-2 lg:max-h-none lg:flex-1">
                        @foreach ($jenisSurat as $slug => $namaSurat)
                            <button type="button"
                                class="surat-card w-full cursor-pointer group relative flex items-center gap-3 rounded-lg px-3 py-3 text-left transition-all hover:bg-emerald-50"
                                data-surat="{{ $slug }}" data-label="{{ $namaSurat }}">
                                <span
                                    class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-primary-fixed/30 text-primary">
                                    <span
                                        class="material-symbols-outlined text-[22px]">{{ $layananData[$slug]['icon'] ?? 'description' }}</span>
                                </span>
                                <span class="min-w-0 flex-1">
                                    <h3 class="font-semibold leading-tight text-on-surface">{{ $namaSurat }}</h3>
                                </span>
                                <span class="check-icon hidden text-primary">
                                    <span class="material-symbols-outlined">check_circle</span>
                                </span>
                            </button>
                        @endforeach
                    </div>
                </div>
            </aside>

            <section id="form-area"
                class="lg:col-span-8 xl:col-span-6 bg-white border border-slate-200 rounded-xl p-6 md:p-8 shadow-sm">
                <div
                    class="flex flex-col gap-3 border-b border-slate-100 pb-5 md:flex-row md:items-start md:justify-between">
                    <div>
                        <div class="flex items-center gap-2 mb-2">
                            <div
                                class="flex-shrink-0 flex items-center justify-center w-8 h-8 rounded-full bg-tertiary text-white font-bold text-sm">
                                2</div>
                            <p class="font-label-sm text-on-surface-variant">Form Pengajuan</p>
                        </div>
                        <h2 id="selected-service-title" class="font-h3 text-h3 text-primary">Pilih jenis surat terlebih
                            dahulu</h2>
                    </div>
                    <span
                        class="rounded-full bg-emerald-50 px-3 py-1 text-sm font-semibold text-emerald-900">PDF/JPG/PNG
                        maks 2 MB</span>
                </div>

                <form action="{{ route('user.pengajuan.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="jenis_surat" id="jenis_surat" value="{{ old('jenis_surat') }}" />

                    <div class="pt-6">
                        <label class="font-label-sm text-on-surface-variant block mb-2">Tujuan Pengajuan Surat</label>
                        <input name="keperluan" value="{{ old('keperluan') }}"
                            class="w-full h-12 px-4 rounded-xl border border-slate-300 focus:ring-2 focus:ring-sky-200 focus:border-sky-500 outline-none transition-all"
                            placeholder="Contoh: Persyaratan administrasi keluarga" type="text" />
                    </div>

                    <div class="border-t border-slate-100 pt-6 mt-6">
                        <div class="flex items-center justify-between gap-3 mb-4">
                            <h2 class="font-h3 text-h3 text-on-surface">Lampiran Dokumen</h2>
                            <span class="text-sm text-on-surface-variant">Wajib diunggah semua</span>
                        </div>

                        <div id="document-placeholder"
                            class="rounded-xl border border-dashed border-slate-300 bg-slate-50 p-8 text-center">
                            <span class="material-symbols-outlined text-4xl text-slate-400">touch_app</span>
                            <p class="mt-2 font-semibold text-slate-700">Pilih layanan di sebelah kiri</p>
                            <p class="text-sm text-slate-500">Daftar dokumen yang harus diunggah akan muncul di sini.
                            </p>
                        </div>

                        @foreach ($dokumenPersyaratan as $slug => $dokumenLayanan)
                            <div id="dokumen-{{ $slug }}" class="dokumen-group hidden space-y-4">
                                @foreach ($dokumenLayanan as $namaDokumen)
                                    <div class="rounded-xl border border-slate-200 p-4">
                                        <label class="block font-semibold mb-2">{{ $namaDokumen }}</label>
                                        <input type="file" name="dokumen[{{ $namaDokumen }}]"
                                            class="w-full border rounded-lg p-3">
                                    </div>
                                @endforeach
                            </div>
                        @endforeach
                    </div>

                    <div
                        class="sticky bottom-0 -mx-6 mt-6 border-t border-slate-100 bg-white/95 px-6 py-4 backdrop-blur md:-mx-8 md:px-8">
                        <button id="submit-button"
                            class="w-full md:w-auto px-10 h-14 bg-primary text-white font-button rounded-xl hover:bg-primary-container transition-all flex items-center justify-center gap-2 shadow-lg active:scale-95 disabled:cursor-not-allowed disabled:bg-slate-300 disabled:shadow-none"
                            type="submit" disabled>
                            <span>Kirim Permohonan</span>
                            <span class="material-symbols-outlined">send</span>
                        </button>
                    </div>
                </form>
            </section>

            <aside class="lg:col-span-12 xl:col-span-3 space-y-gutter">
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
                            <span
                                class="material-symbols-outlined text-tertiary-fixed text-lg">notifications_active</span>
                            <span>Notifikasi status akan dikirimkan melalui dashboard.</span>
                        </li>
                    </ul>
                </div>
                <div class="bg-white border border-slate-200 rounded-xl p-6 shadow-sm">
                    <h3 class="font-bold text-on-surface mb-4">Alur Singkat</h3>
                    <ol class="space-y-3 text-sm text-on-surface-variant">
                        <li class="flex gap-3"><span class="font-bold text-primary">1</span><span>Pilih jenis
                                surat.</span></li>
                        <li class="flex gap-3"><span class="font-bold text-primary">2</span><span>Isi tujuan
                                pengajuan.</span></li>
                        <li class="flex gap-3"><span class="font-bold text-primary">3</span><span>Unggah semua
                                dokumen.</span></li>
                    </ol>
                </div>
            </aside>
        </div>
    </main>
    <footer class="w-full bg-slate-50 py-8 border-t border-slate-200">
        <div
            class="w-full flex flex-col md:flex-row justify-between items-center px-8 gap-4 max-w-container-max mx-auto">
            <div class="text-center md:text-left">
                <span class="font-bold text-slate-900 block mb-1">Pemerintah Desa Kopandakan 1</span>
                <p class="font-public-sans text-xs text-slate-500">&copy; 2026 Pemerintah Desa Kopandakan 1.</p>
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
        const dokumenInputs = document.querySelectorAll('.dokumen-group input[type="file"]');
        const formArea = document.getElementById('form-area');
        const documentPlaceholder = document.getElementById('document-placeholder');
        const selectedServiceTitle = document.getElementById('selected-service-title');
        const submitButton = document.getElementById('submit-button');

        dokumenInputs.forEach((input) => {
            input.disabled = true;
            input.required = false;
            input.accept = '.pdf,.jpg,.jpeg,.png';
        });

        document.querySelectorAll('input[type="file"]').forEach((input) => {
            const uploadBox = document.createElement('label');
            const fileName = document.createElement('span');

            uploadBox.className = 'file-upload';
            fileName.className = 'file-upload-name';
            fileName.textContent = 'PDF, JPG, JPEG, PNG maksimal 2 MB';

            input.parentNode.insertBefore(uploadBox, input);
            uploadBox.appendChild(input);
            input.classList.add('file-input-hidden');

            const icon = document.createElement('span');
            icon.className = 'material-symbols-outlined file-upload-icon';
            icon.textContent = 'upload_file';

            const textWrapper = document.createElement('span');
            textWrapper.innerHTML = '<span class="file-upload-title">Pilih File</span>';
            textWrapper.appendChild(fileName);

            uploadBox.appendChild(icon);
            uploadBox.appendChild(textWrapper);

            input.addEventListener('change', function () {
                fileName.textContent = this.files.length ? this.files[0].name : 'PDF, JPG, JPEG, PNG maksimal 2 MB';
            });
        });

        cards.forEach(card => {
            card.addEventListener('click', function () {
                cards.forEach(c => {
                    c.classList.remove(
                        'bg-primary-container',
                        'text-white',
                        'ring-2',
                        'ring-primary',
                        'ring-offset-2'
                    );

                    c.classList.add(
                        'hover:bg-emerald-50'
                    );

                    const title = c.querySelector('h3');
                    const iconBox = c.querySelector('span');
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
                    'hover:bg-emerald-50'
                );
                this.classList.add(
                    'bg-primary-container',
                    'ring-2',
                    'ring-primary',
                    'ring-offset-2',
                    'text-white'
                );

                const title = this.querySelector('h3');
                const iconBox = this.querySelector('span');
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
                if (selectedServiceTitle) {
                    selectedServiceTitle.textContent = this.dataset.label || 'Form Pengajuan';
                }
                if (documentPlaceholder) {
                    documentPlaceholder.classList.add('hidden');
                }
                if (submitButton) {
                    submitButton.disabled = false;
                }

                dokumenGroups.forEach(group => {
                    group.classList.add('hidden');
                    group.querySelectorAll('input[type="file"]').forEach((input) => {
                        input.disabled = true;
                        input.required = false;
                    });
                });

                const activeGroup = document.getElementById('dokumen-' + jenis);

                if (activeGroup) {
                    activeGroup.classList.remove('hidden');
                    activeGroup.querySelectorAll('input[type="file"]').forEach((input) => {
                        input.disabled = false;
                        input.required = true;
                    });
                }

                if (formArea) {
                    formArea.scrollIntoView({ behavior: 'smooth', block: 'start' });
                }
            });
        });

        const selectedJenis = @json(old('jenis_surat')) || new URLSearchParams(window.location.search).get('jenis');
        const selectedCard = selectedJenis ? document.querySelector(`.surat-card[data-surat="${selectedJenis}"]`) : null;

        if (selectedCard) {
            selectedCard.click();
        }
    </script>
</body>

</html>
