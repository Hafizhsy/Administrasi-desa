<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak {{ $pengajuan->jenis_surat }} - {{ $pengajuan->nama_pemohon }}</title>
    <style>
        @page { size: A4; margin: 18mm 20mm 20mm; }
        * { box-sizing: border-box; }
        body { background: #e5e7eb; color: #000; font-family: "Times New Roman", Times, serif; margin: 0; padding: 28px; }
        .actions { display: flex; gap: 12px; justify-content: center; margin-bottom: 22px; }
        .actions button, .actions a { border: 0; border-radius: 8px; cursor: pointer; font-family: Arial, sans-serif; font-weight: 700; padding: 12px 18px; text-decoration: none; }
        .actions button { background: #064e3b; color: #fff; }
        .actions a { background: #fff; color: #111827; }
        .sheet { background: #fff; margin: 0 auto; min-height: 297mm; padding: 18mm 20mm 20mm; width: 210mm; }
        .letterhead { align-items: center; border-bottom: 4px double #000; display: grid; grid-template-columns: 92px 1fr 92px; padding-bottom: 7px; }
        .letterhead-logo { height: 86px; object-fit: contain; width: 86px; }
        .letterhead-text { line-height: 1.12; text-align: center; }
        .letterhead-text p { font-size: 15px; font-weight: bold; margin: 0; }
        .letterhead-text h1 { font-size: 21px; margin: 2px 0; }
        .letterhead-address { font-size: 11px !important; font-style: italic; font-weight: normal !important; margin-top: 4px !important; }
        .letter-title { margin-top: 27px; text-align: center; }
        .letter-title h2 { font-size: 16px; margin: 0; text-decoration: underline; text-transform: uppercase; }
        .letter-title p { font-size: 14px; margin: 3px 0 0; }
        .content { font-size: 14px; line-height: 1.55; margin-top: 27px; text-align: justify; }
        .identity { border-collapse: collapse; margin: 12px 0 14px 34px; width: calc(100% - 34px); }
        .identity td { padding: 2px 0; vertical-align: top; }
        .identity td:first-child { width: 135px; }
        .identity td:nth-child(2) { width: 14px; }
        .signature { margin-left: auto; margin-top: 35px; text-align: center; width: 275px; }
        .signature p { margin: 2px 0; }
        .signature-image { display: block; height: 78px; margin: 0 auto -8px; max-width: 190px; object-fit: contain; }
        .signature-space { height: 66px; }
        .signer-name { font-weight: bold; text-decoration: underline; text-transform: uppercase; }
        .nip { font-size: 13px; }
        .unsigned-warning { background: #fef2f2; border: 1px solid #fecaca; color: #991b1b; font-family: Arial, sans-serif; font-size: 12px; margin: 20px 0; padding: 10px; text-align: center; }
        @media print {
            body { background: #fff; padding: 0; }
            .actions, .unsigned-warning { display: none; }
            .sheet { min-height: auto; padding: 0; width: auto; }
        }
    </style>
</head>
<body>
    <div class="actions">
        <a href="{{ route('user.pengajuan.index') }}">Kembali</a>
        <button type="button" onclick="window.print()">Cetak / Download PDF</button>
    </div>

    <main class="sheet">
        <header class="letterhead">
            <img class="letterhead-logo" src="{{ asset('images/logo-desa.png') }}" alt="Lambang Kota Kotamobagu">
            <div class="letterhead-text">
                <p>PEMERINTAH KOTA KOTAMOBAGU</p>
                <p>KECAMATAN KOTAMOBAGU SELATAN</p>
                <h1>DESA KOPANDAKAN I</h1>
            </div>
            <div></div>
        </header>

        <section class="letter-title">
            <h2>{{ $pengajuan->jenis_surat }}</h2>
            <p>Nomor: {{ $pengajuan->nomor_surat }}</p>
        </section>

        <section class="content">
            <p>Yang bertanda tangan di bawah ini, Kepala Desa Kopandakan I, menerangkan dengan sebenarnya bahwa:</p>
            <table class="identity">
                <tr><td>Nama</td><td>:</td><td><strong>{{ $pengajuan->nama_pemohon }}</strong></td></tr>
                <tr><td>NIK</td><td>:</td><td>{{ $pengajuan->nik }}</td></tr>
                <tr><td>Alamat</td><td>:</td><td>{{ $pengajuan->alamat }}</td></tr>
                <tr><td>Keperluan</td><td>:</td><td>{{ $pengajuan->keperluan ?: '-' }}</td></tr>
            </table>
            <p>Berdasarkan data dan dokumen yang telah diperiksa, nama tersebut di atas benar merupakan warga Desa Kopandakan I. Surat keterangan ini dibuat untuk keperluan sebagaimana tersebut di atas.</p>
            <p>Demikian surat keterangan ini dibuat dengan sebenarnya agar dapat dipergunakan sebagaimana mestinya.</p>
        </section>

        <div class="signature">
            <p>Kopandakan I, {{ ($pengajuan->disetujui_at ?: $pengajuan->updated_at)->translatedFormat('d F Y') }}</p>
            <p>Kepala Desa Kopandakan I</p>
            <img class="signature-image" src="{{ route('user.pengajuan.signature', $pengajuan) }}" alt="Tanda tangan Kepala Desa">
            <p class="signer-name">{{ $pengajuan->nama_penanda_tangan }}</p>
            @if($pengajuan->nip_penanda_tangan)
                <p class="nip">NIP. {{ $pengajuan->nip_penanda_tangan }}</p>
            @endif
        </div>
    </main>
</body>
</html>
