@php
    $layanan = \App\Support\LayananSurat::find('domisili');
@endphp

@include('layanan.partials.detail-page', ['layanan' => $layanan])
