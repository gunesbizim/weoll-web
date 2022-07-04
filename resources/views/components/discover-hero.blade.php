<div class="container fullpage discover-weoll-bg fullwidth">
    <div class="row">
        {{-- @dd($discoverHero) --}}
        <div class="col-md-12 flex-column d-flex flex-v-center flex-h-center">
            <h1>{{ $discoverHero->sectionTitle }}</h1>
            <p class="discover-weoll-sub">{{ $discoverHero->sectionSubTitle }}</p>
            <a href="{{ $discoverHero->ctaUrl === '#' ? '#' : route($discoverHero->ctaUrl) }}"
                class="cta">{{ $discoverHero->ctaText }}</a>
        </div>
    </div>
</div>
