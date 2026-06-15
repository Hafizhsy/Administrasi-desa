@php
    $layanan = \App\Support\LayananSurat::find('lunas_pbb');
@endphp

@include('layanan.partials.detail-page', ['layanan' => $layanan])
