<div class="container fullpage">
    <div class="row d-flex flex-v-center">
        <div class="col-md-12 d-flex flex-h-center flex-v-center flex-column h-55">
            <img src="/assets/img/successStories/{{ $successHero->heroImg }}" alt="">
            <p class="success-hero-info">
                {!! $successHero->info !!}
            </p>
            <p class="success-hero-owner">{{ $successHero->infoPosition }}</p>
            <p class="success-hero-owner italic">{{ $successHero->infoOwner }}</p>
        </div>
        <div class="row d-flex align-center-top h-auto">
            @foreach ($successHero->sectors as $sector)
                <div class="col-md-4 col-xs-12 d-flex flex-h-center max-w-210 flex-column text-center h-45">
                    <img class="success-sector-icon" src="/assets/img/successStories/{{ $sector->icon }}"
                        alt="">
                    <p class="sector-title">{{ $sector->title }}</p>
                    <p class="sector-info">{{ $sector->info }}</p>
                </div>
            @endforeach
        </div>

    </div>
</div>
