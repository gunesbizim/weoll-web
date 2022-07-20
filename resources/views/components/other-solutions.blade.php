<div class="container">
    <div class="row">
        <div class="col-md-12 col-xs-12">
            <h3 class="blog-title">{{ $otherSolutions->sectionTitle }}</h3>
        </div>
        <div class="row">
            @foreach ($otherSolutions->solutions as $solution)
                @if (!str_contains(url()->current(), $solution->slug))
                    <div class="col-md-4 col-xs-12 icons-cont flex-row">
                        <div class="other-solution flex-row">
                            <img class="" src="/assets/img/solutions/otherSolutions/{{ $solution->icon }}"
                                alt="">
                            <h4>{{ $solution->title }}</h4>
                            <p> {{ $solution->info }}</p>
                        </div>
                        <a href="" class="other-solution-cta">Keşfet</a>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
</div>
