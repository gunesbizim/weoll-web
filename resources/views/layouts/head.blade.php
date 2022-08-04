<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta http-equiv="ScreenOrientation" content="autoRotate:disabled">
<link rel="shortcut icon" type="image/png" href="/favicon.png" />
<title>
    @php
        if (isset($title)) {
            $title = 'Weoll | ' . $title;
        } else {
            $title = 'Weoll';
        }
    @endphp
    {{ $title }}</title>
<meta name="description" content="{{ $metadesc ?? '' }}">
<meta name="csrf-token" content="{{ csrf_token() }}" />
{{-- GTM START --}}
<script>
    (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start': new Date().getTime(),
            event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
            'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-59C36BC');
</script>
{{-- GTM END --}}

<link rel="icon" href="{{ asset('favicon.ico') }}">
<script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}" crossorigin="anonymous"></script>

<script src="https://kit.fontawesome.com/65ac33d373.js" crossorigin="anonymous"></script>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500&display=swap" rel="stylesheet">

<link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" crossorigin="anonymous">

{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script> --}}
<link href="{{ asset('assets/css/style.css') }}?v={{ time() }}" rel="stylesheet">
