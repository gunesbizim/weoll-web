@extends('layouts.master')

@section('content')
    @include('components.discover-hero')

    @include('components.text-iconboxes')
    <div class="spacer-110"></div>
    @include('components.image-text')
    <div class="spacer-110"></div>
    @include('components.tab-only-icon')
    <div class="spacer-110"></div>
@endsection
