<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Laporan Administrasi - Kopandakan I</title>
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
                    fontFamily: {
                        "body-md": ["Public Sans"],
                        "button": ["Work Sans"],
                        "h1": ["Public Sans"],
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
    </style>
</head>

<body class="font-body-md text-on-surface">
    @php
        $monthNames = [
            1 => 'Januari',
            2 => 'Februari',
            3 => 'Maret',
            4 => 'April',
            5 => 'Mei',
            6 => 'Juni',
            7 => 'Juli',
            8 => 'Agustus',
            9 => 'September',
            10 => 'Oktober',
            11 => 'November',
            12 => 'Desember',
        ];

        $statusCards = [
            ['label' => 'Total Permohonan', 'value' => $summary['total'], 'icon' => 'description', 'class' => 'bg-tertiary-fixed text-on-tertiary-fixed'],
            ['label' => 'Menunggu', 'value' => $summary['menunggu'], 'icon' => 'pending_actions', 'class' => 'bg-error-container text-error'],
            ['label' => 'Disetujui', 'value' => $summary['disetujui'], 'icon' => 'task_alt', 'class' => 'bg-primary-fixed-dim text-primary'],
            ['label' => 'Ditolak', 'value' => $summary['ditolak'], 'icon' => 'cancel', 'class' => 'bg-red-100 text-red-700'],
        ];

        $statusOptions = [
            'menunggu' => ['label' => 'Menunggu', 'class' => 'bg-slate-100 text-slate-700 border-slate-200'],
            'disetujui' => ['label' => 'Disetujui', 'class' => 'bg-emerald-100 text-emerald-800 border-emerald-100'],
            'ditolak' => ['label' => 'Ditolak', 'class' => 'bg-red-100 text-red-700 border-red-100'],
        ];
    @endphp

    <header
        class="fixed top-0 w-full z-50 bg-white border-b border-slate-200 flex justify-between items-center px-4 h-16 w-full">
        <div class="flex items-center gap-3">
            <div class="w-10 h-10 rounded-full bg-primary-fixed-dim flex items-center justify-center overflow-hidden">
                <img alt="Village Emblem" class="w-8 h-8"
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
                <a class="flex items-center gap-3 text-slate-600 hover:bg-slate-100 mx-2 rounded-lg px-4 py-3 font-medium text-sm transition-all duration-200"
                    href="{{ route('admin.pengajuan.index') }}">
                    <span class="material-symbols-outlined">folder_shared</span>
                    Permohonan
                </a>
                <a class="flex items-center gap-3 bg-emerald-900 text-white rounded-lg mx-2 px-4 py-3 font-medium text-sm transition-all duration-200"
                    href="{{ route('admin.laporan.index') }}">
                    <span class="material-symbols-outlined">analytics</span>
                    Laporan
                </a>
            </nav>
            <div class="mt-auto p-4 border-t border-slate-100">
                <p class="text-xs font-bold text-emerald-900">Kopandakan I</p>
            </div>
        </aside>

        <main class="flex-1 p-4 md:p-8 max-w-7xl mx-auto w-full pb-24 md:pb-8">
            <div class="mb-8 flex flex-col gap-4 md:flex-row md:items-end md:justify-between">
                <div>
                    <h1 class="text-[40px] leading-tight font-bold tracking-normal text-primary mb-2">Laporan Administrasi</h1>
                    <p class="text-base text-secondary">Rekap permohonan surat periode {{ $monthNames[$bulan] }} {{ $tahun }}.</p>
                </div>
                <a href="{{ route('admin.laporan.rekap', ['tahun' => $tahun]) }}" target="_blank"
                    class="inline-flex h-12 items-center justify-center gap-2 rounded-xl bg-primary px-5 text-base font-bold text-on-primary hover:bg-emerald-900">
                    <span class="material-symbols-outlined">download</span>
                    Download Rekap
                </a>
            </div>

            <section class="mb-6 rounded-xl border border-outline-variant bg-white p-4 shadow-sm md:p-6">
                <form method="GET" action="{{ route('admin.laporan.index') }}" class="flex flex-col gap-4 md:flex-row md:items-end">
                    <div class="w-full md:w-64">
                        <label class="mb-2 block text-sm font-semibold tracking-wide text-on-surface-variant">Bulan</label>
                        <select name="bulan"
                            class="h-12 w-full rounded-xl border border-outline-variant bg-surface-container-lowest px-4 text-base outline-none focus:ring-2 focus:ring-primary-fixed-dim">
                            @foreach($monthNames as $number => $name)
                                <option value="{{ $number }}" @selected($bulan === $number)>{{ $name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="w-full md:w-52">
                        <label class="mb-2 block text-sm font-semibold tracking-wide text-on-surface-variant">Tahun</label>
                        <select name="tahun"
                            class="h-12 w-full rounded-xl border border-outline-variant bg-surface-container-lowest px-4 text-base outline-none focus:ring-2 focus:ring-primary-fixed-dim">
                            @foreach($availableYears as $year)
                                <option value="{{ $year }}" @selected($tahun === (int) $year)>{{ $year }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button
                        class="h-12 rounded-xl bg-primary px-7 text-base font-bold text-on-primary transition-colors hover:bg-emerald-900 flex items-center justify-center gap-2">
                        <span class="material-symbols-outlined">filter_list</span>
                        Tampilkan
                    </button>
                </form>
            </section>

            <section class="mb-8 grid grid-cols-1 gap-4 sm:grid-cols-2 xl:grid-cols-5">
                @foreach($statusCards as $card)
                    <div class="rounded-xl border border-slate-200 bg-white p-5">
                        <div class="mb-4 flex items-start justify-between gap-3">
                            <div class="flex h-11 w-11 items-center justify-center rounded-lg {{ $card['class'] }}">
                                <span class="material-symbols-outlined">{{ $card['icon'] }}</span>
                            </div>
                        </div>
                        <p class="text-sm font-semibold text-secondary">{{ $card['label'] }}</p>
                        <p class="mt-1 text-3xl font-bold text-emerald-900">{{ $card['value'] }}</p>
                    </div>
                @endforeach
            </section>

            <div class="mb-8 grid gap-6 xl:grid-cols-[1.4fr_1fr]">
                <section class="rounded-xl border border-outline-variant bg-white p-5 md:p-6">
                    <div class="mb-5 flex items-center justify-between gap-3">
                        <div>
                            <h2 class="text-xl font-bold text-primary">Tren Harian</h2>
                            <p class="text-sm text-secondary">Jumlah permohonan masuk per tanggal.</p>
                        </div>
                        <span class="rounded-full bg-surface-container-low px-3 py-1 text-sm font-bold text-secondary">
                            {{ $periode->daysInMonth }} hari
                        </span>
                    </div>
                    <div class="flex h-72 items-end gap-1 overflow-x-auto border-b border-slate-200 pb-2">
                        @foreach($dailyReport as $day)
                            <div class="flex min-w-6 flex-1 flex-col items-center justify-end gap-2">
                                <div class="w-full rounded-t bg-primary-fixed-dim"
                                    style="height: {{ max(6, ($day['total'] / $maxDailyTotal) * 220) }}px"
                                    title="Tanggal {{ $day['tanggal'] }}: {{ $day['total'] }} permohonan"></div>
                                <span class="text-[10px] font-semibold text-slate-500">{{ $day['tanggal'] }}</span>
                            </div>
                        @endforeach
                    </div>
                </section>

                <section class="rounded-xl border border-outline-variant bg-white p-5 md:p-6">
                    <div class="mb-5">
                        <h2 class="text-xl font-bold text-primary">Jenis Surat</h2>
                        <p class="text-sm text-secondary">Jenis layanan yang paling sering diajukan.</p>
                    </div>
                    <div class="space-y-4">
                        @forelse($jenisSuratCounts as $jenis)
                            @php
                                $percent = $summary['total'] > 0 ? ($jenis->total / $summary['total']) * 100 : 0;
                            @endphp
                            <div>
                                <div class="mb-2 flex items-center justify-between gap-3">
                                    <p class="min-w-0 truncate text-sm font-bold text-on-surface">{{ $jenis->jenis_surat }}</p>
                                    <span class="text-sm font-bold text-primary">{{ $jenis->total }}</span>
                                </div>
                                <div class="h-2 overflow-hidden rounded-full bg-surface-container-low">
                                    <div class="h-full rounded-full bg-emerald-800" style="width: {{ $percent }}%"></div>
                                </div>
                            </div>
                        @empty
                            <div class="rounded-xl border border-dashed border-outline-variant bg-surface-container-lowest p-8 text-center">
                                <span class="material-symbols-outlined mb-2 text-slate-400">bar_chart_off</span>
                                <p class="font-bold text-on-surface">Belum ada data laporan</p>
                                <p class="mt-1 text-sm text-secondary">Data akan muncul ketika ada permohonan pada periode ini.</p>
                            </div>
                        @endforelse
                    </div>
                </section>
            </div>

            <section class="overflow-hidden rounded-xl border border-outline-variant bg-white">
                <div class="border-b border-outline-variant bg-surface-container-low px-5 py-4 md:px-6">
                    <h2 class="text-xl font-bold text-primary">Permohonan Terbaru</h2>
                    <p class="text-sm text-secondary">Daftar pengajuan terbaru pada periode laporan.</p>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full min-w-[760px] text-left">
                        <thead class="border-b border-outline-variant text-on-surface-variant">
                            <tr>
                                <th class="px-6 py-4 text-sm font-semibold">Pemohon</th>
                                <th class="px-6 py-4 text-sm font-semibold">Tanggal</th>
                                <th class="px-6 py-4 text-sm font-semibold">Jenis Surat</th>
                                <th class="px-6 py-4 text-sm font-semibold">Status</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-outline-variant">
                            @forelse($recentPengajuan as $item)
                                @php
                                    $meta = $statusOptions[$item->status] ?? ['label' => ucfirst($item->status), 'class' => 'bg-slate-100 text-slate-700 border-slate-200'];
                                @endphp
                                <tr class="hover:bg-surface-container-lowest">
                                    <td class="px-6 py-4">
                                        <p class="font-bold text-on-surface">{{ $item->nama_pemohon }}</p>
                                        <p class="text-sm text-secondary">{{ $item->nik }}</p>
                                    </td>
                                    <td class="px-6 py-4 text-sm text-secondary">{{ $item->created_at->format('d M Y') }}</td>
                                    <td class="px-6 py-4 text-sm font-semibold text-on-surface">{{ $item->jenis_surat }}</td>
                                    <td class="px-6 py-4">
                                        <span class="rounded-full border px-3 py-1.5 text-sm font-bold {{ $meta['class'] }}">
                                            {{ $meta['label'] }}
                                        </span>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="px-6 py-12 text-center">
                                        <div class="mx-auto mb-3 flex h-12 w-12 items-center justify-center rounded-xl bg-surface-container">
                                            <span class="material-symbols-outlined text-on-surface-variant">folder_open</span>
                                        </div>
                                        <p class="font-bold text-on-surface">Belum ada permohonan</p>
                                        <p class="mt-1 text-sm text-secondary">Tidak ada data pada periode yang dipilih.</p>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </section>
        </main>
    </div>

    <nav
        class="md:hidden fixed bottom-0 left-0 w-full flex justify-around items-center px-2 py-2 bg-white border-t border-slate-200 shadow-lg z-50">
        <a class="flex flex-col items-center justify-center text-slate-500 px-4 py-1.5 hover:bg-slate-50 transition-transform active:scale-90"
            href="{{ route('admin.dashboard') }}">
            <span class="material-symbols-outlined">home</span>
            <span class="text-[11px] font-semibold">Beranda</span>
        </a>
        <a class="flex flex-col items-center justify-center text-slate-500 px-4 py-1.5 hover:bg-slate-50 transition-transform active:scale-90"
            href="{{ route('admin.pengajuan.index') }}">
            <span class="material-symbols-outlined">description</span>
            <span class="text-[11px] font-semibold">Permohonan</span>
        </a>
        <a class="flex flex-col items-center justify-center bg-emerald-50 text-emerald-900 rounded-xl px-4 py-1.5 transition-transform active:scale-90"
            href="{{ route('admin.laporan.index') }}">
            <span class="material-symbols-outlined">analytics</span>
            <span class="text-[11px] font-semibold">Laporan</span>
        </a>
    </nav>
</body>

</html>
