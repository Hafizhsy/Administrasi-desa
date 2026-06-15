@php
    $layanan = \App\Support\LayananSurat::find('kelahiran');
@endphp

@include('layanan.partials.detail-page', ['layanan' => $layanan])
