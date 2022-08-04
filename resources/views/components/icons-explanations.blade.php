<div class="container">
    <div class="row">
        <div class="col-md-12 col-xs-12">
            <h2 class="blog-title"> {{ $icons->sectionTitle }}</h2>
            <h3 class="blog-subtitle"> {{ $icons->sectionSubTitle }}</h3>
        </div>
    </div>
    <div class="row">
        <div class="spacer-110"></div>
        {{-- @dd($icons) --}}
        @foreach ($icons->icons as $icon)
            {{-- @dd($icon) --}}
            <div class="col-md-2 col-xs-6">
                <div class="icons-cont flex-v-center flex-h-center">
                    <img loading="lazy" class="icons-icon" src="/assets/img/icons/icons-explanations/{{ $icon->img }}"
                        alt="">
                    <p class="icons-title text-center">{{ $icon->title }}</p>
                </div>
            </div>
        @endforeach

    </div>
</div>
