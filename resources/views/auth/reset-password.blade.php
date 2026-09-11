<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Reset Password - Kopandakan I</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@400;500;600;700;900&amp;family=Work+Sans:wght@500;600&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        body {
            background-color: #f8f9ff;
            color: #0b1c30;
            font-family: 'Public Sans', sans-serif;
            min-height: max(884px, 100dvh);
        }
    </style>
</head>

<body class="min-h-screen flex flex-col">
    <main class="flex-grow flex items-center justify-center px-4 py-12">
        <section class="w-full max-w-md rounded-xl border border-slate-200 bg-white p-8 shadow-sm">
            <div class="mb-8">
                <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-xl bg-[#beedd9]">
                    <span class="material-symbols-outlined text-[#00241a]">key</span>
                </div>
                <h1 class="text-3xl font-bold text-[#00241a]">Reset Password</h1>
                <p class="mt-2 text-base text-slate-600">Buat password baru untuk akun Anda.</p>
            </div>

            <form method="POST" action="{{ route('password.store') }}" class="space-y-5">
                @csrf
                <input type="hidden" name="token" value="{{ $request->route('token') }}">

                <div>
                    <label for="email" class="mb-2 block text-sm font-semibold text-slate-700">Email</label>
                    <input id="email" name="email" type="email" value="{{ old('email', $request->email) }}" required autofocus autocomplete="username"
                        class="h-12 w-full rounded-xl border border-slate-300 bg-white px-4 focus:border-transparent focus:ring-2 focus:ring-[#a3d0be]" />
                    @error('email')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="password" class="mb-2 block text-sm font-semibold text-slate-700">Password Baru</label>
                    <div class="relative">
                        <input id="password" name="password" type="password" required autocomplete="new-password"
                            class="h-12 w-full rounded-xl border border-slate-300 bg-white px-4 pr-12 focus:border-transparent focus:ring-2 focus:ring-[#a3d0be]" />
                        <button type="button" data-toggle-password="password"
                            class="absolute right-3 top-1/2 -translate-y-1/2 rounded-lg p-2 text-slate-500 hover:bg-slate-100 hover:text-[#00241a]"
                            aria-label="Tampilkan password baru">
                            <span class="material-symbols-outlined text-xl">visibility</span>
                        </button>
                    </div>
                    @error('password')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="password_confirmation" class="mb-2 block text-sm font-semibold text-slate-700">Konfirmasi Password Baru</label>
                    <div class="relative">
                        <input id="password_confirmation" name="password_confirmation" type="password" required autocomplete="new-password"
                            class="h-12 w-full rounded-xl border border-slate-300 bg-white px-4 pr-12 focus:border-transparent focus:ring-2 focus:ring-[#a3d0be]" />
                        <button type="button" data-toggle-password="password_confirmation"
                            class="absolute right-3 top-1/2 -translate-y-1/2 rounded-lg p-2 text-slate-500 hover:bg-slate-100 hover:text-[#00241a]"
                            aria-label="Tampilkan konfirmasi password baru">
                            <span class="material-symbols-outlined text-xl">visibility</span>
                        </button>
                    </div>
                    @error('password_confirmation')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit"
                    class="flex h-14 w-full items-center justify-center gap-2 rounded-xl bg-[#00241a] px-5 font-['Work_Sans'] font-bold text-white hover:bg-emerald-900">
                    Simpan Password Baru
                    <span class="material-symbols-outlined text-lg">save</span>
                </button>
            </form>
        </section>
    </main>

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
