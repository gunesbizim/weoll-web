@extends('layouts.master', [
    'title' => 'Dijitali Odağına Alan Kurumlar Weoll Kullanıyor',
    'metadesc' => 'Bilgi ve iletişim teknolojileri alanındaki inovasyon hız kesmezken dijitali odağına alarak büyümek isteyen kurumların dijital dönüşüm yolculuklarına eşlik ediyoruz.',
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
