<div class="container">
    <div class="row">
        <div class="col-md-12">
            {{-- @dd($homeBlogData) --}}
            <h2 class="blog-title">{{ $homeBlogData->sectionTitle }}</h2>
            <h3 class="blog-subtitle">{{ $homeBlogData->sectionSubTitle }}</h3>
        </div>
        <div class="spacer-80"></div>
        <div class="col-md-12">
            <div class="tab-selector">
                @foreach ($homeBlogData->tabs as $tab)
                    <div class="tab-title {{ $loop->first ? 'selected' : '' }}" data-id="{{ $loop->index }}">
                        <p>{{ $tab->title }}</p>
                    </div>
                @endforeach
            </div>
            @foreach ($homeBlogData->tabs as $tab)
                <div class="tab-content {{ $loop->first ? 'selected' : '' }}" data-id="{{ $loop->index }}">
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <p class="content-subtitle">{{ $tab->subtitle }}</p>

                            <ul>
                                @foreach ($tab->content as $cont)
                                    <li>
                                        <p>{{ $cont }}</p>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="col-xs-12 col-md-6 flex-v-center flex-h-center">
                            <img src="/assets/img/{{ $tab->img }}">
                        </div>

                    </div>
                </div>
            @endforeach
        </div>

    </div>
</div>
