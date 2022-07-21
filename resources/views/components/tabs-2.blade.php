<div class="container">
    <div class="row">
        <div class="col-md-12 col-xs-12">
            <h2 class="blog-title"> {{ $tabsTwo->sectionTitle }}</h2>
            <h3 class="blog-subtitle"> {{ $tabsTwo->sectionSubTitle }}</h3>
        </div>
    </div>
    <div class="spacer-110"></div>

    <div class="row">
        <div class="col-md-6 col-xs-12 d-flex flex-column flex-v-center flex-h-center">
            @foreach ($tabsTwo->tabs as $tab)
                <img class="tabs-two-img {{ $loop->first ? 'selected' : '' }}" src="/assets/img/{{ $tab->img }}"
                    alt="" data-id={{ $loop->index }}>
            @endforeach
        </div>
        <div class="col-md-6 col-xs-12">
            @foreach ($tabsTwo->tabs as $tab)
                <div class="tab-cont-container {{ $loop->first ? 'selected' : '' }}" data-id="{{ $loop->index }}">
                    <div class="tab-img-cont">
                        <img src="/assets/img/icons/{{ $tab->icon }}" alt="">
                    </div>
                    <div class="tab-content-cont">
                        <h4 class="tabs-2-title">{{ $tab->title }}</h4>
                        <p class="tabs-2-cont"> {{ $tab->subtitle }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
