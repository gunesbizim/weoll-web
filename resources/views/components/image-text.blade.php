<div class="container">
    @foreach ($sections as $section)
        @if (!$loop->first)
            <div class="spacer-110"></div>
        @endif
        <div class="row {{ $section->reversed ? 'reversed' : '' }}">
            <div class="col-md-6 col-xs-12 text-center">
                <img src="/assets/img/{{ $section->img }}" alt="">
            </div>
            <div class="col-md-6 col-xs-12 flex-v-center flex-column">
                <h2>{{ $section->title }}</h2>
                <p>{{ $section->text }}</p>
            </div>
        </div>
    @endforeach

</div>
