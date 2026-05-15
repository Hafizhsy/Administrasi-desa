<x-app-layout>
    <div class="min-h-screen bg-gray-100">
        <div class="py-8">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

                <h1 class="text-2xl font-bold text-gray-800 mb-6">
                    Dashboard Masyarakat
                </h1>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                    <div class="bg-white p-6 rounded-lg shadow">
                        <h2 class="text-gray-600 text-sm">Total Pengajuan Saya</h2>
                        <p class="text-3xl font-bold text-blue-600 mt-2">0</p>
                    </div>

                    <div class="bg-white p-6 rounded-lg shadow">
                        <h2 class="text-gray-600 text-sm">Sedang Diproses</h2>
                        <p class="text-3xl font-bold text-yellow-500 mt-2">0</p>
                    </div>

                    <div class="bg-white p-6 rounded-lg shadow">
                        <h2 class="text-gray-600 text-sm">Disetujui</h2>
                        <p class="text-3xl font-bold text-green-600 mt-2">0</p>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow p-6">
                    <h2 class="text-lg font-semibold text-gray-800 mb-4">
                        Layanan Administrasi
                    </h2>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <a href="#" class="block p-5 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                            Ajukan Surat
                        </a>

                        <a href="#" class="block p-5 bg-green-600 text-white rounded-lg hover:bg-green-700">
                            Riwayat Pengajuan
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>