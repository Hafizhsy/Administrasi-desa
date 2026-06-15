@php
    $layanan = \App\Support\LayananSurat::find('beda_nama');
@endphp

@include('layanan.partials.detail-page', ['layanan' => $layanan])
