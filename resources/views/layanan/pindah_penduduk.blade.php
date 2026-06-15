@php
    $layanan = \App\Support\LayananSurat::find('pindah_penduduk');
@endphp

@include('layanan.partials.detail-page', ['layanan' => $layanan])
