@extends('layouts.master', [
    'title' => 'Kurum İçi İletişim Süreçleri',
    'metadesc' => 'Weoll’un kurum içi iletişim çözümleri ile kurumunuzun dinamik iletişim döngüsüne çevik şekilde cevap veren bir kurumsal portala hemen sahip olabilirsiniz.',
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
