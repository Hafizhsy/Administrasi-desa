@php
    $layanan = \App\Support\LayananSurat::find('kepemilikan');
@endphp

@include('layanan.partials.detail-page', ['layanan' => $layanan])
