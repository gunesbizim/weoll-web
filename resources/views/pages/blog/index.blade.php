@extends('layouts.master', [
    'title' => 'Blog',
    'metadesc' => 'Meta desc',
])

@section('content')
    <div class="container blog-container">
        <h1 class="blog-main-title">Blog</h1>
        <div class="row">
            @foreach ($data as $key => $item)
                @php
                    
                    $publish_date = \Carbon\Carbon::parse($item['date'])->formatLocalized('%b %d, %Y');
                    // dd($key, $media);
                    // dd( \Carbon\Carbon::parse($media->date)->formatLocalized('%d %b, %Y') )
                @endphp
                {{-- @dd($item) --}}
                <div class="col-lg-4">
                    <a href="/blog/{{ $key }}" class="blog-card-link">
                        <div class="blog-card">
                            <div class="card-img">
                                <img loading="lazy" src="{{ $media_source }}{{ $item['img'] }}" alt="">
                            </div>
                            <div class="card-body">
                                <div class="card-body-top">
                                    <div class="date">
                                        {{ $publish_date }}
                                    </div>
                                </div>
                                <div class="card-body-bottom">
                                    <h2 class="card-title">{{ $item['title'] }} </h2>
                                    <p class="card-desc">
                                        {{ \Illuminate\Support\Str::limit($item['description'], 100, $end = '...') }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>

        {{ $data->onEachSide(5)->links() }}
    </div>
@endsection
{{-- @dd($data) --}}
