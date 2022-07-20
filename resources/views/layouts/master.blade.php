<!DOCTYPE html>
<html lang="tr">

<head>
    @include('layouts.head')
    @yield('custom-css')
</head>

<body>
    <header>
        <div class="header-container">
            <div class="logo col-md-1 d-flex flex-h-center col-xs-6">
                <a href="{{ url('') }}"><img src="{{ asset('/assets/img/weoll-logo.svg') }}" alt=""></a>
            </div>
            <div class="menu col-md-11 d-flex flex-h-center col-xs-6">
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
                    <li class="nav-link no-border">
                        <a class="cta mobile" href="/{{ $cta['url'] }}">{{ $cta['title'] }}</a>

                    </li>
                </ul>
                <a class="cta desktop" href="/{{ $cta['url'] }}">{{ $cta['title'] }}</a>
                <div class="mobile menu-toggle">
                    <i class="fa-solid fa-bars mobile"></i>
                    <i class="fa-solid fa-xmark mobile"></i>
                </div>
            </div>
        </div>

        {{-- <div class="cta col-md-2">
            @dd($cta)
            <a href="/{{ $cta['url'] }}">{{ $cta['title'] }}</a>
        </div> --}}
    </header>
    @include('components.contact-icons')
    @yield('content')
    @if (isset($footerform) && $footerform != true)
    @else
        @include('layouts.footer-form')
    @endif

    @include('layouts.footer')

    @yield('custom-script')

    @yield('custom-middle-script')

    @yield('custom-last-script')

    @include('layouts.last-scripts')


</body>

</html>
