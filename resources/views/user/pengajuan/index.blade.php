<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Riwayat Pengajuan</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-slate-50">

    <div class="max-w-6xl mx-auto py-10 px-4">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold text-emerald-900">Riwayat Pengajuan Surat</h1>

            <a href="{{ route('user.pengajuan.create') }}"
                class="bg-emerald-900 text-white px-5 py-3 rounded-lg font-semibold">
                Ajukan Surat
            </a>
        </div>

        @if(session('success'))
            <div class="bg-green-100 text-green-700 p-4 rounded-lg mb-5">
                {{ session('success') }}
            </div>
        @endif

        <div class="bg-white rounded-xl shadow overflow-hidden">
            <table class="w-full">
                <thead class="bg-emerald-900 text-white">
                    <tr>
                        <th class="p-4 text-left">No</th>
                        <th class="p-4 text-left">Jenis Surat</th>
                        <th class="p-4 text-left">Nama Pemohon</th>
                        <th class="p-4 text-left">Status</th>
                        <th class="p-4 text-left">Tanggal</th>
                        <th class="p-4 text-left">Catatan</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($pengajuan as $item)
                        <tr class="border-b">
                            <td class="p-4">{{ $loop->iteration }}</td>
                            <td class="p-4">{{ $item->jenis_surat }}</td>
                            <td class="p-4">{{ $item->nama_pemohon }}</td>
                            <td class="p-4">
                                <span class="px-3 py-1 rounded-full text-sm
                                    @if($item->status == 'menunggu') bg-yellow-100 text-yellow-700
                                    @elseif($item->status == 'diproses') bg-blue-100 text-blue-700
                                    @elseif($item->status == 'disetujui') bg-green-100 text-green-700
                                    @else bg-red-100 text-red-700
                                    @endif">
                                    {{ ucfirst($item->status) }}
                                </span>
                            </td>
                            <td class="p-4">{{ $item->created_at->format('d-m-Y') }}</td>
                            <td class="p-4">{{ $item->catatan_admin ?? '-' }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="p-6 text-center text-gray-500">
                                Belum ada pengajuan surat.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <a href="{{ route('user.dashboard') }}" class="inline-block mt-6 text-emerald-900 font-semibold">
            ← Kembali ke Dashboard
        </a>
    </div>

</body>

</html>