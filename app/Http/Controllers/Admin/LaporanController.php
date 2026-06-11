<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PengajuanSurat;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LaporanController extends Controller
{
    private const MONTH_NAMES = [
        1 => 'Januari',
        2 => 'Februari',
        3 => 'Maret',
        4 => 'April',
        5 => 'Mei',
        6 => 'Juni',
        7 => 'Juli',
        8 => 'Agustus',
        9 => 'September',
        10 => 'Oktober',
        11 => 'November',
        12 => 'Desember',
    ];

    public function index(Request $request)
    {
        $bulan = (int) $request->input('bulan', now()->month);
        $tahun = (int) $request->input('tahun', now()->year);

        if ($bulan < 1 || $bulan > 12) {
            $bulan = now()->month;
        }

        if ($tahun < 2000 || $tahun > (now()->year + 1)) {
            $tahun = now()->year;
        }

        $periode = Carbon::create($tahun, $bulan, 1);

        $baseQuery = PengajuanSurat::query()
            ->whereYear('created_at', $tahun)
            ->whereMonth('created_at', $bulan);

        $statusCounts = (clone $baseQuery)
            ->select('status', DB::raw('COUNT(*) as total'))
            ->groupBy('status')
            ->pluck('total', 'status');

        $summary = [
            'total' => (clone $baseQuery)->count(),
            'menunggu' => (int) ($statusCounts['menunggu'] ?? 0),
            'disetujui' => (int) ($statusCounts['disetujui'] ?? 0),
            'ditolak' => (int) ($statusCounts['ditolak'] ?? 0),
        ];

        $jenisSuratCounts = (clone $baseQuery)
            ->select('jenis_surat', DB::raw('COUNT(*) as total'))
            ->groupBy('jenis_surat')
            ->orderByDesc('total')
            ->get();

        $dailySubmissions = (clone $baseQuery)
            ->selectRaw('DAY(created_at) as tanggal, COUNT(*) as total')
            ->groupBy('tanggal')
            ->orderBy('tanggal')
            ->pluck('total', 'tanggal');

        $daysInMonth = $periode->daysInMonth;
        $dailyReport = collect(range(1, $daysInMonth))->map(function ($day) use ($dailySubmissions) {
            return [
                'tanggal' => $day,
                'total' => (int) ($dailySubmissions[$day] ?? 0),
            ];
        });

        $maxDailyTotal = max(1, $dailyReport->max('total'));

        $recentPengajuan = (clone $baseQuery)
            ->oldest()
            ->limit(8)
            ->get();

        $availableYears = PengajuanSurat::query()
            ->selectRaw('YEAR(created_at) as tahun')
            ->distinct()
            ->orderByDesc('tahun')
            ->pluck('tahun')
            ->filter()
            ->values();

        if ($availableYears->isEmpty() || !$availableYears->contains($tahun)) {
            $availableYears = $availableYears->push($tahun)->unique()->sortDesc()->values();
        }

        return view('admin.laporan.index', compact(
            'bulan',
            'tahun',
            'periode',
            'summary',
            'jenisSuratCounts',
            'dailyReport',
            'maxDailyTotal',
            'recentPengajuan',
            'availableYears'
        ));
    }

    public function rekap(Request $request)
    {
        $tahun = (int) $request->input('tahun', now()->year);

        if ($tahun < 2000 || $tahun > (now()->year + 1)) {
            $tahun = now()->year;
        }

        $monthlyReports = collect(range(1, 12))->map(function ($bulan) use ($tahun) {
            $statusCounts = PengajuanSurat::query()
                ->whereYear('created_at', $tahun)
                ->whereMonth('created_at', $bulan)
                ->select('status', DB::raw('COUNT(*) as total'))
                ->groupBy('status')
                ->pluck('total', 'status');

            return [
                'bulan' => self::MONTH_NAMES[$bulan],
                'total' => (int) $statusCounts->sum(),
                'menunggu' => (int) ($statusCounts['menunggu'] ?? 0),
                'disetujui' => (int) ($statusCounts['disetujui'] ?? 0),
                'ditolak' => (int) ($statusCounts['ditolak'] ?? 0),
            ];
        });

        $yearlySummary = [
            'total' => $monthlyReports->sum('total'),
            'menunggu' => $monthlyReports->sum('menunggu'),
            'disetujui' => $monthlyReports->sum('disetujui'),
            'ditolak' => $monthlyReports->sum('ditolak'),
        ];

        $jenisSuratReports = PengajuanSurat::query()
            ->whereYear('created_at', $tahun)
            ->select('jenis_surat', DB::raw('COUNT(*) as total'))
            ->groupBy('jenis_surat')
            ->orderByDesc('total')
            ->get();

        $pengajuanByMonth = PengajuanSurat::query()
            ->whereYear('created_at', $tahun)
            ->orderBy('created_at')
            ->get()
            ->groupBy(fn($item) => $item->created_at->month);

        return view('admin.laporan.rekap', compact(
            'tahun',
            'monthlyReports',
            'yearlySummary',
            'jenisSuratReports',
            'pengajuanByMonth'
        ));
    }
}
