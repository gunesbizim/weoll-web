@extends('layouts.master', [
    'title' => 'Üretim Sektörü Weoll Kullanıyor',
    'metadesc' => 'Weoll’un hazır uygulamaları sayesinde üretimde kullanılacak hammadde ve numunelerin satın alınmasından başlayarak tüm üretim aşamalarını izlemek ve daha çevik, kontrol edilebilir hale getirmek mümkün.',
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
