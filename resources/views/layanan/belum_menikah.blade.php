@php
    $layanan = \App\Support\LayananSurat::find('belum_menikah');
@endphp

@include('layanan.partials.detail-page', ['layanan' => $layanan])
