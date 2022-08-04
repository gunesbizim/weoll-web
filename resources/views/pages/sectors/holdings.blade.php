@extends('layouts.master', [
    'title' => 'Grup Şirketleri (Holdingler) Weoll Kullanıyor',
    'metadesc' => ' Weoll sayesinde grup şirketlerinin iş süreçleri ve iletişim ihtiyaçlarını tek merkezden yönetmelerini sağlıyoruz.',
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
