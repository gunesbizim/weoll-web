@extends('layouts.master', [
    'title' => 'İnsan Kaynakları Süreçleri',
    'metadesc' => 'Weoll’un insan kaynakları çözümleri ile herkesi kucaklayan bir iletişim ve çalışma alanına hemen sahip olabilirsiniz.',
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
