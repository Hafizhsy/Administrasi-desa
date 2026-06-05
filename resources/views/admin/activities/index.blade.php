<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Log Aktivitas - Kopandakan I</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@400;500;600;700;900&amp;family=Work+Sans:wght@500;600&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
</head>

<body class="bg-[#f8f9ff] text-[#0b1c30]" style="font-family: 'Public Sans', sans-serif;">
    <main class="mx-auto max-w-5xl px-4 py-8">
        <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-end sm:justify-between">
            <div>
                <h1 class="text-3xl font-bold text-emerald-950">Log Aktivitas</h1>
                <p class="mt-1 text-slate-500">Riwayat aktivitas permohonan surat terbaru.</p>
            </div>
            <a href="{{ route('admin.dashboard') }}" class="inline-flex h-11 items-center justify-center rounded-xl bg-emerald-900 px-5 font-semibold text-white hover:bg-emerald-800">
                Kembali
            </a>
        </div>

        <section class="overflow-hidden rounded-xl border border-slate-200 bg-white">
            <div class="divide-y divide-slate-100">
                @forelse($activities as $activity)
                    <div class="p-5">
                        <div class="flex flex-col gap-2 sm:flex-row sm:items-start sm:justify-between">
                            <div>
                                <p class="font-bold text-emerald-950">{{ $activity->title }}</p>
                                <p class="mt-1 text-sm text-slate-600">{{ $activity->description }}</p>
                            </div>
                            <p class="shrink-0 text-sm text-slate-400">{{ $activity->created_at->diffForHumans() }}</p>
                        </div>
                    </div>
                @empty
                    <div class="p-10 text-center text-slate-500">Belum ada aktivitas.</div>
                @endforelse
            </div>
        </section>

        <div class="mt-6">
            {{ $activities->links() }}
        </div>
    </main>
</body>

</html>
