@extends('layouts.master', [
    'title' => 'Kurumsal Kaynak Yönetimi Süreçleri',
    'metadesc' => 'Weoll’un kurumsal kaynak yönetimi çözümleri ile kurumsal kaynaklarınızın kullanımında şeffaflığı ve görünürlüğü artırabilirsiniz',
])

@section('content')
    @include('components.hero-section')
    <div class="spacer-110"></div>
    @include('components.tabs-icons')
    <div class="spacer-110"></div>
    @include('components.other-solutions')
    <div class="spacer-110"></div>
@endsection
