@php
    $layanan = \App\Support\LayananSurat::find('puspaga');
@endphp

@include('layanan.partials.detail-page', ['layanan' => $layanan])
