<!DOCTYPE html>

<html class="light" lang="id">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <title>Admin Dashboard - Kopandakan I</title>
  <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
  <link
    href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@400;500;600;700;900&amp;family=Work+Sans:wght@500;600&amp;display=swap"
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

    body {
      background-color: #f8f9ff;
      font-family: 'Public Sans', sans-serif;
    }
  </style>
  <style>
    body {
      min-height: max(884px, 100dvh);
    }
  </style>
</head>

<body class="bg-background text-on-background">
  <!-- TopAppBar -->
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
    <!-- NavigationDrawer -->
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
        <a class="flex items-center gap-3 bg-emerald-900 text-white rounded-lg mx-2 px-4 py-3 font-medium text-sm transition-all duration-200"
          href="{{ route('admin.dashboard') }}">
          <span class="material-symbols-outlined">dashboard</span>
          Dashboard
        </a>
        <a class="flex items-center gap-3 text-slate-600 hover:bg-slate-100 mx-2 rounded-lg px-4 py-3 font-medium text-sm transition-all duration-200"
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
    </aside>
    <!-- Main Content -->
    <main class="flex-1 p-4 md:p-8 max-w-7xl mx-auto w-full">
      <!-- Header Section -->
      <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-8">
        <div>
          <h2 class="font-h1 text-h1 text-on-background">Beranda Admin</h2>
          <p class="font-body-md text-body-md text-slate-500">Ringkasan aktivitas dan administrasi hari ini.</p>
        </div>
        <button
          class="bg-primary-container text-on-primary-fixed-variant px-6 py-3 rounded-xl font-button text-button flex items-center gap-2 hover:bg-primary transition-colors active:scale-95 shadow-sm"
          onclick="window.location.href='{{ route('admin.pengajuan.index', ['status' => 'menunggu']) }}'">
          <span class="material-symbols-outlined">rate_review</span>
          Review Pending Requests
        </button>
      </div>
      <!-- Stats Grid -->
      <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-6 mb-10">
        <a class="bg-white border border-slate-200 p-6 rounded-xl flex flex-col gap-4 hover:shadow-md transition-shadow cursor-pointer"
          href="{{ route('admin.pengajuan.index', ['status' => 'menunggu']) }}">
          <div class="flex justify-between items-start">
            <div class="p-3 bg-error-container rounded-lg"><span
                class="material-symbols-outlined text-on-error-container">pending_actions</span></div><span
              class="text-error font-bold text-sm">Perlu review</span>
          </div>
          <div>
            <p class="text-slate-500 font-label-sm text-label-sm">Menunggu</p>
            <h4 class="text-3xl font-h2 text-h2 text-emerald-900">{{ $pending }}</h4>
          </div>
        </a>
        <a class="bg-white border border-slate-200 p-6 rounded-xl flex flex-col gap-4 hover:shadow-md transition-shadow cursor-pointer"
          href="{{ route('admin.pengajuan.index', ['status' => 'diproses']) }}">
          <div class="flex justify-between items-start">
            <div class="p-3 bg-surface-container-high rounded-lg">
              <span class="material-symbols-outlined text-blue-700">hourglass_top</span>
            </div>
            <span class="text-blue-700 font-bold text-sm">Sedang berjalan</span>
          </div>
          <div>
            <p class="text-slate-500 font-label-sm text-label-sm">Diproses</p>
            <h4 class="text-3xl font-h2 text-h2 text-emerald-900">{{ $progress }}</h4>
          </div>
        </a>
        <a class="bg-white border border-slate-200 p-6 rounded-xl flex flex-col gap-4 hover:shadow-md transition-shadow cursor-pointer"
          href="{{ route('admin.pengajuan.index', ['status' => 'disetujui']) }}">
          <div class="flex justify-between items-start">
            <div class="p-3 bg-primary-fixed rounded-lg">
              <span class="material-symbols-outlined text-primary-container">task_alt</span>
            </div>
            <span class="text-emerald-700 font-bold text-sm">Siap ambil</span>
          </div>
          <div>
            <p class="text-slate-500 font-label-sm text-label-sm">Disetujui</p>
            <h4 class="text-3xl font-h2 text-h2 text-emerald-900">{{ $approved }}</h4>
          </div>
        </a>
        <div class="bg-white border border-slate-200 p-6 rounded-xl flex flex-col gap-4">
          <div class="flex justify-between items-start">
            <div class="p-3 bg-tertiary-fixed rounded-lg">
              <span class="material-symbols-outlined text-on-tertiary-fixed-variant">description</span>
            </div>
            <span class="text-slate-500 font-bold text-sm">Semua data</span>
          </div>
          <div>
            <p class="text-slate-500 font-label-sm text-label-sm">Total Permohonan</p>
            <h4 class="text-3xl font-h2 text-h2 text-emerald-900">{{ $all }}</h4>
          </div>
        </div>
      </div>
      <!-- Recent Activities -->
      <div class="mb-20">
        <div class="bg-white border border-slate-200 rounded-xl overflow-hidden">
          <div class="px-6 py-4 border-b border-slate-100 flex justify-between items-center bg-slate-50/50">
            <h3 class="text-lg font-bold text-emerald-900">Recent Activities</h3>
            <a class="text-sm font-semibold text-primary hover:underline"
              href="{{ route('admin.activity-logs.index') }}">Lihat Semua</a>
          </div>
          <div class="divide-y divide-slate-100">
            @forelse($recentActivities as $activity)
              @php
                $status = $activity->metadata['status'] ?? null;
                $statusMeta = [
                  'menunggu' => ['label' => 'Menunggu', 'class' => 'bg-red-50 text-red-700 border-red-100'],
                  'diproses' => ['label' => 'Diproses', 'class' => 'bg-blue-50 text-blue-700 border-blue-100'],
                  'disetujui' => ['label' => 'Disetujui', 'class' => 'bg-emerald-50 text-emerald-700 border-emerald-100'],
                  'ditolak' => ['label' => 'Ditolak', 'class' => 'bg-red-100 text-red-700 border-red-200'],
                ][$status] ?? null;
                $initials = collect(explode(' ', $activity->title))
                  ->filter()
                  ->take(2)
                  ->map(fn($part) => strtoupper(substr($part, 0, 1)))
                  ->join('');
              @endphp
              <div class="p-6 hover:bg-slate-50 transition-colors">
                <div class="flex gap-4">
                  <div
                    class="w-10 h-10 rounded-xl bg-primary-fixed-dim flex items-center justify-center font-bold text-primary shrink-0">
                    {{ $initials ?: 'AL' }}
                  </div>
                  <div class="flex-1 min-w-0">
                    <div class="flex flex-col gap-1 sm:flex-row sm:justify-between sm:items-start">
                      <p class="font-bold text-emerald-900 break-words">{{ $activity->title }}</p>
                      <span
                        class="text-xs text-slate-400 whitespace-nowrap">{{ $activity->created_at->diffForHumans() }}</span>
                    </div>
                    <p class="text-sm text-slate-600 break-words">{{ $activity->description }}</p>
                    <div class="mt-2 flex flex-wrap gap-2">
                      @if($statusMeta)
                        <span
                          class="text-xs font-bold px-3 py-1 rounded-full border {{ $statusMeta['class'] }}">{{ $statusMeta['label'] }}</span>
                      @endif
                      @if($activity->pengajuan_surat_id)
                        <a class="text-xs font-bold text-primary bg-primary-fixed px-3 py-1 rounded-full hover:bg-primary-fixed-dim"
                          href="{{ route('admin.pengajuan.index', ['search' => $activity->pengajuanSurat?->nik]) }}">Lihat
                          Permohonan</a>
                      @endif
                    </div>
                  </div>
                </div>
              </div>
            @empty
              <div class="p-10 text-center">
                <div class="mx-auto mb-3 flex h-12 w-12 items-center justify-center rounded-xl bg-surface-container">
                  <span class="material-symbols-outlined text-slate-500">history</span>
                </div>
                <p class="font-bold text-emerald-900">Belum ada aktivitas</p>
                <p class="mt-1 text-sm text-slate-500">Aktivitas pengajuan dan perubahan status akan tampil di sini.</p>
              </div>
            @endforelse
          </div>
        </div>
      </div>
    </main>
  </div>
  <!-- BottomNavBar (Mobile Only) -->
  <nav
    class="md:hidden fixed bottom-0 left-0 w-full bg-white border-t border-slate-200 shadow-lg flex justify-around items-center px-2 pb-safe py-2 z-50">
    <a class="flex flex-col items-center justify-center bg-emerald-50 text-emerald-900 rounded-xl px-4 py-1.5 transition-transform active:scale-90"
      href="#">
      <span class="material-symbols-outlined">home</span>
      <span class="font-public-sans text-[11px] font-semibold">Beranda</span>
    </a>
    <a class="flex flex-col items-center justify-center text-slate-500 px-4 py-1.5 hover:bg-slate-50 transition-transform active:scale-90"
      href="#">
      <span class="material-symbols-outlined">description</span>
      <span class="font-public-sans text-[11px] font-semibold">Layanan</span>
    </a>
    <a class="flex flex-col items-center justify-center text-slate-500 px-4 py-1.5 hover:bg-slate-50 transition-transform active:scale-90"
      href="#">
      <span class="material-symbols-outlined">account_circle</span>
      <span class="font-public-sans text-[11px] font-semibold">Status</span>
    </a>
  </nav>
  <!-- Footer -->
  <footer class="w-full py-8 bg-slate-50 border-t border-slate-200">
    <div class="w-full flex flex-col md:flex-row justify-between items-center px-8 gap-4">
      <div class="flex flex-col items-center md:items-start">
        <span class="font-bold text-slate-900 font-public-sans">Kopandakan I</span>
        <p class="font-public-sans text-xs text-slate-500">© 2026 Pemerintah Desa Kopandakan 1.</p>
      </div>
      <div class="flex gap-6">
        <a class="font-public-sans text-xs text-slate-500 hover:text-emerald-700 transition-opacity opacity-80 hover:opacity-100"
          href="#">Kontak</a>
        <a class="font-public-sans text-xs text-slate-500 hover:text-emerald-700 transition-opacity opacity-80 hover:opacity-100"
          href="#">Peta Desa</a>
        <a class="font-public-sans text-xs text-slate-500 hover:text-emerald-700 transition-opacity opacity-80 hover:opacity-100"
          href="#">Kebijakan Privasi</a>
      </div>
    </div>
  </footer>
</body>

</html>