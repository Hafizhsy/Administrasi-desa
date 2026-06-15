@php
    $layanan = \App\Support\LayananSurat::find('kurang_mampu');
@endphp

@include('layanan.partials.detail-page', ['layanan' => $layanan])
