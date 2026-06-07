<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rekap Laporan {{ $tahun }} - Kopandakan I</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            background: #eef2f7;
            color: #111827;
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
            padding: 28px;
        }

        .toolbar {
            display: flex;
            align-items: center;
            gap: 12px;
            justify-content: space-between;
            margin-bottom: 24px;
            max-width: 1120px;
            margin-left: auto;
            margin-right: auto;
        }

        .toolbar-title {
            color: #334155;
            font-size: 14px;
            font-weight: 700;
        }

        .toolbar-actions {
            display: flex;
            gap: 10px;
        }

        button,
        a {
            background: #00241a;
            border: 0;
            border-radius: 8px;
            color: #fff;
            cursor: pointer;
            font-size: 14px;
            font-weight: 700;
            padding: 10px 16px;
            text-decoration: none;
        }

        .secondary {
            background: #ffffff;
            border: 1px solid #cbd5e1;
            color: #00241a;
        }

        .sheet {
            background: #ffffff;
            border: 1px solid #dbe3ef;
            border-radius: 12px;
            box-shadow: 0 18px 50px rgba(15, 23, 42, 0.08);
            margin: 0 auto;
            max-width: 1120px;
            padding: 34px;
        }

        .header {
            align-items: center;
            border-bottom: 3px solid #00241a;
            display: grid;
            gap: 18px;
            grid-template-columns: 72px 1fr;
            margin-bottom: 28px;
            padding-bottom: 20px;
        }

        .header h1 {
            font-size: 22px;
            margin: 0 0 6px;
            text-transform: uppercase;
        }

        .header p {
            color: #475569;
            margin: 0;
        }

        .logo {
            align-items: center;
            background: #beedd9;
            border-radius: 999px;
            display: flex;
            height: 64px;
            justify-content: center;
            overflow: hidden;
            width: 64px;
        }

        .logo img {
            height: 52px;
            width: 52px;
        }

        .meta {
            color: #64748b;
            display: flex;
            flex-wrap: wrap;
            font-size: 12px;
            gap: 8px 18px;
            margin-top: 10px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            border: 1px solid #cbd5e1;
            font-size: 13px;
            padding: 10px;
            text-align: left;
        }

        th {
            background: #e5eeff;
            color: #0f172a;
            font-size: 12px;
            text-transform: uppercase;
        }

        tfoot td {
            font-weight: 700;
        }

        h2 {
            color: #00241a;
            font-size: 16px;
            margin: 26px 0 12px;
        }

        .month-section {
            border: 1px solid #cbd5e1;
            border-radius: 10px;
            margin-bottom: 18px;
            overflow: hidden;
            page-break-inside: avoid;
        }

        .month-head {
            align-items: center;
            background: #00241a;
            color: #ffffff;
            display: flex;
            gap: 14px;
            justify-content: space-between;
            padding: 12px 14px;
        }

        .month-head h3 {
            font-size: 15px;
            margin: 0;
            text-transform: uppercase;
        }

        .month-summary {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            justify-content: flex-end;
        }

        .pill {
            background: rgba(255, 255, 255, 0.13);
            border: 1px solid rgba(255, 255, 255, 0.28);
            border-radius: 999px;
            color: #ffffff;
            font-size: 12px;
            font-weight: 700;
            padding: 5px 9px;
        }

        .status {
            border-radius: 999px;
            display: inline-block;
            font-size: 12px;
            font-weight: 700;
            padding: 4px 8px;
        }

        .status-menunggu {
            background: #f1f5f9;
            color: #475569;
        }

        .status-diproses {
            background: #dbeafe;
            color: #1d4ed8;
        }

        .status-disetujui {
            background: #dcfce7;
            color: #047857;
        }

        .status-ditolak {
            background: #fee2e2;
            color: #b91c1c;
        }

        .empty-row {
            color: #64748b;
            font-style: italic;
            text-align: center;
        }

        .type-table {
            page-break-inside: avoid;
        }

        .footer {
            color: #64748b;
            font-size: 12px;
            margin-top: 28px;
            text-align: right;
        }

        @media print {
            @page {
                margin: 14mm;
                size: A4 portrait;
            }

            body {
                background: #ffffff;
                padding: 0;
            }

            .toolbar {
                display: none;
            }

            .sheet {
                border: 0;
                border-radius: 0;
                box-shadow: none;
                max-width: none;
                padding: 0;
            }

            .month-section {
                page-break-inside: avoid;
            }
        }
    </style>
</head>

<body>
    <div class="toolbar">
        <div class="toolbar-title">Pratinjau rekap laporan tahun {{ $tahun }}</div>
        <div class="toolbar-actions">
            <a class="secondary" href="{{ route('admin.laporan.index', ['tahun' => $tahun]) }}">Kembali</a>
            <button type="button" onclick="window.print()">Download PDF</button>
        </div>
    </div>

    <main class="sheet">
        <div class="header">
            <div class="logo">
                <img alt="Lambang Desa" src="https://tse2.mm.bing.net/th/id/OIP.e3qAPtdwr3_s22nmrHur3AHaIo?rs=1&pid=ImgDetMain&o=7&rm=3">
            </div>
            <div>
                <h1>Rekap Laporan Administrasi Desa Kopandakan I</h1>
                <p>Rekap keseluruhan permohonan surat tahun {{ $tahun }}</p>
                <div class="meta">
                    <span>Total permohonan: {{ $yearlySummary['total'] }}</span>
                    <span>Menunggu: {{ $yearlySummary['menunggu'] }}</span>
                    <span>Diproses: {{ $yearlySummary['diproses'] }}</span>
                    <span>Disetujui: {{ $yearlySummary['disetujui'] }}</span>
                    <span>Ditolak: {{ $yearlySummary['ditolak'] }}</span>
                </div>
            </div>
        </div>

        <h2>Rekap Per Bulan dan Daftar Pengajuan</h2>
        <div>
            @foreach($monthlyReports as $report)
                @php
                    $monthNumber = $loop->iteration;
                    $items = $pengajuanByMonth->get($monthNumber, collect());
                @endphp
                <section class="month-section">
                    <div class="month-head">
                        <h3>{{ $report['bulan'] }}</h3>
                        <div class="month-summary">
                            <span class="pill">Total {{ $report['total'] }}</span>
                            <span class="pill">Menunggu {{ $report['menunggu'] }}</span>
                            <span class="pill">Diproses {{ $report['diproses'] }}</span>
                            <span class="pill">Disetujui {{ $report['disetujui'] }}</span>
                            <span class="pill">Ditolak {{ $report['ditolak'] }}</span>
                        </div>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th style="width: 13%;">Tanggal</th>
                                <th style="width: 24%;">Nama Pemohon</th>
                                <th style="width: 18%;">NIK</th>
                                <th>Jenis Surat</th>
                                <th style="width: 14%;">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($items as $item)
                                @php
                                    $statusClass = 'status-' . $item->status;
                                @endphp
                                <tr>
                                    <td>{{ $item->created_at->format('d/m/Y') }}</td>
                                    <td>{{ $item->nama_pemohon }}</td>
                                    <td>{{ $item->nik }}</td>
                                    <td>{{ $item->jenis_surat }}</td>
                                    <td><span class="status {{ $statusClass }}">{{ ucfirst($item->status) }}</span></td>
                                </tr>
                            @empty
                                <tr>
                                    <td class="empty-row" colspan="5">Tidak ada pengajuan pada bulan ini.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </section>
            @endforeach
        </div>

        <h2>Rekap Jenis Surat Yang Diajukan</h2>
        <table class="type-table">
            <thead>
                <tr>
                    <th>Jenis Surat</th>
                    <th style="width: 22%;">Total Pengajuan</th>
                    <th style="width: 18%;">Persentase</th>
                </tr>
            </thead>
            <tbody>
                @forelse($jenisSuratReports as $report)
                    @php
                        $percentage = $yearlySummary['total'] > 0 ? round(($report->total / $yearlySummary['total']) * 100, 1) : 0;
                    @endphp
                    <tr>
                        <td>{{ $report->jenis_surat }}</td>
                        <td>{{ $report->total }}</td>
                        <td>{{ $percentage }}%</td>
                    </tr>
                @empty
                    <tr>
                        <td class="empty-row" colspan="3">Belum ada data jenis surat pada tahun ini.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <div class="footer">
            Dicetak pada {{ now()->format('d/m/Y H:i') }}
        </div>
    </main>
</body>

</html>
