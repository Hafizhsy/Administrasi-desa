<!DOCTYPE html>

<html lang="id"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Dashboard Kopandakan I</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@400;500;600;700;900&amp;family=Work+Sans:wght@500;600&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
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
                    "body-md": ["16px", {"lineHeight": "1.6", "letterSpacing": "0", "fontWeight": "400"}],
                    "button": ["16px", {"lineHeight": "1", "letterSpacing": "0.01em", "fontWeight": "600"}],
                    "body-lg": ["18px", {"lineHeight": "1.6", "letterSpacing": "0", "fontWeight": "400"}],
                    "h2": ["32px", {"lineHeight": "1.3", "letterSpacing": "-0.01em", "fontWeight": "600"}],
                    "h3": ["24px", {"lineHeight": "1.4", "letterSpacing": "0", "fontWeight": "600"}],
                    "h1": ["40px", {"lineHeight": "1.2", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                    "label-sm": ["14px", {"lineHeight": "1", "letterSpacing": "0.02em", "fontWeight": "500"}]
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
            font-family: 'Public Sans', sans-serif;
            background-color: #f8f9ff;
        }
        .pb-safe {
            padding-bottom: env(safe-area-inset-bottom);
        }
    </style>
<style>
    body {
      min-height: max(884px, 100dvh);
    }
  </style>
  </head>
<body class="bg-surface text-on-surface">
<!-- TopAppBar -->
<header class="fixed top-0 w-full z-50 bg-white border-b border-slate-200 flex justify-between items-center px-4 h-16 w-full">
<div class="flex items-center gap-3">
<div class="w-10 h-10 rounded-full bg-primary-fixed flex items-center justify-center overflow-hidden">
<img alt="Village Emblem" class="w-full h-full object-cover" data-alt="Official village emblem of Kopandakan I featuring traditional motifs and local symbols in gold and green tones" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAJAGpMWIrQ5mOjPhnNuwbIMn-uo3FIOX8DtcfDrpyrSU9UdiKLHPZU00rEKHmF5Uej_KVZoI6k3LY_JwdcZAMtfHLWYgvsnud9jovZ5yzW3gdlazsEuCnlVAQKhg2xC61AW0sJCR-tXK1juBQgJ020q_vk1OdCqJbFWav4zh-FsDH5MbsKj14yKPNAG3UL0UwdzM5Ser38DD9JK0UkVyJhu3wT0AV7OgZHwuOjQZ6CodHTZaiV7bfbFI1XacJz-HlhdbBut1TXnds"/>
</div>
<span class="font-public-sans font-bold text-lg text-emerald-900">Kopandakan I</span>
</div>
<button class="w-10 h-10 flex items-center justify-center rounded-full hover:bg-slate-100 transition-colors active:scale-95 duration-150">
<span class="material-symbols-outlined text-slate-600" data-icon="notifications">notifications</span>
</button>
<form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit" class="px-4 py-2 rounded-lg bg-red-50 text-red-700 font-semibold hover:bg-red-100">
        Logout
    </button>
</form>
</header>
<main class="pt-20 pb-24 md:pb-8 max-w-container-max mx-auto px-4 md:px-margin-desktop">
<!-- Welcome Hero Section -->
<section class="mb-stack-md">
<div class="relative overflow-hidden rounded-xl bg-primary p-8 text-on-primary">
<div class="relative z-10">
<h1 class="font-h1 text-h1 mb-2">Halo, {{ Auth::user()->name }}</h1>
<p class="font-body-lg text-body-lg opacity-90 max-w-xl">Selamat datang kembali di portal layanan digital Desa Kopandakan I. Urus kebutuhan administratif Anda lebih cepat dan transparan.</p>
</div>
<div class="absolute right-0 bottom-0 opacity-10 pointer-events-none">
<span class="material-symbols-outlined !text-[200px]" data-icon="account_balance">account_balance</span>
</div>
</div>
</section>
<div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter">
<!-- Left Column: Services & Status -->
<div class="lg:col-span-8 flex flex-col gap-stack-md">
<!-- Layanan Tersedia Section -->
<section>
<div class="flex items-center justify-between mb-4">
<h2 class="font-h2 text-h2 text-primary">Layanan Tersedia</h2>
<button class="text-on-primary-container font-button text-label-sm hover:underline">Lihat Semua</button>
</div>
<div class="grid grid-cols-2 md:grid-cols-4 gap-4">
<!-- Card: Nikah -->
<div class="bg-white p-6 rounded-xl border border-slate-200 hover:bg-slate-50 transition-colors cursor-pointer flex flex-col items-center text-center gap-3">
<div class="w-12 h-12 rounded-full bg-emerald-50 flex items-center justify-center">
<span class="material-symbols-outlined text-emerald-900" data-icon="favorite">favorite</span>
</div>
<span class="font-h3 text-label-sm font-bold text-slate-900">Surat Nikah</span>
</div>
<!-- Card: Usaha -->
<div class="bg-white p-6 rounded-xl border border-slate-200 hover:bg-slate-50 transition-colors cursor-pointer flex flex-col items-center text-center gap-3">
<div class="w-12 h-12 rounded-full bg-emerald-50 flex items-center justify-center">
<span class="material-symbols-outlined text-emerald-900" data-icon="store">store</span>
</div>
<span class="font-h3 text-label-sm font-bold text-slate-900">Izin Usaha</span>
</div>
<!-- Card: SKTM -->
<div class="bg-white p-6 rounded-xl border border-slate-200 hover:bg-slate-50 transition-colors cursor-pointer flex flex-col items-center text-center gap-3">
<div class="w-12 h-12 rounded-full bg-emerald-50 flex items-center justify-center">
<span class="material-symbols-outlined text-emerald-900" data-icon="assignment_ind">assignment_ind</span>
</div>
<span class="font-h3 text-label-sm font-bold text-slate-900">SKTM</span>
</div>
<!-- Card: PBB -->
<div class="bg-white p-6 rounded-xl border border-slate-200 hover:bg-slate-50 transition-colors cursor-pointer flex flex-col items-center text-center gap-3">
<div class="w-12 h-12 rounded-full bg-emerald-50 flex items-center justify-center">
<span class="material-symbols-outlined text-emerald-900" data-icon="payments">payments</span>
</div>
<span class="font-h3 text-label-sm font-bold text-slate-900">PBB Desa</span>
</div>
</div>
</section>
<!-- Status Permohonan Section -->
<section>
<h2 class="font-h2 text-h2 text-primary mb-4">Status Permohonan Terbaru</h2>
<div class="bg-white rounded-xl border border-slate-200 overflow-hidden">
<div class="divide-y divide-slate-100">
<!-- List Item 1 -->
<div class="p-4 flex items-center justify-between hover:bg-slate-50 transition-colors">
<div class="flex items-center gap-4">
<div class="w-10 h-10 rounded-lg bg-surface-container flex items-center justify-center">
<span class="material-symbols-outlined text-on-surface-variant" data-icon="description">description</span>
</div>
<div>
<h4 class="font-body-md font-semibold text-slate-900">Permohonan SKTM</h4>
<p class="text-label-sm text-slate-500">24 Okt 2024 • ID: 10293</p>
</div>
</div>
<span class="px-3 py-1 rounded-full text-xs font-bold bg-amber-100 text-amber-700">Diproses</span>
</div>
<!-- List Item 2 -->
<div class="p-4 flex items-center justify-between hover:bg-slate-50 transition-colors">
<div class="flex items-center gap-4">
<div class="w-10 h-10 rounded-lg bg-surface-container flex items-center justify-center">
<span class="material-symbols-outlined text-on-surface-variant" data-icon="description">description</span>
</div>
<div>
<h4 class="font-body-md font-semibold text-slate-900">Izin Usaha Mikro</h4>
<p class="text-label-sm text-slate-500">20 Okt 2024 • ID: 10245</p>
</div>
</div>
<span class="px-3 py-1 rounded-full text-xs font-bold bg-emerald-100 text-emerald-700">Selesai</span>
</div>
<!-- List Item 3 -->
<div class="p-4 flex items-center justify-between hover:bg-slate-50 transition-colors">
<div class="flex items-center gap-4">
<div class="w-10 h-10 rounded-lg bg-surface-container flex items-center justify-center">
<span class="material-symbols-outlined text-on-surface-variant" data-icon="description">description</span>
</div>
<div>
<h4 class="font-body-md font-semibold text-slate-900">Surat Keterangan Nikah</h4>
<p class="text-label-sm text-slate-500">18 Okt 2024 • ID: 10188</p>
</div>
</div>
<span class="px-3 py-1 rounded-full text-xs font-bold bg-slate-100 text-slate-600">Pending</span>
</div>
</div>
</div>
</section>
</div>
<!-- Right Column: Info & Action -->
<div class="lg:col-span-4 flex flex-col gap-stack-md">
<!-- Action Card -->
<div class="bg-white p-6 rounded-xl border border-slate-200">
<h3 class="font-h3 text-h3 text-primary mb-4">Butuh bantuan cepat?</h3>
<p class="font-body-md text-slate-600 mb-6">Ajukan dokumen Anda secara digital tanpa perlu mengantri di balai desa.</p>
<button class="w-full py-4 bg-primary text-on-primary rounded-xl font-button text-button flex items-center justify-center gap-2 active:scale-[0.98] transition-transform">
<span class="material-symbols-outlined" data-icon="add">add</span>
                        Ajukan Surat Baru
                    </button>
</div>
<!-- Info Card -->
<div class="relative rounded-xl bg-white border border-slate-200 overflow-hidden aspect-video">
<img alt="Village Event" class="w-full h-full object-cover" data-alt="Panoramic view of Kopandakan I village square with community members gathering for a traditional ceremony under a clear blue sky" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDRVwFyd9iCcZLiRogVy1NIgMVVwPSqbiDBaGRrQlsC3nJCadCgUxc-VA5Ho8Q3eEGSGhl3eXqhc3rVbIREXGxAhKttiAdfXZ2A9j94Org3NlK8kefKlhwDjhJiosRoTTTAJuEyo1BBddVwzhCw-_gGvr_fZWuIaWNCJK7GARk6idevveVukP9bCu8f5Mww39eZ3q6DTmc1TpXpJC6oA879gQoR-hOGy3tLxoGN2MrqJrkPxo24PptKa9RK0bi8j_TBGSa3-NkH3l8"/>
<div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent flex flex-col justify-end p-4">
<span class="text-white text-xs font-bold uppercase tracking-wider mb-1">Berita Desa</span>
<h4 class="text-white font-bold leading-tight">Gotong Royong Perbaikan Irigasi Sawah Selatan</h4>
</div>
</div>
<!-- Peta Desa Card -->
<div class="bg-slate-50 p-6 rounded-xl border border-slate-200 border-dashed">
<div class="flex items-center gap-3 mb-2">
<span class="material-symbols-outlined text-emerald-700" data-icon="map">map</span>
<span class="font-bold text-slate-900">Cari Lokasi Layanan</span>
</div>
<p class="text-label-sm text-slate-500 mb-4">Temukan titik-titik penting di Kopandakan I dengan peta digital.</p>
<button class="w-full py-2 bg-white border border-slate-300 rounded-lg text-slate-700 font-semibold hover:bg-slate-100 transition-colors">Buka Peta</button>
</div>
</div>
</div>
</main>
<!-- Floating Action Button (Mobile Only) -->
<button class="md:hidden fixed bottom-24 right-4 w-14 h-14 bg-primary text-on-primary rounded-full shadow-lg flex items-center justify-center z-40 active:scale-90 transition-transform">
<span class="material-symbols-outlined !text-3xl" data-icon="add">add</span>
</button>
<!-- BottomNavBar -->
<nav class="md:hidden fixed bottom-0 left-0 w-full bg-white border-t border-slate-200 flex justify-around items-center px-2 pb-safe py-2 z-50 shadow-lg">
<a class="flex flex-col items-center justify-center bg-emerald-50 text-emerald-900 rounded-xl px-4 py-1.5 active:scale-90 transition-transform" href="#">
<span class="material-symbols-outlined" data-icon="home">home</span>
<span class="font-public-sans text-[11px] font-semibold">Beranda</span>
</a>
<a class="flex flex-col items-center justify-center text-slate-500 px-4 py-1.5 active:scale-90 transition-transform hover:bg-slate-50" href="#">
<span class="material-symbols-outlined" data-icon="description">description</span>
<span class="font-public-sans text-[11px] font-semibold">Layanan</span>
</a>
<a class="flex flex-col items-center justify-center text-slate-500 px-4 py-1.5 active:scale-90 transition-transform hover:bg-slate-50" href="#">
<span class="material-symbols-outlined" data-icon="account_circle">account_circle</span>
<span class="font-public-sans text-[11px] font-semibold">Status</span>
</a>
</nav>
<!-- Footer -->
<footer class="w-full py-8 bg-slate-50 border-t border-slate-200 mt-stack-lg hidden md:block">
<div class="max-w-container-max mx-auto px-8 flex flex-col md:flex-row justify-between items-center gap-4">
<p class="font-public-sans text-xs text-slate-500">© 2024 Pemerintah Desa Kopandakan 1.</p>
<div class="flex gap-6">
<a class="font-public-sans text-xs text-slate-500 hover:text-emerald-700" href="#">Kontak</a>
<a class="font-public-sans text-xs text-slate-500 hover:text-emerald-700" href="#">Peta Desa</a>
<a class="font-public-sans text-xs text-slate-500 hover:text-emerald-700" href="#">Kebijakan Privasi</a>
</div>
</div>
</footer>
</body></html>