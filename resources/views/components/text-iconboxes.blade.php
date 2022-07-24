<div class="container">
    <div class="row">
        <div class="col-md-12 col-xs-12">
            <h2 class="blog-title">{{ $discoverWeollBoxes->sectionTitle }}</h2>
            <p class="blog-subtitle">{{ $discoverWeollBoxes->sectionSubTitle }}</p>
        </div>
    </div>
    <div class="spacer-60"></div>
    <div class="row d-column d-flex">
        @foreach ($discoverWeollBoxes->contBoxes as $box)
            <div class="col-md-6 col-xs-12">
                <div class="tab-cont-container visible m-12 border-r-5">
                    <div class="tab-img-cont">
                        <img loading="lazy" src="/assets/img/discover-weoll/{{ $box->icon }}" alt="">
                    </div>
                    <div class="tab-content-cont">
                        <h4 class="tabs-2-title">{{ $box->title }}</h4>
                        <p class="tabs-2-cont"> {{ $box->subtitle }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
