@php
    $layanan = \App\Support\LayananSurat::find('kematian');
@endphp

@include('layanan.partials.detail-page', ['layanan' => $layanan])
