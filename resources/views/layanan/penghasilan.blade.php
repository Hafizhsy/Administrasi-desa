@php
    $layanan = \App\Support\LayananSurat::find('penghasilan');
@endphp

@include('layanan.partials.detail-page', ['layanan' => $layanan])
