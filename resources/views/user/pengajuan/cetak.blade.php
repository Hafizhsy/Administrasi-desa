<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak {{ $pengajuan->jenis_surat }} - {{ $pengajuan->nama_pemohon }}</title>
    <style>
        body {
            color: #111827;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 32px;
        }

        .sheet {
            margin: 0 auto;
            max-width: 760px;
        }

        .kop {
            border-bottom: 3px solid #111827;
            margin-bottom: 28px;
            padding-bottom: 16px;
            text-align: center;
        }

        .kop h1,
        .kop h2,
        .kop p {
            margin: 2px 0;
        }

        .title {
            margin: 28px 0 24px;
            text-align: center;
            text-decoration: underline;
            text-transform: uppercase;
        }

        table {
            border-collapse: collapse;
            margin: 18px 0;
            width: 100%;
        }

        td {
            padding: 6px 0;
            vertical-align: top;
        }

        td:first-child {
            width: 180px;
        }

        .actions {
            display: flex;
            gap: 12px;
            justify-content: center;
            margin-bottom: 24px;
        }

        .actions button {
            background: #00241a;
            border: 0;
            border-radius: 8px;
            color: #ffffff;
            cursor: pointer;
            font-weight: 700;
            padding: 12px 18px;
        }

        .signature {
            margin-left: auto;
            margin-top: 56px;
            text-align: center;
            width: 260px;
        }

        @media print {
            body {
                padding: 0;
            }

            .actions {
                display: none;
            }
        }
    </style>
</head>

<body>
    <div class="actions">
        <button type="button" onclick="window.print()">Cetak / Download PDF</button>
    </div>

    <main class="sheet">
        <header class="kop">
            <h2>PEMERINTAH DESA KOPANDAKAN I</h2>
            <h1>{{ strtoupper($pengajuan->jenis_surat) }}</h1>
            <p>Desa Kopandakan I</p>
        </header>

        <h2 class="title">{{ $pengajuan->jenis_surat }}</h2>

        <p>Yang bertanda tangan di bawah ini menerangkan bahwa:</p>

        <table>
            <tr>
                <td>Nama</td>
                <td>: {{ $pengajuan->nama_pemohon }}</td>
            </tr>
            <tr>
                <td>NIK</td>
                <td>: {{ $pengajuan->nik }}</td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>: {{ $pengajuan->alamat }}</td>
            </tr>
            <tr>
                <td>Keperluan</td>
                <td>: {{ $pengajuan->keperluan ?: '-' }}</td>
            </tr>
        </table>

        <p>
            Surat ini diterbitkan berdasarkan permohonan warga dan telah disetujui oleh admin desa.
            Demikian surat ini dibuat untuk digunakan sebagaimana mestinya.
        </p>

        <div class="signature">
            <p>Kopandakan I, {{ now()->translatedFormat('d F Y') }}</p>
            <p>Kepala Desa</p>
            <br><br><br>
            <p><strong>________________________</strong></p>
        </div>
    </main>
</body>

</html>
