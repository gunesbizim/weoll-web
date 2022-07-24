@extends('layouts.master', [
    'title' => 'Perakende Sektörü Weoll Kullanıyor',
    'metadesc' => 'Mekandan ve cihazdan bağımsız olarak her an ulaşılabilir, hızla değişen çalışan sirkülasyonuna ayak uyduran, daha akıllı, verimli, dinamik bir kurum kültürüne ulaşmanıza aracı oluyoruz.',
])

@section('content')
    @include('layouts.head')
    @include('components.hero-section')
    @include('components.section-title')
    <div class="spacer-110"></div>
    @include('components.image-text')
    <div class="spacer-110"></div>
    @include('components.other-solutions')
    <div class="spacer-110"></div>
@endsection
