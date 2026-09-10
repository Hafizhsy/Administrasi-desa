<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Verifikasi Akun Warga - Kopandakan I</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700;900&amp;family=Work+Sans:wght@400;500;600&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&amp;display=swap"
        rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: "#00241a",
                        "on-primary": "#ffffff",
                        "on-surface": "#0b1c30",
                        "on-surface-variant": "#414845",
                        secondary: "#5c5f61",
                        surface: "#f8f9ff",
                        "surface-container-lowest": "#ffffff",
                        "outline-variant": "#c0c8c3",
                        "primary-fixed-dim": "#a3d0be",
                    },
                    borderRadius: {
                        xl: "0.5rem",
                    },
                    fontFamily: {
                        "body-md": ["Public Sans"],
                        button: ["Work Sans"],
                    },
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
        $statusOptions = [
            'pending' => ['label' => 'Menunggu', 'class' => 'bg-amber-50 text-amber-700 border-amber-100'],
            'active' => ['label' => 'Aktif', 'class' => 'bg-emerald-50 text-emerald-700 border-emerald-100'],
        ];
    @endphp

    <header
        class="fixed top-0 w-full z-50 bg-white border-b border-slate-200 flex justify-between items-center px-4 h-16">
        <div class="flex items-center gap-3">
            <div class="w-10 h-10 rounded-full bg-primary-fixed-dim flex items-center justify-center overflow-hidden">
                <img alt="Village Emblem" class="w-8 h-8"
                    src="https://tse2.mm.bing.net/th/id/OIP.e3qAPtdwr3_s22nmrHur3AHaIo?rs=1&pid=ImgDetMain&o=7&rm=3" />
            </div>
            <h1 class="font-bold text-lg text-emerald-900">Kopandakan I</h1>
        </div>
        <div class="flex items-center gap-2">
            <x-notification-dropdown />
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
                <div class="w-12 h-12 rounded-xl bg-slate-100 flex items-center justify-center">
                    <span class="material-symbols-outlined text-primary text-3xl">account_circle</span>
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
                    href="{{ route('admin.users.index') }}">
                    <span class="material-symbols-outlined">verified_user</span>
                    Verifikasi Akun
                </a>
                <a class="flex items-center gap-3 text-slate-600 hover:bg-slate-100 mx-2 rounded-lg px-4 py-3 font-medium text-sm transition-all duration-200"
                    href="{{ route('admin.laporan.index') }}">
                    <span class="material-symbols-outlined">analytics</span>
                    Laporan
                </a>
            </nav>
        </aside>

        <main class="flex-1 p-4 md:p-8 max-w-7xl mx-auto w-full">
            <div class="mb-8">
                <h1 class="text-[40px] leading-tight font-bold tracking-normal text-primary mb-2">Verifikasi Akun Warga</h1>
                <p class="text-base text-secondary">Aktifkan akun warga yang sudah sesuai dengan data NIK dan alamat.</p>
            </div>

            @if(session('success'))
                <div class="mb-5 rounded-xl bg-emerald-50 border border-emerald-100 text-emerald-800 p-4 font-semibold">
                    {{ session('success') }}
                </div>
            @endif

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-6">
                <a href="{{ route('admin.users.index', ['status' => 'pending']) }}"
                    class="bg-white border border-slate-200 rounded-xl p-5 hover:shadow-sm transition-shadow">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm font-semibold text-slate-500">Menunggu Verifikasi</p>
                            <p class="mt-2 text-3xl font-bold text-emerald-900">{{ $pendingCount }}</p>
                        </div>
                        <span class="material-symbols-outlined text-amber-700 text-3xl">pending_actions</span>
                    </div>
                </a>
                <a href="{{ route('admin.users.index', ['status' => 'active']) }}"
                    class="bg-white border border-slate-200 rounded-xl p-5 hover:shadow-sm transition-shadow">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm font-semibold text-slate-500">Akun Aktif</p>
                            <p class="mt-2 text-3xl font-bold text-emerald-900">{{ $activeCount }}</p>
                        </div>
                        <span class="material-symbols-outlined text-emerald-700 text-3xl">task_alt</span>
                    </div>
                </a>
            </div>

            <section class="bg-white border border-outline-variant rounded-xl shadow-sm p-4 md:p-6 mb-6">
                <form method="GET" action="{{ route('admin.users.index') }}" class="flex flex-col md:flex-row gap-4 items-end">
                    <div class="w-full md:flex-1">
                        <label class="block text-sm font-semibold tracking-wide text-on-surface-variant mb-2">Cari Warga</label>
                        <div class="relative">
                            <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400">search</span>
                            <input name="search" value="{{ request('search') }}"
                                class="w-full h-12 pl-10 pr-4 bg-surface-container-lowest border border-outline-variant rounded-xl text-base focus:ring-2 focus:ring-primary-fixed-dim outline-none transition-all"
                                placeholder="Nama, NIK, atau email..." type="text" />
                        </div>
                    </div>
                    <div class="w-full md:w-56">
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
                    <a href="{{ route('admin.users.index') }}"
                        class="w-full md:w-auto h-12 px-5 border border-outline-variant rounded-xl text-center text-base font-semibold text-slate-600 hover:bg-slate-50 flex items-center justify-center">
                        Reset
                    </a>
                </form>
            </section>

            <section class="bg-white border border-outline-variant rounded-xl shadow-sm overflow-hidden mb-20">
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-slate-100">
                        <thead class="bg-slate-50">
                            <tr>
                                <th class="px-5 py-4 text-left text-xs font-bold uppercase tracking-wide text-slate-500">Warga</th>
                                <th class="px-5 py-4 text-left text-xs font-bold uppercase tracking-wide text-slate-500">NIK</th>
                                <th class="px-5 py-4 text-left text-xs font-bold uppercase tracking-wide text-slate-500">Alamat</th>
                                <th class="px-5 py-4 text-left text-xs font-bold uppercase tracking-wide text-slate-500">Status</th>
                                <th class="px-5 py-4 text-right text-xs font-bold uppercase tracking-wide text-slate-500">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100">
                            @forelse($users as $user)
                                @php($status = $statusOptions[$user->account_status] ?? $statusOptions['pending'])
                                <tr class="hover:bg-slate-50">
                                    <td class="px-5 py-4">
                                        <p class="font-bold text-emerald-900">{{ $user->name }}</p>
                                        <p class="text-sm text-slate-500">{{ $user->email }}</p>
                                    </td>
                                    <td class="px-5 py-4 text-sm font-semibold text-slate-700 whitespace-nowrap">{{ $user->nik }}</td>
                                    <td class="px-5 py-4 text-sm text-slate-600 min-w-64">{{ $user->alamat }}</td>
                                    <td class="px-5 py-4">
                                        <span class="inline-flex rounded-full border px-3 py-1 text-xs font-bold {{ $status['class'] }}">
                                            {{ $status['label'] }}
                                        </span>
                                    </td>
                                    <td class="px-5 py-4 text-right">
                                        @if($user->account_status === \App\Models\User::STATUS_PENDING)
                                            <form method="POST" action="{{ route('admin.users.activate', $user) }}">
                                                @csrf
                                                @method('PATCH')
                                                <button
                                                    class="inline-flex h-10 items-center justify-center gap-2 rounded-xl bg-emerald-900 px-4 text-sm font-bold text-white hover:bg-emerald-800">
                                                    <span class="material-symbols-outlined">task_alt</span>
                                                    Aktifkan
                                                </button>
                                            </form>
                                        @else
                                            <span class="text-sm font-semibold text-slate-400">Sudah aktif</span>
                                        @endif
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="px-5 py-12 text-center">
                                        <span class="material-symbols-outlined text-slate-400 text-4xl">person_search</span>
                                        <p class="mt-2 font-bold text-emerald-900">Tidak ada akun warga</p>
                                        <p class="text-sm text-slate-500">Data akun warga akan tampil setelah registrasi.</p>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <div class="border-t border-slate-100 px-5 py-4">
                    {{ $users->links() }}
                </div>
            </section>
        </main>
    </div>

    <nav
        class="md:hidden fixed bottom-0 left-0 w-full bg-white border-t border-slate-200 shadow-lg flex justify-around items-center px-2 py-2 z-50">
        <a class="flex flex-col items-center justify-center text-slate-500 px-3 py-1.5 hover:bg-slate-50"
            href="{{ route('admin.dashboard') }}">
            <span class="material-symbols-outlined">home</span>
            <span class="text-[11px] font-semibold">Beranda</span>
        </a>
        <a class="flex flex-col items-center justify-center text-slate-500 px-3 py-1.5 hover:bg-slate-50"
            href="{{ route('admin.pengajuan.index') }}">
            <span class="material-symbols-outlined">description</span>
            <span class="text-[11px] font-semibold">Permohonan</span>
        </a>
        <a class="flex flex-col items-center justify-center bg-emerald-50 text-emerald-900 rounded-xl px-3 py-1.5"
            href="{{ route('admin.users.index') }}">
            <span class="material-symbols-outlined">verified_user</span>
            <span class="text-[11px] font-semibold">Akun</span>
        </a>
        <a class="flex flex-col items-center justify-center text-slate-500 px-3 py-1.5 hover:bg-slate-50"
            href="{{ route('admin.laporan.index') }}">
            <span class="material-symbols-outlined">analytics</span>
            <span class="text-[11px] font-semibold">Laporan</span>
        </a>
    </nav>
</body>

</html>
