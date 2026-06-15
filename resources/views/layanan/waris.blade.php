@php
    $layanan = \App\Support\LayananSurat::find('waris');
@endphp

@include('layanan.partials.detail-page', ['layanan' => $layanan])
