<div class="container">
    <div class="col-md-12">
        {{-- @dd($homeBlogData) --}}
        <h2 class="blog-title">{{ $solutionsTab->sectionTitle }}</h2>
    </div>
    <div class="spacer-80"></div>
    <div class="col-md-12">
        <div class="tab-selector">
            @foreach ($solutionsTab->tabs as $tab)
                <div class="tab-title {{ $loop->first ? 'selected' : '' }}" data-id="{{ $loop->index }}">
                    <p>{{ $tab->title }}</p>
                </div>
            @endforeach
        </div>
        @foreach ($solutionsTab->tabs as $tab)
            <div class="tab-content bordered {{ $loop->first ? 'selected' : '' }}" data-id="{{ $loop->index }}">
                <div class="row">
                    <div class="col-xs-12 col-md-6">
                        <div class="row">
                            @foreach ($tab->icons as $icon)
                                <div class="col-md-6">
                                    <div class="tab-icon-container">
                                        <div class="tab-icon d-flex flex-h-center">
                                            <img src="/assets/img/solutions/humanRes/{{ $icon->icon }}"
                                                alt="{{ $icon->alt }}">
                                        </div>
                                        <div class="tab-info d-flex flex-h-center">
                                            <p>{{ $icon->title }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="col-xs-12 col-md-6 flex-v-center flex-h-center">
                        <img src="/assets/img/solutions/humanRes/{{ $tab->img }}">
                    </div>

                </div>
            </div>
        @endforeach
    </div>
</div>
