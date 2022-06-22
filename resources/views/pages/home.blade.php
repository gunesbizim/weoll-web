@extends('layouts.master')

@section('custom-css')
    <link rel="stylesheet" href="assets/splideslider/dist/css/splide.min.css">
@endsection

@section('content')
    @include('components.hero-section')

    @include('components.tabs')
    <div class="spacer-110"></div>
    @include('components.tabs-2')
    <div class="spacer-110"></div>
    @include('components.tabs-2-rev')
    <div class="spacer-110"></div>
    @include('components.icons-explanations')
    <div class="spacer-110"></div>
    @include('components.testimonials')
    <div class="spacer-110"></div>
    @include('components.customer-logos')
@endsection

@section('custom-last-script')
    <script defer src="assets/splideslider/dist/js/splide.min.js"></script>
    <script defer>
        document.addEventListener('DOMContentLoaded', function() {
            var splide = new Splide('.splide');
            splide.mount();
        });
    </script>
@endsection
