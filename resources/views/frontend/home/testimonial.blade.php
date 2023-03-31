@php
 $tesimonials = App\Models\Testimonial::latest()->get();
@endphp

  <section class="testimonial-section bg-color-1 centred">
            <div class="pattern-layer" style="background-image: url({{ asset('frontend/assets/images/shape/shape-1.png') }});"></div>
            <div class="auto-container">
                <div class="sec-title">
                    <h5>Testimonials</h5>
                    <h2>What They Say About Us</h2>
                </div>
                <div class="single-item-carousel owl-carousel owl-theme owl-dots-none nav-style-one">

        @foreach($tesimonials as $item)
        <div class="testimonial-block-one">
            <div class="inner-box">
                <figure class="thumb-box"><img src="{{ asset($item->image) }}" alt=""></figure>
                <div class="text">
                    <p>{{ $item->message }}</p>
                </div>
                <div class="author-info">
                    <h4>{{ $item->name }}</h4>
                    <span class="designation">{{ $item->position }}</span>
                </div>
            </div>
        </div>
            @endforeach         
                
                </div>
            </div>
        </section>