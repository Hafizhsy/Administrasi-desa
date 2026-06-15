@php
    $notificationCount = $notificationCount ?? 0;
    $notificationItems = collect($notificationItems ?? []);
@endphp

<details class="relative">
    <summary
        class="relative flex h-10 w-10 cursor-pointer list-none items-center justify-center rounded-full hover:bg-slate-100 transition-colors active:scale-95 duration-150 [&::-webkit-details-marker]:hidden"
        aria-label="Buka notifikasi">
        <span class="material-symbols-outlined text-slate-600">notifications</span>
        @if($notificationCount > 0)
            <span
                class="absolute -right-0.5 -top-0.5 flex h-5 min-w-[1.25rem] items-center justify-center rounded-full bg-red-600 px-1 text-[11px] font-bold leading-none text-white">
                {{ $notificationCount > 9 ? '9+' : $notificationCount }}
            </span>
        @endif
    </summary>

    <div
        class="absolute right-0 mt-3 w-[360px] max-w-[92vw] overflow-hidden rounded-xl border border-slate-200 bg-white shadow-xl z-[60]">
        <div class="flex items-center justify-between gap-3 border-b border-slate-100 px-4 py-3">
            <div>
                <p class="text-sm font-bold text-emerald-900">Notifikasi</p>
                <p class="text-xs text-slate-500">{{ $notificationCount }} perlu diperhatikan</p>
            </div>
            <span class="material-symbols-outlined text-slate-400">notifications_active</span>
        </div>

        <div class="max-h-80 overflow-y-auto">
            @forelse($notificationItems as $notification)
                <a href="{{ $notification['href'] }}"
                    class="flex gap-3 border-b border-slate-100 px-4 py-3 text-left transition-colors last:border-b-0 hover:bg-slate-50">
                    <span
                        class="material-symbols-outlined mt-0.5 flex h-9 w-9 shrink-0 items-center justify-center rounded-lg bg-emerald-50 text-emerald-800">
                        {{ $notification['icon'] }}
                    </span>
                    <span class="min-w-0 flex-1">
                        <span class="block text-sm font-bold leading-snug text-slate-900">
                            {{ $notification['title'] }}
                        </span>
                        <span class="mt-1 block text-sm leading-snug text-slate-600">
                            {{ $notification['description'] }}
                        </span>
                        <span class="mt-1 block text-xs text-slate-400">{{ $notification['time'] }}</span>
                    </span>
                </a>
            @empty
                <div class="px-4 py-8 text-center">
                    <span class="material-symbols-outlined mb-2 text-3xl text-slate-300">notifications_off</span>
                    <p class="text-sm font-bold text-slate-700">Belum ada notifikasi</p>
                    <p class="mt-1 text-xs text-slate-500">Update permohonan akan muncul di sini.</p>
                </div>
            @endforelse
        </div>
    </div>
</details>
