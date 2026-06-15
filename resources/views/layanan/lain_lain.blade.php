@php
    $layanan = \App\Support\LayananSurat::find('lain_lain');
@endphp

@include('layanan.partials.detail-page', ['layanan' => $layanan])
