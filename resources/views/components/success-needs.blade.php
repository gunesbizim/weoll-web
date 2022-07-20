<div class="container">
    <div class="row">
        <h3 class="text-center">{{ $successSections->needs->title }}</h2>
            <div class="spacer-60"></div>
            @foreach ($successSections->needs->subNeeds as $subNeed)
                <div class="col-md-6 col-xs-12">
                    <div class="need-container d-flex flex-h-center">
                        <img src="/assets/img/successStories/{{ $subNeed->icon }}" alt="">
                        <p>{{ $subNeed->info }}</p>
                    </div>
                </div>
            @endforeach
            {{-- @dd($successSections) --}}
            <div class="spacer-80"></div>
            <div class="brands-container d-flex">

                @foreach ($successSections->needs->brands as $brand)
                    <div class="col-md-4 text-center success-logo-cont">
                        <img src="/assets/img/successStories/{{ $brand->logo }}" alt="">
                        <p class="text-center">{{ $brand->info }}</p>
                    </div>
                @endforeach
            </div>

    </div>
    <div class="spacer-80"></div>
    <div class="row">
        <h3 class="text-center">{{ $successSections->earnings->title }}</h3>
        @foreach ($successSections->earnings->percentages as $percentage)
            <div class="col-md-6 col-xs-12">
                <div class="prograss-main-container border-r-5 d-flex flex-h-center">
                    <div class="progress-container border-r-5">
                        <div role="progressbar" aria-valuenow="{{ $percentage->percentage }}" aria-valuemin="0"
                            aria-valuemax="100" style="--value:{{ $percentage->percentage }}"></div>
                    </div>
                    <p>{{ $percentage->info }}</p>

                </div>

            </div>
        @endforeach

    </div>
    <div class="spacer-80"></div>
</div>
