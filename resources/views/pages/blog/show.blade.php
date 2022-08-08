@extends('layouts.master', [
    'title' => $data->title,
    'metadesc' => $data->metadesc,
])

@section('content')
    <div class="container single-post">
        <div class="row">
            <div class="col-md-12">
                <h1>{{ $data->h1 }}</h1>
                @php
                    $publish_date = \Carbon\Carbon::parse($data->date)->formatLocalized('%b %d, %Y');
                @endphp
                <p class="date">{{ $publish_date }}</p>
                <img loading="lazy" class="single-post-featured-img" src="{{ asset('assets/img/blog/' . $data->img) }}"
                    alt="{{ $data->imgAlt }}">
            </div>
            <div class="col-md-12">
                {!! $data->text !!}
            </div>
        </div>
    </div>
@endsection
