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
      <div class="mt-auto p-4 border-t border-slate-100">
        <p class="text-xs font-bold text-emerald-900">Kopandakan I</p>
      </div>
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
      <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10">
        <a class="bg-white border border-slate-200 p-6 rounded-xl flex flex-col gap-4 hover:shadow-md transition-shadow cursor-pointer"
          href="{{ route('admin.pengajuan.index', ['status' => 'menunggu']) }}">
          <div class="flex justify-between items-start">
            <div class="p-3 bg-error-container rounded-lg"><span
                class="material-symbols-outlined text-on-error-container">pending_actions</span></div><span
              class="text-error font-bold text-sm">+5 hari ini</span>
          </div>
          <div>
            <p class="text-slate-500 font-label-sm text-label-sm">Pending Requests</p>
            <h4 class="text-3xl font-h2 text-h2 text-emerald-900">{{ $pending }}</h4>
          </div>
        </a>
        <div class="bg-white border border-slate-200 p-6 rounded-xl flex flex-col gap-4">
          <div class="flex justify-between items-start">
            <div class="p-3 bg-primary-fixed rounded-lg">
              <span class="material-symbols-outlined text-primary-container">task_alt</span>
            </div>
            <span class="text-emerald-700 font-bold text-sm">Target tercapai</span>
          </div>
          <div>
            <p class="text-slate-500 font-label-sm text-label-sm">Processed Today</p>
            <h4 class="text-3xl font-h2 text-h2 text-emerald-900">{{ $today }}</h4>
          </div>
        </div>
        <div class="bg-white border border-slate-200 p-6 rounded-xl flex flex-col gap-4">
          <div class="flex justify-between items-start">
            <div class="p-3 bg-tertiary-fixed rounded-lg">
              <span class="material-symbols-outlined text-on-tertiary-fixed-variant">description</span>
            </div>
            <span class="text-slate-500 font-bold text-sm">Bulan ini</span>
          </div>
          <div>
            <p class="text-slate-500 font-label-sm text-label-sm">Total Letters Issued</p>
            <h4 class="text-3xl font-h2 text-h2 text-emerald-900">{{ $all }}</h4>
          </div>
        </div>
      </div>
      <!-- Main Layout Bento -->
      <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-20">
        <!-- Recent Activities (Feed) -->
        <div class="lg:col-span-2 bg-white border border-slate-200 rounded-xl overflow-hidden">
          <div class="px-6 py-4 border-b border-slate-100 flex justify-between items-center bg-slate-50/50">
            <h3 class="text-lg font-bold text-emerald-900">Recent Activities</h3>
            <a class="text-sm font-semibold text-primary hover:underline" href="{{ route('admin.pengajuan.index') }}">Lihat Semua</a>
          </div>
          <div class="divide-y divide-slate-100">
            <!-- Activity Item -->
            <div class="p-6 hover:bg-slate-50 transition-colors">
              <div class="flex gap-4">
                <img alt="User" class="w-10 h-10 rounded-full object-cover"
                  data-alt="Portrait of a young male citizen in casual wear, neutral background"
                  src="https://lh3.googleusercontent.com/aida-public/AB6AXuAAN8e_FE2CfzVUFmCrvStEg8opfgQbfDWLv2Ny3bVsd_TBKn2H7Pv3FJWCOpihD6NVKjy4YptqbmwCoANXO-E85rw2qHc5O-8madl_X8NuLA03H3dkhNBSoDNqA9kgdvTKn-hiYbjluvVoFb4zJrwAwh_rOXtlc6XnEVHHv-LQ8mHic5AaGe3Wp58QmA_echUiN1vozD6xjZRD_QtfHGUl-7PAW7NZF02px-979-39iAyrTWBNR4YEvOE6AV6eNHdSz_aio9Jm-x8" />
                <div class="flex-1">
                  <div class="flex justify-between items-start">
                    <p class="font-bold text-emerald-900">Andi Saputra</p>
                    <span class="text-xs text-slate-400">10 Menit yang lalu</span>
                  </div>
                  <p class="text-sm text-slate-600">Mengajukan permohonan <span class="font-semibold">Surat Keterangan
                      Usaha</span></p>
                  <div class="mt-2 flex gap-2">
                    <button class="text-xs font-bold text-primary bg-primary-fixed px-3 py-1 rounded-full"
                      onclick="window.location.href='#'">Review</button>
                    <button class="text-xs font-bold text-slate-500 hover:text-slate-700">Abaikan</button>
                  </div>
                </div>
              </div>
            </div>
            <!-- Activity Item -->
            <div class="p-6 hover:bg-slate-50 transition-colors">
              <div class="flex gap-4">
                <img alt="User" class="w-10 h-10 rounded-full object-cover"
                  data-alt="Portrait of a friendly middle-aged woman, smiling, bright natural light"
                  src="https://lh3.googleusercontent.com/aida-public/AB6AXuClfz6aRCliJU6tSOvo7GhhYL_8ijTPDcDTv84oync-x_H9F5ZuGvhaRjsC6mPGrJmo52b4ssC9wNeG1D0pzmbaEMc_QvDcZ9w9peg-cscZhBK1r5Q7vz37bgIcmTzn0V1nVJmUXNjA5LgZds0I7tb5D8Yov8GMicTt0rQXzMtpxsXz8GeDBcVmRhweJrR_dIH2xx6xvw2WwONSPA9s0UwZNZ6iW-BTDFoRVqok5vYjzgreHx5WQ3PwKVmEcqcwun3FMLzfqVF0Q-0" />
                <div class="flex-1">
                  <div class="flex justify-between items-start">
                    <p class="font-bold text-emerald-900">Siti Rahayu</p>
                    <span class="text-xs text-slate-400">2 Jam yang lalu</span>
                  </div>
                  <p class="text-sm text-slate-600">Mengajukan permohonan <span class="font-semibold">Surat Keterangan
                      Domisili</span></p>
                  <div class="mt-2">
                    <span
                      class="text-xs font-bold text-emerald-600 bg-emerald-50 px-3 py-1 rounded-full border border-emerald-100">Sedang
                      Diproses</span>
                  </div>
                </div>
              </div>
            </div>
            <!-- Activity Item -->
            <div class="p-6 hover:bg-slate-50 transition-colors">
              <div class="flex gap-4">
                <img alt="User" class="w-10 h-10 rounded-full object-cover"
                  data-alt="Portrait of a professional man in spectacles, clean studio lighting"
                  src="https://lh3.googleusercontent.com/aida-public/AB6AXuBThG5ORJeC2H9v2XmXqWA3ZOQVxXSP1JP4vMI_uOBzIoUKI0vnsKGZ_IUg0CEeqfygyF28UbMhYpaKK5SMTE3htwWO8dZqskdyfkCr_81v37vN34UeC6_JBCf2g5sCxhPFl-sQmZHeDgCI8JW_snHCG3SNc4mRbmJBQea2gjYxa85X5B9c0Wf4UkIc6BXxZy20dUAZxr4kK2XDOSLaBTKIhNyJwvawJqH5zApQO4_CdkF77LBwizlhlxMC6PZgXmf7SOYQOL76Ju8" />
                <div class="flex-1">
                  <div class="flex justify-between items-start">
                    <p class="font-bold text-emerald-900">Budi Santoso</p>
                    <span class="text-xs text-slate-400">4 Jam yang lalu</span>
                  </div>
                  <p class="text-sm text-slate-600">Mengajukan permohonan <span class="font-semibold">Surat Pengantar
                      Nikah</span></p>
                  <div class="mt-2 flex gap-2">
                    <button class="text-xs font-bold text-primary bg-primary-fixed px-3 py-1 rounded-full"
                      onclick="window.location.href='#'">Review</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Quick Actions / Mini Calendar -->
        <div class="flex flex-col gap-6">
          <div class="bg-emerald-900 text-white p-6 rounded-xl shadow-lg relative overflow-hidden">
            <div class="relative z-10">
              <h3 class="font-bold mb-2">Informasi Desa</h3>
              <p class="text-emerald-100 text-sm mb-4">Agenda rapat koordinasi perangkat desa dijadwalkan besok pukul
                09:00 WIB.</p>
              <button class="w-full bg-white text-emerald-900 font-bold py-2 rounded-lg text-sm">Lihat Kalender</button>
            </div>
            <div class="absolute -right-4 -bottom-4 opacity-10">
              <span class="material-symbols-outlined text-9xl">event_note</span>
            </div>
          </div>
          <div class="bg-white border border-slate-200 p-6 rounded-xl">
            <h3 class="font-bold text-emerald-900 mb-4">Statistik Bulanan</h3>
            <div class="space-y-4">
              <div>
                <div class="flex justify-between text-xs font-bold mb-1">
                  <span class="text-slate-600">Penyelesaian Surat</span>
                  <span class="text-emerald-600">85%</span>
                </div>
                <div class="w-full bg-slate-100 h-2 rounded-full overflow-hidden">
                  <div class="bg-emerald-500 h-full w-[85%] rounded-full"></div>
                </div>
              </div>
              <div>
                <div class="flex justify-between text-xs font-bold mb-1">
                  <span class="text-slate-600">Kepuasan Warga</span>
                  <span class="text-emerald-600">92%</span>
                </div>
                <div class="w-full bg-slate-100 h-2 rounded-full overflow-hidden">
                  <div class="bg-emerald-500 h-full w-[92%] rounded-full"></div>
                </div>
              </div>
              <div>
                <div class="flex justify-between text-xs font-bold mb-1">
                  <span class="text-slate-600">Efisiensi Admin</span>
                  <span class="text-emerald-600">78%</span>
                </div>
                <div class="w-full bg-slate-100 h-2 rounded-full overflow-hidden">
                  <div class="bg-emerald-500 h-full w-[78%] rounded-full"></div>
                </div>
              </div>
            </div>
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
