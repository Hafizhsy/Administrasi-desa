<!DOCTYPE html>

<html class="light" lang="id">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Admin Login - Kopandakan I</title>
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

        body {
            background-color: #f8f9ff;
        }
    </style>
    <style>
        body {
            min-height: max(884px, 100dvh);
        }
    </style>
</head>

<body class="font-body-md text-on-surface selection:bg-primary-fixed-dim selection:text-primary">
    <div class="min-h-screen flex flex-col md:flex-row">
        <div
            class="hidden md:flex md:w-1/2 lg:w-3/5 bg-primary relative overflow-hidden items-center justify-center p-margin-desktop">
            <div class="absolute inset-0 opacity-20">
                <img alt="Official village building" class="w-full h-full object-cover"
                    data-alt="Modern architectural detail of a government building with clean lines, glass windows, and lush green tropical foliage during daylight"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuCLkMAjg3MI3l8s1Y1JmonoBIYAyeRRt1bR3osuLGviP_do2fPJNHxhbvALGzmw7rnwY9O1RBUij2A8DpD9NIeBQAZBMGrODFioU3txQhMAFcuRJShF8wfpa_vsBeCaOc3YhPMZSL7CEjCHQdUS8lERBCUBELtldsEgSbT0GUGaK5quZ3LZd7TBYtd-9HYPb64NjfF2uOIiegD2j-ffDPtnVUsKGqJ6CDxlsDCV2hiCIVyScjlFDpMLqHrDreeDqhjOySk8oF-aaTI" />
            </div>
            <div class="absolute inset-0 bg-gradient-to-br from-primary via-primary/80 to-transparent"></div>
            <div class="relative z-10 max-w-lg">
                <div class="mb-stack-md flex items-center gap-4">
                    <div class="w-16 h-16 bg-white rounded-xl flex items-center justify-center p-2 shadow-lg">
                        <img alt="Village Seal" class="w-full h-full object-contain"
                            data-alt="Official heraldic seal of Kopandakan I village featuring local cultural symbols in gold and green on a white circular crest"
                            src="https://tse2.mm.bing.net/th/id/OIP.e3qAPtdwr3_s22nmrHur3AHaIo?rs=1&pid=ImgDetMain&o=7&rm=3" />
                    </div>
                    <div>
                        <h1 class="font-h1 text-h1 text-white leading-tight">Sistem Informasi<br />Administrasi Desa
                        </h1>
                        <p class="font-body-lg text-body-lg text-primary-fixed-dim mt-2">Pemerintah Desa Kopandakan I
                        </p>
                    </div>
                </div>
                <div class="space-y-gutter">
                    <div class="flex items-start gap-4">
                        <span class="material-symbols-outlined text-tertiary-fixed text-3xl">verified_user</span>
                        <p class="text-white/80 font-body-md">Akses terbatas bagi perangkat desa dan pejabat berwenang
                            untuk pengelolaan data kependudukan.</p>
                    </div>
                    <div class="flex items-start gap-4">
                        <span class="material-symbols-outlined text-tertiary-fixed text-3xl">policy</span>
                        <p class="text-white/80 font-body-md">Seluruh aktivitas dalam portal ini diawasi dan dicatat
                            untuk menjaga integritas data publik.</p>
                    </div>
                </div>
            </div>
        </div>
        <div
            class="flex-1 flex flex-col bg-surface-container-lowest p-margin-mobile md:p-margin-desktop items-center justify-center">
            <div class="w-full max-w-[440px]">
                <div class="md:hidden flex flex-col items-center mb-stack-lg">
                    <div class="w-12 h-12 bg-primary rounded-lg flex items-center justify-center p-1.5 mb-4 shadow-sm">
                        <img alt="Mobile Logo"
                            data-alt="Simplified minimalist version of the village emblem for mobile display"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuD3Awi_H_sK3MxbskjBFsET49KKhbh8R03oG69Jr9zOecpEdLOwxbPPWcGMNE64VfRUHytX8SUwbxs1-9DYZGLxf_KCMxDHCpI_urTjAqhoB0dY8TruYzmroyttlPQP10ZSD__xP7mnzhjcb7NtJl_n6ElXHONio3t-mimzsPhvHHW9bXoo7tzRoKroCKgQv_JscbFHLTW7Xl83klr2aIlQk2UIe5yjxZV6Dj2eJvo7nREIx8oOzH0qlZZyaLGca_WOHFI5e93BbKc" />
                    </div>
                    <h2 class="font-h2 text-h2 text-primary">Login Admin</h2>
                </div>
                <div class="hidden md:block mb-stack-lg">
                    <h2 class="font-h2 text-h2 text-primary">Selamat Datang</h2>
                    <p class="text-on-surface-variant font-body-md">Silakan masuk menggunakan kredensial resmi Anda.</p>
                </div>
                <form method="POST" action="{{ route('admin.login.store') }}" class="space-y-stack-md">
                    @csrf
                    <div class="space-y-2">
                        <label class="block font-label-sm text-label-sm text-on-surface-variant px-1" for="email">Email
                            Admin</label>
                        <div class="relative group">
                            <div
                                class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-outline">
                                <span class="material-symbols-outlined text-xl">badge</span>
                            </div>
                            <input
                                class="block w-full h-[56px] pl-12 pr-4 bg-surface-bright border border-outline-variant rounded-xl focus:ring-2 focus:ring-primary-fixed-dim focus:border-primary-container outline-none transition-all placeholder:text-outline-variant text-on-surface"
                                id="email" name="email" value="{{ old('email') }}" placeholder="Masukkan email admin"
                                type="email" required autofocus />
                            @error('email')
                                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="space-y-2">
                        <label class="block font-label-sm text-label-sm text-on-surface-variant px-1"
                            for="password">Kata Sandi</label>
                        <div class="relative group">
                            <div
                                class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-outline">
                                <span class="material-symbols-outlined text-xl">lock</span>
                            </div>
                            <input <input
                                class="block w-full h-[56px] pl-12 pr-12 bg-surface-bright border border-outline-variant rounded-xl focus:ring-2 focus:ring-primary-fixed-dim focus:border-primary-container outline-none transition-all placeholder:text-outline-variant text-on-surface"
                                id="admin_password" name="password" placeholder="••••••••" type="password" required />
                            @error('password')
                                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                            @enderror
                            <button id="toggleAdminPassword"
                                class="absolute inset-y-0 right-0 pr-4 flex items-center text-outline hover:text-primary transition-colors"
                                type="button">
                                <span id="adminEyeIcon" class="material-symbols-outlined text-xl">visibility</span>
                            </button>
                        </div>
                    </div>
                    <div class="flex items-center justify-between py-2">
                        <label class="flex items-center gap-2 cursor-pointer group">
                            <input class="w-5 h-5 rounded border-outline-variant text-primary focus:ring-primary/20"
                                type="checkbox" name="remember" />
                            <span
                                class="text-label-sm font-label-sm text-on-surface-variant group-hover:text-primary">Ingat
                                Saya</span>
                        </label>
                        <a class="text-label-sm font-label-sm text-tertiary-container hover:text-on-tertiary-container transition-colors"
                            href="{{ route('password.request') }}">Lupa Sandi?</a>
                    </div>
                    <button
                        class="w-full h-[56px] bg-primary text-white font-button text-button rounded-xl flex items-center justify-center gap-2 hover:bg-primary-container active:scale-[0.98] transition-all shadow-md hover:shadow-lg"
                        type="submit">
                        <span class="material-symbols-outlined" data-weight="fill">login</span>
                        Login Admin
                    </button>
                </form>
                <div class="mt-stack-lg border-t border-outline-variant/30 pt-stack-md flex flex-col items-center">
                    <a class="flex items-center gap-2 text-on-surface-variant hover:text-primary transition-colors font-label-sm text-label-sm group"
                        href="{{ route('welcome') }}">
                        <span
                            class="material-symbols-outlined text-xl group-hover:-translate-x-1 transition-transform">arrow_back</span>
                        Kembali ke Portal Publik
                    </a>
                </div>
            </div>
            <footer class="mt-auto pt-stack-lg w-full max-w-[440px]">
                <div class="text-center">
                    <p class="font-body-md text-[12px] text-outline">
                        &copy 2026 Pemerintah Desa Kopandakan I.<br />
                        Dikelola oleh Divisi Teknologi Informasi &amp; Komunikasi.
                    </p>
                </div>
            </footer>
        </div>
    </div>
    <script>
        const toggleAdminPassword = document.getElementById('toggleAdminPassword');
        const adminPassword = document.getElementById('admin_password');
        const adminEyeIcon = document.getElementById('adminEyeIcon');

        toggleAdminPassword.addEventListener('click', function () {
            const type = adminPassword.getAttribute('type') === 'password' ? 'text' : 'password';

            adminPassword.setAttribute('type', type);
            adminEyeIcon.textContent = type === 'password' ? 'visibility' : 'visibility_off';
        });
    </script>
</body>

</html>