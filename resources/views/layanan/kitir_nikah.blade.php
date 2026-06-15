@php
    $layanan = \App\Support\LayananSurat::find('kitir_nikah');
@endphp

@include('layanan.partials.detail-page', ['layanan' => $layanan])
