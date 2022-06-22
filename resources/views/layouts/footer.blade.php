<footer>

    <div class="row spacing">
        <div class="col-md-12 col-xs-12 d-grid grid-md-4">

            @foreach ($menu as $menuItem)
                <div class="footer-menu-cont {{ $loop->index > 3 ? 'footer-spacing' : '' }}">
                    <h4><a
                            href="{{ $menuItem['url'] !== '#' ? route($menuItem['url']) : ' ' }} ">{{ $menuItem['title'] }}</a>
                    </h4>
                    @if (count($menuItem['sub-menus']) > 0)
                        @foreach ($menuItem['sub-menus'] as $subMenuItem)
                            <a href="{{ route($subMenuItem['url']) }}">{{ $subMenuItem['title'] }}</a>
                        @endforeach
                    @endif
                </div>
            @endforeach
        </div>


    </div>
    <div class="row">
        <div class="col-md-6">
            <img class="footer-logo" src="assets/img/weoll-footer-logo.svg" alt="">
        </div>
        <div class="col-md-6">
            <div class="newsletter-container">
                <form action="">

                </form>
            </div>
        </div>
    </div>

    <div class="row footer-border-top">
        <div class="col-md-6">
            <p class="copyright">Copyright © {{ now()->year }} Global IT.<br>
                All Rights Reserved.</p>
        </div>
        <div class="col-md-6 flex-h-center flex-v-end d-flex">
            <div class="social-media-container d-flex flex-h-center">
                @foreach ($socialMedias as $social)
                    <div class="social">
                        <a href="{{ $social->url }}"> <img src="/assets/img/icons/{{ $social->img }}"
                                alt="{{ $social->alt }}"> </a>
                    </div>
                @endforeach

            </div>
        </div>
    </div>

</footer>
