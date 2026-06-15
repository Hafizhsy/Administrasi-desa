@php
    $layanan = \App\Support\LayananSurat::find('usaha');
@endphp

@include('layanan.partials.detail-page', ['layanan' => $layanan])
