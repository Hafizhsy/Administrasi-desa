@props(['item', 'statusMeta'])

<dialog id="detail-user-pengajuan-{{ $item->id }}"
  class="m-auto w-[min(94vw,860px)] max-h-[90dvh] rounded-xl border border-outline-variant bg-white p-0 text-left shadow-2xl">
  <div class="flex max-h-[90dvh] flex-col overflow-hidden">
    <div class="flex items-start justify-between gap-4 border-b border-slate-200 bg-surface-container-low px-5 py-4 md:px-6">
      <div class="min-w-0">
        <p class="text-sm font-semibold uppercase tracking-wide text-on-surface-variant">Detail Permohonan</p>
        <h2 class="mt-1 text-2xl font-bold leading-tight text-primary break-words">{{ $item->jenis_surat }}</h2>
        <div class="mt-2 flex flex-wrap items-center gap-2">
          <span class="rounded-full bg-white px-3 py-1 text-sm font-semibold text-slate-700 border border-slate-200">
            ID: {{ $item->id }}
          </span>
          <span class="rounded-full px-3 py-1 text-sm font-bold {{ $statusMeta['class'] }}">
            {{ $statusMeta['label'] }}
          </span>
        </div>
      </div>
      <button type="button"
        class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg text-slate-600 transition-colors hover:bg-white hover:text-primary"
        title="Tutup"
        data-close-modal="detail-user-pengajuan-{{ $item->id }}">
        <span class="material-symbols-outlined">close</span>
      </button>
    </div>

    <div class="overflow-y-auto px-5 py-5 md:px-6 md:py-6">
      <div class="grid gap-5 lg:grid-cols-[1fr_1.05fr]">
        <section class="space-y-4">
          <div class="rounded-xl border border-slate-200 bg-white p-4">
            <h3 class="mb-4 text-base font-bold text-primary">Informasi Pengajuan</h3>
            <dl class="grid gap-4 sm:grid-cols-2">
              <div>
                <dt class="text-xs font-bold uppercase tracking-wide text-slate-500">Nama Pemohon</dt>
                <dd class="mt-1 text-base font-semibold text-slate-900 break-words">{{ $item->nama_pemohon }}</dd>
              </div>
              <div>
                <dt class="text-xs font-bold uppercase tracking-wide text-slate-500">NIK</dt>
                <dd class="mt-1 text-base text-slate-900 break-words">{{ $item->nik }}</dd>
              </div>
              <div class="sm:col-span-2">
                <dt class="text-xs font-bold uppercase tracking-wide text-slate-500">Alamat</dt>
                <dd class="mt-1 text-base text-slate-900 break-words">{{ $item->alamat }}</dd>
              </div>
              <div>
                <dt class="text-xs font-bold uppercase tracking-wide text-slate-500">Tanggal</dt>
                <dd class="mt-1 text-base text-slate-900">{{ $item->created_at->translatedFormat('d M Y') }}</dd>
              </div>
              <div>
                <dt class="text-xs font-bold uppercase tracking-wide text-slate-500">Status</dt>
                <dd class="mt-1 text-base font-semibold text-slate-900">{{ $statusMeta['label'] }}</dd>
              </div>
            </dl>
          </div>

          <div class="rounded-xl border border-slate-200 bg-surface-container-lowest p-4">
            <h3 class="mb-3 text-base font-bold text-primary">Keperluan & Catatan</h3>
            <dl class="space-y-4">
              <div>
                <dt class="text-xs font-bold uppercase tracking-wide text-slate-500">Keperluan</dt>
                <dd class="mt-1 text-base text-slate-900 break-words">{{ $item->keperluan ?: '-' }}</dd>
              </div>
              <div>
                <dt class="text-xs font-bold uppercase tracking-wide text-slate-500">Catatan Admin</dt>
                <dd class="mt-1 text-base text-slate-900 break-words">{{ $item->catatan_admin ?: '-' }}</dd>
              </div>
            </dl>
          </div>
        </section>

        <section class="rounded-xl border border-slate-200 bg-white p-4">
          <div class="mb-4 flex items-center justify-between gap-3">
            <h3 class="text-base font-bold text-primary">Dokumen Pendukung</h3>
            <span class="rounded-full bg-surface-container-low px-3 py-1 text-sm font-bold text-slate-500">
              {{ $item->dokumen->count() }} dokumen
            </span>
          </div>

          <div class="max-h-[38dvh] space-y-3 overflow-y-auto pr-1">
            @forelse($item->dokumen as $dokumen)
              <a href="{{ asset('storage/' . $dokumen->file_path) }}" target="_blank"
                class="group flex items-start gap-3 rounded-xl border border-slate-200 bg-surface-container-low p-3 text-sm font-medium text-slate-900 transition-colors hover:bg-white hover:border-primary-fixed-dim">
                <span class="material-symbols-outlined mt-0.5 shrink-0 text-primary">attach_file</span>
                <span class="min-w-0 flex-1">
                  <span class="block break-words font-semibold leading-snug">{{ $dokumen->nama_dokumen }}</span>
                  <span class="mt-1 block break-all text-xs text-slate-500">{{ basename($dokumen->file_path) }}</span>
                </span>
                <span class="material-symbols-outlined shrink-0 text-slate-400 transition-colors group-hover:text-primary">open_in_new</span>
              </a>
            @empty
              <div class="rounded-xl border border-dashed border-slate-200 bg-surface-container-lowest p-6 text-center">
                <span class="material-symbols-outlined mx-auto mb-2 text-slate-400">folder_off</span>
                <p class="text-sm font-semibold text-slate-600">Tidak ada dokumen.</p>
              </div>
            @endforelse
          </div>
        </section>
      </div>
    </div>

    @if($item->status === 'disetujui')
      <div class="flex flex-col gap-3 border-t border-slate-200 bg-slate-50 px-5 py-4 sm:flex-row sm:justify-end">
        <a href="{{ route('user.pengajuan.cetak', $item) }}" target="_blank"
          class="inline-flex h-11 items-center justify-center gap-2 rounded-xl border border-primary bg-white px-5 font-bold text-primary hover:bg-primary-fixed">
          <span class="material-symbols-outlined">print</span>
          Cetak
        </a>
        <a href="{{ route('user.pengajuan.cetak', $item) }}" target="_blank"
          class="inline-flex h-11 items-center justify-center gap-2 rounded-xl bg-primary px-5 font-bold text-white hover:bg-primary-container">
          <span class="material-symbols-outlined">download</span>
          Download Surat
        </a>
      </div>
    @endif
  </div>
</dialog>
