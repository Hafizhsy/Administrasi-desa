<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Manajemen Permohonan Surat - Kopandakan I</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700;900&amp;family=Work+Sans:wght@400;500;600&amp;display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&amp;display=swap"
        rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary-fixed-dim": "#a3d0be",
                        "primary": "#00241a",
                        "on-primary": "#ffffff",
                        "on-surface": "#0b1c30",
                        "on-surface-variant": "#414845",
                        "secondary": "#5c5f61",
                        "surface": "#f8f9ff",
                        "surface-container": "#e5eeff",
                        "surface-container-high": "#dce9ff",
                        "surface-container-low": "#eff4ff",
                        "surface-container-lowest": "#ffffff",
                        "outline-variant": "#c0c8c3",
                        "error": "#ba1a1a",
                        "error-container": "#ffdad6",
                        "tertiary-fixed": "#ffe088",
                        "on-tertiary-fixed": "#241a00"
                    },
                    borderRadius: {
                        DEFAULT: "0.125rem",
                        lg: "0.25rem",
                        xl: "0.5rem",
                        full: "0.75rem"
                    },
                    spacing: {
                        "stack-md": "24px",
                        "container-max": "1280px"
                    },
                    fontFamily: {
                        "body-md": ["Public Sans"],
                        "button": ["Work Sans"],
                        "h1": ["Public Sans"],
                        "h2": ["Public Sans"],
                        "h3": ["Public Sans"],
                        "label-sm": ["Work Sans"]
                    },
                    fontSize: {
                        "body-md": ["16px", { lineHeight: "1.6", letterSpacing: "0", fontWeight: "400" }],
                        "button": ["16px", { lineHeight: "1", letterSpacing: "0.01em", fontWeight: "600" }],
                        "h1": ["40px", { lineHeight: "1.2", letterSpacing: "-0.02em", fontWeight: "700" }],
                        "h3": ["24px", { lineHeight: "1.4", letterSpacing: "0", fontWeight: "600" }],
                        "label-sm": ["14px", { lineHeight: "1", letterSpacing: "0.02em", fontWeight: "500" }]
                    }
                },
            },
        }
    </script>
    <style>
        .material-symbols-outlined {
            font-family: 'Material Symbols Outlined';
            font-size: 20px;
            line-height: 1;
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        body {
            background-color: #f8f9ff;
            font-family: 'Public Sans', sans-serif;
            min-height: max(884px, 100dvh);
        }

        summary::-webkit-details-marker {
            display: none;
        }

        dialog::backdrop {
            background: rgba(11, 28, 48, 0.55);
            backdrop-filter: blur(3px);
        }
    </style>
</head>

<body class="font-body-md text-on-surface">
    @php
        $statusOptions = [
            'menunggu' => ['label' => 'Menunggu', 'class' => 'bg-slate-100 text-slate-700 border-slate-200'],
            'diproses' => ['label' => 'Diproses', 'class' => 'bg-blue-50 text-blue-700 border-blue-100'],
            'disetujui' => ['label' => 'Disetujui', 'class' => 'bg-emerald-100 text-emerald-800 border-emerald-100'],
            'ditolak' => ['label' => 'Ditolak', 'class' => 'bg-red-100 text-red-700 border-red-100'],
        ];
    @endphp

    <header
        class="fixed top-0 w-full z-50 bg-white border-b border-slate-200 flex justify-between items-center px-4 h-16 w-full">
        <div class="flex items-center gap-3">
            <div class="w-10 h-10 rounded-full bg-primary-fixed-dim flex items-center justify-center overflow-hidden">
                <img alt="Village Emblem" class="w-8 h-8"
                    data-alt="Official village emblem of Kopandakan I showing administrative authority and local heritage"
                    src="https://tse2.mm.bing.net/th/id/OIP.e3qAPtdwr3_s22nmrHur3AHaIo?rs=1&pid=ImgDetMain&o=7&rm=3" />
            </div>
            <h1 class="font-public-sans font-bold text-lg text-emerald-900">Kopandakan I</h1>
        </div>
        <div class="flex items-center gap-2">
            <button class="p-2 rounded-full hover:bg-slate-100 transition-colors active:scale-95 duration-150">
                <span class="material-symbols-outlined text-slate-600">notifications</span>
            </button>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="px-4 py-2 rounded-lg bg-red-50 text-red-700 font-semibold hover:bg-red-100">
                    Logout
                </button>
            </form>
        </div>
    </header>

    <div class="flex pt-16 min-h-screen">
        <aside class="hidden md:flex flex-col gap-2 p-4 h-screen w-64 border-r border-slate-200 bg-white sticky top-16">
            <div class="mb-6 px-2 py-4 flex items-center gap-3">
                <div class="w-12 h-12 rounded-xl bg-surface-container-high flex items-center justify-center">
                    <img alt="Admin Avatar" class="w-10 h-10 rounded-lg object-cover"
                        data-alt="Professional portrait of a male administrative official in business attire, clean background"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuCxqattrOzrZ_z2WWKGe_agUgoqox-CBpdIg9lsc1hbn9hA-QCx80aUDIz4nNDagzOfJ-28c9J1oWbtGNZd-7ka_2Po3GraS4VSrfHNB_ToMyofZWKXrJQbjWDBdPfMGToCQZFsgnAwQGXlP-Sub1D99fLZh_YZ06obtHNCEj7X3Na7gTrdkVkUQg5SWRVJejMLUFzyTtV4B9NPT6NxvJIY28XNj1UjIiDXAm5BUfxn2tuS32IdFer_Hd7Wzv0SdO2NqTTFYYtH0LE" />
                </div>
                <div>
                    <h3 class="text-sm font-bold text-emerald-900">Admin Desa</h3>
                    <p class="text-xs text-slate-500">Administrator</p>
                </div>
            </div>
            <nav class="space-y-1">
                <a class="flex items-center gap-3 text-slate-600 hover:bg-slate-100 mx-2 rounded-lg px-4 py-3 font-medium text-sm transition-all duration-200"
                    href="{{ route('admin.dashboard') }}">
                    <span class="material-symbols-outlined">dashboard</span>
                    Dashboard
                </a>
                <a class="flex items-center gap-3 bg-emerald-900 text-white rounded-lg mx-2 px-4 py-3 font-medium text-sm transition-all duration-200"
                    href="{{ route('admin.pengajuan.index') }}">
                    <span class="material-symbols-outlined">folder_shared</span>
                    Permohonan
                </a>
                <a class="flex items-center gap-3 text-slate-600 hover:bg-slate-100 mx-2 rounded-lg px-4 py-3 font-medium text-sm transition-all duration-200"
                    href="{{ route('admin.laporan.index') }}">
                    <span class="material-symbols-outlined">analytics</span>
                    Laporan
                </a>
            </nav>
            <div class="mt-auto p-4 border-t border-slate-100">
                <p class="text-xs font-bold text-emerald-900">Kopandakan I</p>
            </div>
        </aside>

        <main class="flex-1 p-4 md:p-8 max-w-7xl mx-auto w-full">
            <div>
                <div class="mb-8">
                    <h1 class="text-[40px] leading-tight font-bold tracking-normal text-primary mb-2">Manajemen Permohonan</h1>
                    <p class="text-base text-secondary">Kelola dan proses surat-surat administratif warga Desa Kopandakan I.</p>
                </div>

                @if(session('success'))
                    <div class="mb-5 rounded-xl bg-emerald-50 border border-emerald-100 text-emerald-800 p-4 font-semibold">
                        {{ session('success') }}
                    </div>
                @endif

                <section class="bg-white border border-outline-variant rounded-xl shadow-sm p-4 md:p-6 mb-6">
                    <form method="GET" action="{{ route('admin.pengajuan.index') }}"
                        class="flex flex-col md:flex-row gap-4 items-end">
                        <div class="w-full md:flex-1">
                            <label class="block text-sm font-semibold tracking-wide text-on-surface-variant mb-2">Cari Pemohon atau NIK</label>
                            <div class="relative">
                                <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400">search</span>
                                <input name="search" value="{{ request('search') }}"
                                    class="w-full h-12 pl-10 pr-4 bg-surface-container-lowest border border-outline-variant rounded-xl text-base focus:ring-2 focus:ring-primary-fixed-dim outline-none transition-all"
                                    placeholder="Masukkan nama atau NIK..." type="text" />
                            </div>
                        </div>
                        <div class="w-full md:w-56">
                            <label class="block text-sm font-semibold tracking-wide text-on-surface-variant mb-2">Jenis Surat</label>
                            <select name="jenis_surat"
                                class="w-full h-12 px-4 bg-surface-container-lowest border border-outline-variant rounded-xl text-base focus:ring-2 focus:ring-primary-fixed-dim outline-none">
                                <option value="">Semua Jenis</option>
                                @foreach($jenisSurat as $jenis)
                                    <option value="{{ $jenis }}" @selected(request('jenis_surat') === $jenis)>{{ $jenis }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="w-full md:w-48">
                            <label class="block text-sm font-semibold tracking-wide text-on-surface-variant mb-2">Status</label>
                            <select name="status"
                                class="w-full h-12 px-4 bg-surface-container-lowest border border-outline-variant rounded-xl text-base focus:ring-2 focus:ring-primary-fixed-dim outline-none">
                                <option value="">Semua Status</option>
                                @foreach($statusOptions as $status => $meta)
                                    <option value="{{ $status }}" @selected(request('status') === $status)>{{ $meta['label'] }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button
                            class="w-full md:w-auto h-12 px-7 bg-primary text-on-primary rounded-xl text-base font-bold hover:bg-emerald-900 transition-colors flex items-center justify-center gap-2">
                            <span class="material-symbols-outlined">filter_list</span>
                            Filter
                        </button>
                        <a href="{{ route('admin.pengajuan.index') }}"
                            class="w-full md:w-auto h-12 px-5 border border-outline-variant rounded-xl text-center text-base font-semibold text-slate-600 hover:bg-slate-50 flex items-center justify-center">
                            Reset
                        </a>
                    </form>
                </section>

                <div class="overflow-visible rounded-xl border border-outline-variant bg-white">
                    <table class="w-full text-left border-collapse table-fixed">
                        <thead class="bg-surface-container-low text-on-surface-variant border-b border-outline-variant">
                            <tr>
                                <th class="w-[28%] px-6 py-4 text-sm font-semibold tracking-wide">Nama Pemohon</th>
                                <th class="w-[14%] px-6 py-4 text-sm font-semibold tracking-wide">Tanggal</th>
                                <th class="w-[24%] px-6 py-4 text-sm font-semibold tracking-wide">Jenis Surat</th>
                                <th class="w-[14%] px-6 py-4 text-sm font-semibold tracking-wide">Status</th>
                                <th class="w-[20%] px-6 py-4 text-sm font-semibold tracking-wide text-right">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-outline-variant">
                            @forelse($pengajuan as $item)
                                @php
                                    $meta = $statusOptions[$item->status] ?? ['label' => ucfirst($item->status), 'class' => 'bg-slate-100 text-slate-700 border-slate-200'];
                                    $initials = collect(explode(' ', $item->nama_pemohon))
                                        ->filter()
                                        ->take(2)
                                        ->map(fn ($part) => strtoupper(substr($part, 0, 1)))
                                        ->join('');
                                @endphp
                                <tr class="hover:bg-surface-container-lowest transition-colors align-middle">
                                    <td class="px-6 py-5">
                                        <div class="flex items-center gap-3">
                                            <div class="w-10 h-10 rounded-xl bg-primary-fixed-dim flex items-center justify-center font-bold text-primary shrink-0">
                                                {{ $initials ?: 'WP' }}
                                            </div>
                                            <div class="min-w-0">
                                                <p class="font-bold text-base text-on-surface leading-tight truncate">{{ $item->nama_pemohon }}</p>
                                                <p class="text-sm text-secondary mt-0.5 truncate">{{ $item->nik }}</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-5 text-base text-secondary whitespace-nowrap">
                                        {{ $item->created_at->format('d M Y') }}
                                    </td>
                                    <td class="px-6 py-5">
                                        <span class="inline-flex max-w-full items-center gap-1.5 px-3 py-1.5 rounded-full bg-tertiary-fixed text-on-tertiary-fixed text-sm font-semibold">
                                            <span class="material-symbols-outlined !text-[16px] shrink-0">description</span>
                                            <span class="truncate">{{ $item->jenis_surat }}</span>
                                        </span>
                                    </td>
                                    <td class="px-6 py-5">
                                        <span class="px-3 py-1.5 rounded-full text-sm font-bold border {{ $meta['class'] }}">
                                            {{ $meta['label'] }}
                                        </span>
                                    </td>
                                    <td class="px-6 py-5">
                                        <div class="flex justify-end items-center gap-2 whitespace-nowrap">
                                            <button type="button"
                                                class="w-10 h-10 text-primary hover:bg-primary-fixed-dim rounded-lg transition-colors cursor-pointer flex items-center justify-center"
                                                title="Lihat detail"
                                                data-open-modal="detail-pengajuan-{{ $item->id }}">
                                                    <span class="material-symbols-outlined">visibility</span>
                                            </button>

                                            @if($item->status === 'menunggu')
                                                <form method="POST" action="{{ route('admin.pengajuan.status', $item) }}">
                                                    @csrf
                                                    @method('PATCH')
                                                    <input type="hidden" name="status" value="diproses">
                                                    <button class="w-10 h-10 text-blue-600 hover:bg-blue-50 rounded-lg transition-colors flex items-center justify-center" title="Proses">
                                                        <span class="material-symbols-outlined">hourglass_top</span>
                                                    </button>
                                                </form>
                                            @elseif($item->status === 'diproses')
                                                <form method="POST" action="{{ route('admin.pengajuan.status', $item) }}">
                                                    @csrf
                                                    @method('PATCH')
                                                    <input type="hidden" name="status" value="disetujui">
                                                    <button class="w-10 h-10 text-emerald-600 hover:bg-emerald-50 rounded-lg transition-colors flex items-center justify-center" title="Setujui">
                                                        <span class="material-symbols-outlined">check_circle</span>
                                                    </button>
                                                </form>
                                            @elseif($item->status === 'disetujui')
                                                <button type="button" disabled
                                                    class="h-10 px-4 bg-primary-fixed-dim text-primary rounded-lg text-sm font-bold flex items-center justify-center cursor-default">
                                                    Siap Ambil
                                                </button>
                                            @endif

                                            @if(in_array($item->status, ['menunggu', 'diproses']))
                                                <button type="button"
                                                    class="w-10 h-10 text-error hover:bg-error-container rounded-lg transition-colors flex items-center justify-center"
                                                    title="Tolak"
                                                    data-open-modal="tolak-pengajuan-{{ $item->id }}">
                                                    <span class="material-symbols-outlined">cancel</span>
                                                </button>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="px-6 py-12 text-center">
                                        <div class="w-12 h-12 mx-auto mb-3 rounded-xl bg-surface-container flex items-center justify-center">
                                            <span class="material-symbols-outlined text-on-surface-variant">folder_open</span>
                                        </div>
                                        <p class="font-bold text-on-surface">Belum ada permohonan</p>
                                        <p class="text-sm text-secondary mt-1">Data permohonan warga akan tampil di sini.</p>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                @foreach($pengajuan as $item)
                    @php
                        $meta = $statusOptions[$item->status] ?? ['label' => ucfirst($item->status), 'class' => 'bg-slate-100 text-slate-700 border-slate-200'];
                    @endphp
                    <dialog id="detail-pengajuan-{{ $item->id }}"
                        class="m-auto w-[min(94vw,920px)] max-h-[90dvh] rounded-xl border border-outline-variant bg-white p-0 text-left shadow-2xl backdrop:bg-slate-950/60">
                        <div class="flex max-h-[90dvh] flex-col overflow-hidden">
                            <div class="flex items-start justify-between gap-4 border-b border-outline-variant bg-surface-container-low px-5 py-4 md:px-6">
                                <div class="min-w-0">
                                    <p class="text-sm font-semibold uppercase tracking-wide text-secondary">Detail Permohonan</p>
                                    <h2 class="mt-1 text-2xl font-bold leading-tight text-primary break-words">{{ $item->nama_pemohon }}</h2>
                                    <div class="mt-2 flex flex-wrap items-center gap-2">
                                        <span class="inline-flex items-center gap-1 rounded-full bg-white px-3 py-1 text-sm font-semibold text-on-surface border border-outline-variant">
                                            <span class="material-symbols-outlined !text-[16px]">badge</span>
                                            {{ $item->nik }}
                                        </span>
                                        <span class="px-3 py-1 rounded-full text-sm font-bold border {{ $meta['class'] }}">
                                            {{ $meta['label'] }}
                                        </span>
                                    </div>
                                </div>
                                <button type="button"
                                    class="w-10 h-10 shrink-0 rounded-lg text-slate-600 hover:bg-white hover:text-primary transition-colors flex items-center justify-center"
                                    title="Tutup"
                                    data-close-modal="detail-pengajuan-{{ $item->id }}">
                                    <span class="material-symbols-outlined">close</span>
                                </button>
                            </div>

                            <div class="overflow-y-auto px-5 py-5 md:px-6 md:py-6">
                                <div class="grid gap-5 lg:grid-cols-[1fr_1.1fr]">
                                    <section class="space-y-4">
                                        <div class="rounded-xl border border-outline-variant bg-white p-4">
                                            <h3 class="mb-4 text-base font-bold text-primary">Informasi Pemohon</h3>
                                            <dl class="grid gap-4 sm:grid-cols-2">
                                                <div>
                                                    <dt class="text-xs font-bold uppercase tracking-wide text-secondary">Nama</dt>
                                                    <dd class="mt-1 text-base font-semibold text-on-surface break-words">{{ $item->nama_pemohon }}</dd>
                                                </div>
                                                <div>
                                                    <dt class="text-xs font-bold uppercase tracking-wide text-secondary">NIK</dt>
                                                    <dd class="mt-1 text-base text-on-surface break-words">{{ $item->nik }}</dd>
                                                </div>
                                                <div class="sm:col-span-2">
                                                    <dt class="text-xs font-bold uppercase tracking-wide text-secondary">Alamat</dt>
                                                    <dd class="mt-1 text-base text-on-surface break-words">{{ $item->alamat }}</dd>
                                                </div>
                                                <div>
                                                    <dt class="text-xs font-bold uppercase tracking-wide text-secondary">Tanggal Pengajuan</dt>
                                                    <dd class="mt-1 text-base text-on-surface">{{ $item->created_at->format('d M Y') }}</dd>
                                                </div>
                                                <div>
                                                    <dt class="text-xs font-bold uppercase tracking-wide text-secondary">Jenis Surat</dt>
                                                    <dd class="mt-1 text-base font-semibold text-on-surface break-words">{{ $item->jenis_surat }}</dd>
                                                </div>
                                            </dl>
                                        </div>

                                        <div class="rounded-xl border border-outline-variant bg-surface-container-lowest p-4">
                                            <h3 class="mb-3 text-base font-bold text-primary">Keperluan & Catatan</h3>
                                            <dl class="space-y-4">
                                                <div>
                                                    <dt class="text-xs font-bold uppercase tracking-wide text-secondary">Keperluan</dt>
                                                    <dd class="mt-1 text-base text-on-surface break-words">{{ $item->keperluan ?: '-' }}</dd>
                                                </div>
                                                <div>
                                                    <dt class="text-xs font-bold uppercase tracking-wide text-secondary">Catatan Admin</dt>
                                                    <dd class="mt-1 text-base text-on-surface break-words">{{ $item->catatan_admin ?: '-' }}</dd>
                                                </div>
                                            </dl>
                                        </div>
                                    </section>

                                    <section class="rounded-xl border border-outline-variant bg-white p-4">
                                        <div class="mb-4 flex items-center justify-between gap-3">
                                            <h3 class="text-base font-bold text-primary">Dokumen Pendukung</h3>
                                            <span class="rounded-full bg-surface-container-low px-3 py-1 text-sm font-bold text-secondary">
                                                {{ $item->dokumen->count() }} dokumen
                                            </span>
                                        </div>

                                        <div class="max-h-[46dvh] space-y-3 overflow-y-auto pr-1">
                                            @forelse($item->dokumen as $dokumen)
                                                <a href="{{ asset('storage/' . $dokumen->file_path) }}" target="_blank"
                                                    class="group flex items-start gap-3 rounded-xl border border-outline-variant bg-surface-container-low p-3 text-sm font-medium text-on-surface transition-colors hover:bg-white hover:border-primary-fixed-dim">
                                                    <span class="material-symbols-outlined mt-0.5 shrink-0 text-primary">attach_file</span>
                                                    <span class="min-w-0 flex-1">
                                                        <span class="block break-words font-semibold leading-snug">{{ $dokumen->nama_dokumen }}</span>
                                                        <span class="mt-1 block break-all text-xs text-secondary">{{ basename($dokumen->file_path) }}</span>
                                                    </span>
                                                    <span class="material-symbols-outlined shrink-0 text-slate-400 transition-colors group-hover:text-primary">open_in_new</span>
                                                </a>
                                            @empty
                                                <div class="rounded-xl border border-dashed border-outline-variant bg-surface-container-lowest p-6 text-center">
                                                    <span class="material-symbols-outlined mx-auto mb-2 text-slate-400">folder_off</span>
                                                    <p class="text-sm font-semibold text-slate-600">Tidak ada dokumen.</p>
                                                </div>
                                            @endforelse
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </dialog>

                    @if(in_array($item->status, ['menunggu', 'diproses']))
                        <dialog id="tolak-pengajuan-{{ $item->id }}"
                            class="m-auto w-[min(92vw,560px)] rounded-xl border border-outline-variant bg-white p-0 text-left shadow-2xl">
                            <form method="POST" action="{{ route('admin.pengajuan.status', $item) }}" class="overflow-hidden">
                                @csrf
                                @method('PATCH')
                                <input type="hidden" name="status" value="ditolak">

                                <div class="flex items-start justify-between gap-4 border-b border-outline-variant bg-red-50 px-5 py-4">
                                    <div>
                                        <p class="text-sm font-semibold uppercase tracking-wide text-red-700">Tolak Permohonan</p>
                                        <h2 class="mt-1 text-xl font-bold text-on-surface">{{ $item->nama_pemohon }}</h2>
                                    </div>
                                    <button type="button"
                                        class="w-10 h-10 shrink-0 rounded-lg text-slate-600 hover:bg-white hover:text-error transition-colors flex items-center justify-center"
                                        title="Tutup"
                                        data-close-modal="tolak-pengajuan-{{ $item->id }}">
                                        <span class="material-symbols-outlined">close</span>
                                    </button>
                                </div>

                                <div class="p-5">
                                    <div class="mb-4 rounded-xl border border-red-100 bg-red-50 p-3 text-sm text-red-800">
                                        Catatan ini akan tersimpan sebagai alasan penolakan dan tampil di detail permohonan.
                                    </div>
                                    <label class="block text-sm font-bold text-on-surface-variant mb-2" for="catatan-admin-{{ $item->id }}">
                                        Catatan Admin
                                    </label>
                                    <textarea id="catatan-admin-{{ $item->id }}"
                                        name="catatan_admin"
                                        required
                                        rows="5"
                                        class="w-full rounded-xl border border-outline-variant bg-white p-4 text-base text-on-surface focus:border-red-400 focus:ring-2 focus:ring-red-100 outline-none"
                                        placeholder="Contoh: Dokumen KTP tidak jelas, mohon unggah ulang berkas yang lebih terbaca.">{{ old('catatan_admin') }}</textarea>
                                </div>

                                <div class="flex flex-col-reverse gap-3 border-t border-outline-variant bg-slate-50 px-5 py-4 sm:flex-row sm:justify-end">
                                    <button type="button"
                                        class="h-11 px-5 rounded-xl border border-outline-variant bg-white text-slate-700 font-semibold hover:bg-slate-100"
                                        data-close-modal="tolak-pengajuan-{{ $item->id }}">
                                        Batal
                                    </button>
                                    <button type="submit"
                                        class="h-11 px-5 rounded-xl bg-error text-white font-bold hover:bg-red-700">
                                        Tolak Permohonan
                                    </button>
                                </div>
                            </form>
                        </dialog>
                    @endif
                @endforeach

                <div class="mt-6 flex flex-col md:flex-row justify-between items-center gap-4">
                    <p class="text-label-sm text-secondary">
                        Menampilkan {{ $pengajuan->firstItem() ?? 0 }} sampai {{ $pengajuan->lastItem() ?? 0 }} dari {{ $pengajuan->total() }} permohonan
                    </p>
                    {{ $pengajuan->links() }}
                </div>
            </div>
        </main>
    </div>

    <nav
        class="md:hidden fixed bottom-0 left-0 w-full flex justify-around items-center px-2 py-2 bg-white border-t border-slate-200 shadow-lg z-50">
        <a class="flex flex-col items-center justify-center text-slate-500 px-4 py-1.5 hover:bg-slate-50 transition-transform active:scale-90"
            href="{{ route('admin.dashboard') }}">
            <span class="material-symbols-outlined">home</span>
            <span class="text-[11px] font-semibold">Beranda</span>
        </a>
        <a class="flex flex-col items-center justify-center bg-emerald-50 text-emerald-900 rounded-xl px-4 py-1.5 transition-transform active:scale-90"
            href="{{ route('admin.pengajuan.index') }}">
            <span class="material-symbols-outlined">description</span>
            <span class="text-[11px] font-semibold">Permohonan</span>
        </a>
        <a class="flex flex-col items-center justify-center text-slate-500 px-4 py-1.5 hover:bg-slate-50 transition-transform active:scale-90"
            href="{{ route('admin.laporan.index') }}">
            <span class="material-symbols-outlined">analytics</span>
            <span class="text-[11px] font-semibold">Laporan</span>
        </a>
    </nav>

    <script>
        document.querySelectorAll('[data-open-modal]').forEach((button) => {
            button.addEventListener('click', () => {
                const modal = document.getElementById(button.dataset.openModal);
                if (modal) {
                    modal.showModal();
                }
            });
        });

        document.querySelectorAll('[data-close-modal]').forEach((button) => {
            button.addEventListener('click', () => {
                document.getElementById(button.dataset.closeModal)?.close();
            });
        });

        document.querySelectorAll('dialog').forEach((modal) => {
            modal.addEventListener('click', (event) => {
                if (event.target === modal) {
                    modal.close();
                }
            });
        });
    </script>
</body>

</html>
