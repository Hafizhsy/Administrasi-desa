<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Lupa Password - Kopandakan I</title>
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
            <a href="{{ route('login') }}" class="mb-6 inline-flex items-center gap-2 text-sm font-semibold text-[#735c00] hover:underline">
                <span class="material-symbols-outlined text-base">arrow_back</span>
                Kembali ke Login
            </a>

            <div class="mb-8">
                <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-xl bg-[#beedd9]">
                    <span class="material-symbols-outlined text-[#00241a]">lock_reset</span>
                </div>
                <h1 class="text-3xl font-bold text-[#00241a]">Lupa Password</h1>
                <p class="mt-2 text-base text-slate-600">Masukkan email akun Anda. Sistem akan mengirim link untuk membuat password baru.</p>
            </div>

            @if(session('status'))
                <div class="mb-5 rounded-xl border border-emerald-100 bg-emerald-50 p-4 text-sm font-semibold text-emerald-800">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('password.email') }}" class="space-y-5">
                @csrf

                <div>
                    <label for="email" class="mb-2 block text-sm font-semibold text-slate-700">Email</label>
                    <div class="relative">
                        <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-slate-500">mail</span>
                        <input id="email" name="email" type="email" value="{{ old('email') }}" required autofocus
                            class="h-14 w-full rounded-xl border border-slate-300 bg-white px-4 pl-12 text-base focus:border-transparent focus:ring-2 focus:ring-[#a3d0be]"
                            placeholder="Masukkan email Anda" />
                    </div>
                    @error('email')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit"
                    class="flex h-14 w-full items-center justify-center gap-2 rounded-xl bg-[#00241a] px-5 font-['Work_Sans'] font-bold text-white hover:bg-emerald-900">
                    Kirim Link Reset
                    <span class="material-symbols-outlined text-lg">send</span>
                </button>
            </form>
        </section>
    </main>
</body>

</html>
