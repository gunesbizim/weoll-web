<div class="container fullpage fullwidth">
    <div class="row">
        <div class="d-flex col-md-6 col-xs-12 flex-column flex-v-center">
            {{-- @dd($heroData) --}}
            <h1 class="hero-h1">{{ $heroData->hero->h1Purple }} <span
                    class="h1gray">{{ $heroData->hero->h1Gray }}</span>
            </h1>
            <p class="hero-p"> {!! $heroData->hero->paragraph !!}</p>
            <a class="secondary-cta play" href="">{{ $heroData->hero->ctaText }}
            </a>

        </div>
        <div class="col-md-6 col-xs-12 d-flex flex-h-center">
            <img class="full-size" src="/assets/img/{{ $heroData->hero->img }}">
        </div>

    </div>
</div>
