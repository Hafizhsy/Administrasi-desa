@php
    $layanan = \App\Support\LayananSurat::find('pernah_menikah');
@endphp

@include('layanan.partials.detail-page', ['layanan' => $layanan])
