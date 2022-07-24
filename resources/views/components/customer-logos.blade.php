<div class="container logo-container">
    <div class="row flex-h-center flex-v-center">
        @foreach ($customerLogos as $logo)
            <div class="col">
                <img loading="lazy" class="customer-logo" src="/assets/img/customer_logos/{{ $logo->img }}"
                    alt="{{ $logo->alt }}">

            </div>
        @endforeach
    </div>
</div>
