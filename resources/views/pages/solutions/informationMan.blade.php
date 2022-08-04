@extends('layouts.master', [
    'title' => 'Bilgi Yönetimi Süreçleri',
    'metadesc' => 'Weoll’un bilgi yönetimi çözümleri ile çalışanların yetki sahibi oldukları kurumsal dokümanlara, ortak bir alandan kolaylıkla ulaşmasını sağlayabilirsiniz.',
])

@section('content')
    @include('components.hero-section')
    <div class="spacer-110"></div>
    @include('components.image-text')
    <div class="spacer-110"></div>
    @include('components.tabs-icons')
    <div class="spacer-110"></div>
    @include('components.other-solutions')
    <div class="spacer-110"></div>
@endsection
