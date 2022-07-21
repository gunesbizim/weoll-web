@extends('layouts.master')


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
