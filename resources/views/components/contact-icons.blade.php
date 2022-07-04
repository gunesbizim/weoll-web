<div class="contact-icons">
    @foreach ($contactIcons as $icon)
        @if (str_contains($icon->url, '@'))
            <a href="mailto:{{ $icon->url }}">
                <img src="/assets/img/icons/{{ $icon->icon }}" alt="">
            </a>
        @elseif(str_contains($icon->url, '+'))
            <a href="tel:{{ $icon->url }}">
                <img src="/assets/img/icons/{{ $icon->icon }}" alt="">
            </a>
        @endif
    @endforeach
</div>
