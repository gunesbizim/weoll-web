<div class="container testimonials-container">
    <div class="row">
        <div class="col-md-12">
            <div class="splide" role="group" aria-label="Testimonials">
                <div class="splide__track">
                    <ul class="splide__list">
                        @foreach ($testimonials->testimonials as $testimonial)
                            <li class="splide__slide">
                                <div class="testimonial-holder">
                                    <div class="row testimonial-grid">
                                        {{-- @dd($testimonial) --}}
                                        <div class="testimonial-img ">
                                            <img loading="lazy" src="/assets/img/testimonials/{{ $testimonial->img }}">
                                        </div>
                                        <div class="person-info">
                                            <p class="p-name">{{ $testimonial->name }}</p>
                                            <p class="p-position">{{ $testimonial->position }}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <p class="testimonial">
                                            {{ $testimonial->comment }}
                                        </p>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
