@extends('layouts.master', [
    'title' => 'Kurum İçindeki İş Ortağınız',
    'metadesc' => '16 yıla uzanan deneyimimiz ve 600’ün üzerinde müşterimizle, kazandığımız tecrübeden güç alıyor, iş hayatının en karmaşık sorunlarına dahi sade ve net çözümler üretiyor, kurum içindeki iş ortağınız olarak hayatınızı kolaylaştırıyoruz.',
])


@section('content')
    @include('components.hero-section')
    @include('components.image-text')
    <div class="spacer-110"></div>
    @include('components.video')
    @php
    $sections = $sectionsAfter;
    @endphp
    <div class="spacer-110"></div>

    @include('components.image-text')
    <div class="spacer-110"></div>
@endsection
