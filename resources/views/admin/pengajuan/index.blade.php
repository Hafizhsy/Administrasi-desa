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
                    href="#">
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
                                            <details class="relative">
                                                <summary class="list-none w-10 h-10 text-primary hover:bg-primary-fixed-dim rounded-lg transition-colors cursor-pointer flex items-center justify-center">
                                                    <span class="material-symbols-outlined">visibility</span>
                                                </summary>
                                                <div class="absolute right-0 mt-2 w-80 bg-white border border-outline-variant rounded-xl shadow-xl p-4 z-20 text-left">
                                                    <h3 class="font-bold text-primary mb-3">Detail Permohonan</h3>
                                                    <div class="space-y-2 text-sm">
                                                        <p><span class="font-bold">Nama:</span> {{ $item->nama_pemohon }}</p>
                                                        <p><span class="font-bold">NIK:</span> {{ $item->nik }}</p>
                                                        <p><span class="font-bold">Alamat:</span> {{ $item->alamat }}</p>
                                                        <p><span class="font-bold">Keperluan:</span> {{ $item->keperluan ?: '-' }}</p>
                                                        <p><span class="font-bold">Catatan:</span> {{ $item->catatan_admin ?: '-' }}</p>
                                                    </div>
                                                    <div class="mt-4">
                                                        <p class="text-xs font-bold text-secondary uppercase tracking-wider mb-2">Dokumen Pendukung</p>
                                                        <div class="space-y-2">
                                                            @forelse($item->dokumen as $dokumen)
                                                                <a href="{{ asset('storage/' . $dokumen->file_path) }}" target="_blank"
                                                                    class="flex items-center gap-2 p-3 bg-surface-container-low border border-outline-variant rounded-xl text-sm font-medium hover:bg-slate-50">
                                                                    <span class="material-symbols-outlined text-primary">attach_file</span>
                                                                    {{ $dokumen->nama_dokumen }}
                                                                </a>
                                                            @empty
                                                                <p class="text-sm text-slate-500">Tidak ada dokumen.</p>
                                                            @endforelse
                                                        </div>
                                                    </div>
                                                </div>
                                            </details>

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
                                                <form method="POST" action="{{ route('admin.pengajuan.status', $item) }}">
                                                    @csrf
                                                    @method('PATCH')
                                                    <input type="hidden" name="status" value="ditolak">
                                                    <button class="w-10 h-10 text-error hover:bg-error-container rounded-lg transition-colors flex items-center justify-center" title="Tolak">
                                                        <span class="material-symbols-outlined">cancel</span>
                                                    </button>
                                                </form>
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
    </nav>
</body>

</html>
