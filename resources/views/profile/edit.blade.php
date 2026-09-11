<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Edit Profil - Kopandakan I</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@400;500;600;700;900&amp;family=Work+Sans:wght@500;600&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
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
                        "primary-fixed": "#beedd9",
                        "primary-fixed-dim": "#a3d0be",
                        "outline-variant": "#c0c8c3",
                        tertiary: "#735c00",
                    },
                    borderRadius: {
                        xl: "0.5rem",
                    },
                    fontFamily: {
                        button: ["Work Sans"],
                    },
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
            min-height: max(884px, 100dvh);
        }

        .pb-safe {
            padding-bottom: env(safe-area-inset-bottom);
        }
    </style>
</head>

<body class="bg-surface text-on-surface">
    <header
        class="fixed top-0 w-full z-50 bg-white border-b border-slate-200 flex justify-between items-center px-4 h-16">
        <div class="flex items-center gap-3">
            <div class="w-10 h-10 rounded-full bg-primary-fixed flex items-center justify-center overflow-hidden">
                <img alt="Village Emblem" class="w-full h-full object-cover"
                    src="https://tse2.mm.bing.net/th/id/OIP.e3qAPtdwr3_s22nmrHur3AHaIo?rs=1&pid=ImgDetMain&o=7&rm=3" />
            </div>
            <span class="font-bold text-lg text-emerald-900">Kopandakan I</span>
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

    <main class="pt-20 pb-24 md:pb-10 max-w-6xl mx-auto px-4 md:px-8">
        <div class="mb-8 flex flex-col gap-4 md:flex-row md:items-end md:justify-between">
            <div>
                <a href="{{ route('dashboard') }}" class="inline-flex items-center gap-2 text-sm font-semibold text-tertiary hover:underline mb-4">
                    <span class="material-symbols-outlined text-base">arrow_back</span>
                    Kembali ke Dashboard
                </a>
                <h1 class="text-4xl font-bold text-primary leading-tight">Edit Profil</h1>
                <p class="mt-2 text-base text-secondary">Perbarui data akun dan kata sandi Anda.</p>
            </div>
            <div class="inline-flex items-center gap-3 rounded-xl border border-slate-200 bg-white px-4 py-3">
                <span class="material-symbols-outlined text-emerald-700">verified_user</span>
                <div>
                    <p class="text-xs font-semibold text-slate-500">Status Akun</p>
                    <p class="text-sm font-bold text-emerald-900">{{ $user->isActive() ? 'Aktif' : 'Menunggu Verifikasi' }}</p>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-6">
            <section class="lg:col-span-7 rounded-xl border border-slate-200 bg-white p-5 md:p-7">
                <div class="mb-6 flex items-center gap-3">
                    <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-primary-fixed">
                        <span class="material-symbols-outlined text-primary">person</span>
                    </div>
                    <div>
                        <h2 class="text-xl font-bold text-primary">Data Profil</h2>
                        <p class="text-sm text-slate-500">Pastikan data sesuai identitas warga.</p>
                    </div>
                </div>

                @if (session('status') === 'profile-updated')
                    <div class="mb-5 rounded-xl border border-emerald-100 bg-emerald-50 p-4 text-sm font-semibold text-emerald-800">
                        Profil berhasil diperbarui.
                    </div>
                @endif

                <form method="POST" action="{{ route('profile.update') }}" class="space-y-5">
                    @csrf
                    @method('patch')

                    <div>
                        <label for="name" class="mb-2 block text-sm font-semibold text-on-surface-variant">Nama Lengkap</label>
                        <input id="name" name="name" type="text" value="{{ old('name', $user->name) }}" required
                            class="h-12 w-full rounded-xl border border-outline-variant bg-surface-container-lowest px-4 focus:border-transparent focus:ring-2 focus:ring-primary-fixed-dim" />
                        @error('name')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="email" class="mb-2 block text-sm font-semibold text-on-surface-variant">Email</label>
                        <input id="email" name="email" type="email" value="{{ old('email', $user->email) }}" required
                            class="h-12 w-full rounded-xl border border-outline-variant bg-surface-container-lowest px-4 focus:border-transparent focus:ring-2 focus:ring-primary-fixed-dim" />
                        @error('email')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="nik" class="mb-2 block text-sm font-semibold text-on-surface-variant">NIK</label>
                        <input id="nik" name="nik" type="text" inputmode="numeric" minlength="16" maxlength="16" pattern="[0-9]*"
                            value="{{ old('nik', $user->nik) }}" required
                            class="h-12 w-full rounded-xl border border-outline-variant bg-surface-container-lowest px-4 focus:border-transparent focus:ring-2 focus:ring-primary-fixed-dim" />
                        @error('nik')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="alamat" class="mb-2 block text-sm font-semibold text-on-surface-variant">Alamat</label>
                        <textarea id="alamat" name="alamat" rows="3" required
                            class="w-full rounded-xl border border-outline-variant bg-surface-container-lowest px-4 py-3 focus:border-transparent focus:ring-2 focus:ring-primary-fixed-dim">{{ old('alamat', $user->alamat) }}</textarea>
                        @error('alamat')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <button type="submit"
                        class="inline-flex h-12 w-full items-center justify-center gap-2 rounded-xl bg-primary px-5 font-button font-bold text-on-primary hover:bg-emerald-900 md:w-auto">
                        <span class="material-symbols-outlined">save</span>
                        Simpan Profil
                    </button>
                </form>
            </section>

            <section class="lg:col-span-5 rounded-xl border border-slate-200 bg-white p-5 md:p-7">
                <div class="mb-6 flex items-center gap-3">
                    <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-amber-100">
                        <span class="material-symbols-outlined text-tertiary">lock</span>
                    </div>
                    <div>
                        <h2 class="text-xl font-bold text-primary">Ganti Password</h2>
                        <p class="text-sm text-slate-500">Gunakan password baru yang mudah diingat tetapi sulit ditebak.</p>
                    </div>
                </div>

                @if (session('status') === 'password-updated')
                    <div class="mb-5 rounded-xl border border-emerald-100 bg-emerald-50 p-4 text-sm font-semibold text-emerald-800">
                        Password berhasil diperbarui.
                    </div>
                @endif

                <form method="POST" action="{{ route('password.update') }}" class="space-y-5">
                    @csrf
                    @method('put')

                    <div>
                        <label for="update_password_current_password" class="mb-2 block text-sm font-semibold text-on-surface-variant">Password Saat Ini</label>
                        <div class="relative">
                            <input id="update_password_current_password" name="current_password" type="password" autocomplete="current-password"
                                class="h-12 w-full rounded-xl border border-outline-variant bg-surface-container-lowest px-4 pr-12 focus:border-transparent focus:ring-2 focus:ring-primary-fixed-dim" />
                            <button type="button" data-toggle-password="update_password_current_password"
                                class="absolute right-3 top-1/2 -translate-y-1/2 rounded-lg p-2 text-slate-500 hover:bg-slate-100 hover:text-primary"
                                aria-label="Tampilkan password saat ini">
                                <span class="material-symbols-outlined text-xl">visibility</span>
                            </button>
                        </div>
                        @foreach ($errors->updatePassword->get('current_password') as $message)
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @endforeach
                    </div>

                    <div>
                        <label for="update_password_password" class="mb-2 block text-sm font-semibold text-on-surface-variant">Password Baru</label>
                        <div class="relative">
                            <input id="update_password_password" name="password" type="password" autocomplete="new-password"
                                class="h-12 w-full rounded-xl border border-outline-variant bg-surface-container-lowest px-4 pr-12 focus:border-transparent focus:ring-2 focus:ring-primary-fixed-dim" />
                            <button type="button" data-toggle-password="update_password_password"
                                class="absolute right-3 top-1/2 -translate-y-1/2 rounded-lg p-2 text-slate-500 hover:bg-slate-100 hover:text-primary"
                                aria-label="Tampilkan password baru">
                                <span class="material-symbols-outlined text-xl">visibility</span>
                            </button>
                        </div>
                        @foreach ($errors->updatePassword->get('password') as $message)
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @endforeach
                    </div>

                    <div>
                        <label for="update_password_password_confirmation" class="mb-2 block text-sm font-semibold text-on-surface-variant">Konfirmasi Password Baru</label>
                        <div class="relative">
                            <input id="update_password_password_confirmation" name="password_confirmation" type="password" autocomplete="new-password"
                                class="h-12 w-full rounded-xl border border-outline-variant bg-surface-container-lowest px-4 pr-12 focus:border-transparent focus:ring-2 focus:ring-primary-fixed-dim" />
                            <button type="button" data-toggle-password="update_password_password_confirmation"
                                class="absolute right-3 top-1/2 -translate-y-1/2 rounded-lg p-2 text-slate-500 hover:bg-slate-100 hover:text-primary"
                                aria-label="Tampilkan konfirmasi password baru">
                                <span class="material-symbols-outlined text-xl">visibility</span>
                            </button>
                        </div>
                        @foreach ($errors->updatePassword->get('password_confirmation') as $message)
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @endforeach
                    </div>

                    <button type="submit"
                        class="inline-flex h-12 w-full items-center justify-center gap-2 rounded-xl bg-primary px-5 font-button font-bold text-on-primary hover:bg-emerald-900">
                        <span class="material-symbols-outlined">key</span>
                        Simpan Password
                    </button>
                </form>
            </section>
        </div>
    </main>

    <nav
        class="md:hidden fixed bottom-0 left-0 w-full bg-white border-t border-slate-200 flex justify-around items-center px-2 pb-safe py-2 z-50 shadow-lg">
        <a class="flex flex-col items-center justify-center text-slate-500 px-4 py-1.5 hover:bg-slate-50"
            href="{{ route('dashboard') }}">
            <span class="material-symbols-outlined">home</span>
            <span class="text-[11px] font-semibold">Beranda</span>
        </a>
        <a class="flex flex-col items-center justify-center text-slate-500 px-4 py-1.5 hover:bg-slate-50"
            href="{{ route('user.pengajuan.index') }}">
            <span class="material-symbols-outlined">description</span>
            <span class="text-[11px] font-semibold">Layanan</span>
        </a>
        <a class="flex flex-col items-center justify-center bg-emerald-50 text-emerald-900 rounded-xl px-4 py-1.5"
            href="{{ route('profile.edit') }}">
            <span class="material-symbols-outlined">account_circle</span>
            <span class="text-[11px] font-semibold">Profil</span>
        </a>
    </nav>
    <script>
        document.querySelectorAll('[data-toggle-password]').forEach((button) => {
            button.addEventListener('click', () => {
                const input = document.getElementById(button.dataset.togglePassword);
                const icon = button.querySelector('.material-symbols-outlined');
                const shouldShow = input.type === 'password';

                input.type = shouldShow ? 'text' : 'password';
                icon.textContent = shouldShow ? 'visibility_off' : 'visibility';
                button.setAttribute('aria-label', shouldShow ? 'Sembunyikan password' : 'Tampilkan password');
            });
        });
    </script>
</body>

</html>
