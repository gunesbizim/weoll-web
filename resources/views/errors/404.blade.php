<!DOCTYPE html>
<html lang="tr">

<head>
    <title>Aradığınız Sayfa Bulunamadı</title>
    @include('layouts.head')

</head>

<body>
    <header>
        <div class="header-container">
            <div class="logo col-md-1 d-flex flex-h-center">
                <a href="{{ url('') }}"><img src="{{ asset('/assets/img/weoll-logo.svg') }}" alt=""></a>
            </div>
            <div class="menu col-md-11 d-flex flex-h-center">
                <ul class="navigator">
                    @foreach ($menu as $menuItem)
                        <li class="nav-link"><a href="{{ $menuItem['url'] !== '#' ? route($menuItem['url']) : ' ' }} ">
                                {{ $menuItem['title'] }}</a>
                            @if (count($menuItem['sub-menus']) > 0)
                                <ul class="hidden-sub">

                                    @foreach ($menuItem['sub-menus'] as $subMenuItem)
                                        <li>
                                            <a
                                                href="{{ route($subMenuItem['url']) }}">{{ $subMenuItem['title'] }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            @endif

                        </li>
                    @endforeach
                </ul>
                <a class="cta" href="/{{ $cta['url'] }}">{{ $cta['title'] }}</a>

            </div>
        </div>

        {{-- <div class="cta col-md-2">
            @dd($cta)
            <a href="/{{ $cta['url'] }}">{{ $cta['title'] }}</a>
        </div> --}}
    </header>
    <div class="spacer-80"></div>
    <div class="container fourofour">
        <div class="row d-flex flex-column flex-v-center flex-h-center">
            <img src="/assets/img/404.svg" alt="404 Error" class="img404">
            <a href="/" class="btn404">Ana Sayfa</a>
        </div>
    </div>
    <div class="spacer-110"></div>

    @include('components.contact-icons')

    @include('layouts.footer')
</body>

</html>
