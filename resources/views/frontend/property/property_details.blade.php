@extends('frontend.frontend_dashboard')
@section('main')


   <!--Page Title-->
        <section class="page-title-two bg-color-1 centred">
            <div class="pattern-layer">
                <div class="pattern-1" style="background-image: url({{ asset('frontend/assets/images/shape/shape-9.png') }});"></div>
                <div class="pattern-2" style="background-image: url({{ asset('frontend/assets/images/shape/shape-10.png') }});"></div>
            </div> 
            <div class="auto-container">
                <div class="content-box clearfix">
                    <h1>{{ $property->property_name }}</h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.html">Home</a></li>
                        <li>{{ $property->property_name }}</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--End Page Title-->


        <!-- property-details -->
        <section class="property-details property-details-one">
            <div class="auto-container">
                <div class="top-details clearfix">
                    <div class="left-column pull-left clearfix">
                        <h3>{{ $property->property_name }}</h3>
                        <div class="author-info clearfix">
                            <div class="author-box pull-left">
                  @if($property->agent_id == Null)
  <figure class="author-thumb"><img src="{{ url('upload/ariyan.jpg') }}" alt=""></figure>
                      <h6>Admin</h6>
                  @else

                    <figure class="author-thumb"><img src="{{ (!empty($property->user->photo)) ? url('upload/agent_images/'.$property->user->photo) : url('upload/no_image.jpg') }}" alt=""></figure>
                                <h6>{{ $property->user->name }}</h6>

                  @endif         



                            </div>
                            <ul class="rating clearfix pull-left">
                                <li><i class="icon-39"></i></li>
                                <li><i class="icon-39"></i></li>
                                <li><i class="icon-39"></i></li>
                                <li><i class="icon-39"></i></li>
                                <li><i class="icon-40"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="right-column pull-right clearfix">
                        <div class="price-inner clearfix">
                            <ul class="category clearfix pull-left">
     <li><a href="property-details.html">{{ $property->type->type_name }}</a></li>
                                <li><a href="property-details.html">For {{ $property->property_status }}</a></li>
                            </ul>
                            <div class="price-box pull-right">
                                <h3>${{ $property->lowest_price }}</h3>
                            </div>
                        </div>
                        <ul class="other-option pull-right clearfix">
                            <li><a href="property-details.html"><i class="icon-37"></i></a></li>
                            <li><a href="property-details.html"><i class="icon-38"></i></a></li>
                            <li><a href="property-details.html"><i class="icon-12"></i></a></li>
                            <li><a href="property-details.html"><i class="icon-13"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                        <div class="property-details-content">
    <div class="carousel-inner">
        <div class="single-item-carousel owl-carousel owl-theme owl-dots-none">
        	@foreach($multiImage as $img)
            <figure class="image-box"><img src="{{ asset($img->photo_name) }}" alt=""></figure>
            @endforeach
        </div>
    </div>
                            <div class="discription-box content-widget">
                                <div class="title-box">
                                    <h4>Property Description</h4>
                                </div>
                                <div class="text">
                                    <p>{!! $property->long_descp !!}</p>
                                </div>
                            </div>
                            <div class="details-box content-widget">
                                <div class="title-box">
                                    <h4>Property Details</h4>
                                </div>
    <ul class="list clearfix">
        <li>Property ID: <span>{{ $property->property_code }}</span></li>
        <li>Rooms: <span>{{ $property->bedrooms }}</span></li>
        <li>Garage Size: <span>{{ $property->garage_size }} Sq Ft</span></li>  
        
        <li>Property Type: <span>{{ $property->type->type_name }}</span></li>
        <li>Bathrooms: <span>{{ $property->bathrooms }}</span></li>
        <li>Property Status: <span>For {{ $property->property_status }}</span></li>
        <li>Property Size: <span>{{ $property->property_size }} Sq Ft</span></li>
        <li>Garage: <span>{{ $property->garage }}</span></li>
    </ul>
                            </div>
                            <div class="amenities-box content-widget">
                                <div class="title-box">
                                    <h4>Amenities</h4>
                                </div>
                                <ul class="list clearfix">
                                	@foreach($property_amen as $amen)
                                    <li>{{ $amen }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            
                            <div class="location-box content-widget">
                                <div class="title-box">
                                    <h4>Location</h4>
                                </div>
<ul class="info clearfix">
    <li><span>Address:</span> {{ $property->address }}</li> 
    <li><span>State/county:</span> {{ $property->state }}</li>
    <li><span>Neighborhood:</span> {{ $property->neighborhood }}</li>
    <li><span>Zip/Postal Code:</span> {{ $property->postal_code }}</li>
    <li><span>City:</span> {{ $property->city }}</li>
</ul>
<div class="google-map-area">
    <div 
        class="google-map" 
        id="contact-google-map" 
        data-map-lat="{{ $property->latitude }}" 
        data-map-lng="{{ $property->longitude }}" 
        data-icon-path="{{ asset('frontend/assets/images/icons/map-marker.png') }}"  
        data-map-title="Brooklyn, New York, United Kingdom" 
        data-map-zoom="12" 
        data-markers='{
            "marker-1": [40.712776, -74.005974, "<h4>Branch Office</h4><p>77/99 New York</p>","{{ asset('frontend/assets/images/icons/map-marker.png') }}"]
        }'>

    </div>
</div>
                            </div>
                            <div class="nearby-box content-widget">
                                <div class="title-box">
                                    <h4>What’s Nearby?</h4>
                                </div>
<div class="inner-box">


    <div class="single-item">
        <div class="icon-box"><i class="fas fa-book-reader"></i></div>
        <div class="inner">
            <h5>Places:</h5>

            @foreach($facility as $item)
            <div class="box clearfix">
                <div class="text pull-left">
                    <h6>{{ $item->facility_name }} <span>({{ $item->distance }} km)</span></h6>
                </div>
                <ul class="rating pull-right clearfix">
                    <li><i class="icon-39"></i></li>
                    <li><i class="icon-39"></i></li>
                    <li><i class="icon-39"></i></li>
                    <li><i class="icon-39"></i></li>
                    <li><i class="icon-40"></i></li>
                </ul>
            </div>
            @endforeach
        </div>
    </div>


    
    
                                </div>
                            </div>
                            <div class="statistics-box content-widget">
                                <div class="title-box">
                                    <h4>Property Video </h4>
                                </div>
<figure class="image-box">
   <iframe width="700" height="415" src="{{ $property->property_video }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
</figure>
                            </div>
                            <div class="schedule-box content-widget">
                                <div class="title-box">
                                    <h4>Schedule A Tour</h4>
                                </div>
                                <div class="form-inner">
                                    <form action="property-details.html" method="post">
                                        <div class="row clearfix">
                                            <div class="col-lg-6 col-md-12 col-sm-12 column">
                                                <div class="form-group">
                                                    <i class="far fa-calendar-alt"></i>
                                                    <input type="text" name="date" placeholder="Tour Date" id="datepicker">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12 col-sm-12 column">
                                                <div class="form-group">
                                                    <i class="far fa-clock"></i>
                                                    <input type="text" name="time" placeholder="Any Time">
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-12 col-sm-12 column">
                                                <div class="form-group">
                                                    <input type="text" name="name" placeholder="Your Name" required="">
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-12 col-sm-12 column">
                                                <div class="form-group">
                                                    <input type="email" name="email" placeholder="Your Email" required="">
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-12 col-sm-12 column">
                                                <div class="form-group">
                                                    <input type="tel" name="phone" placeholder="Your Phone" required="">
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 column">
                                                <div class="form-group">
                                                    <textarea name="message" placeholder="Your message"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 column">
                                                <div class="form-group message-btn">
                                                    <button type="submit" class="theme-btn btn-one">Submit Now</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
    <div class="property-sidebar default-sidebar">
        <div class="author-widget sidebar-widget">
            <div class="author-box">

             @if($property->agent_id == Null)

              <figure class="author-thumb"><img src="{{ url('upload/ariyan.jpg') }}" alt=""></figure>
                <div class="inner">
                    <h4>Admin </h4>
                    <ul class="info clearfix">
                        <li><i class="fas fa-map-marker-alt"></i>84 St. John Wood High Street, 
                        St Johns Wood</li>
                        <li><i class="fas fa-phone"></i><a href="tel:03030571965">030 3057 1965</a></li>
                    </ul>
                    <div class="btn-box"><a href="agents-details.html">View Listing</a></div>
                </div>

             @else

              <figure class="author-thumb"><img src="{{ (!empty($property->user->photo)) ? url('upload/agent_images/'.$property->user->photo) : url('upload/no_image.jpg') }}" alt=""></figure>
                <div class="inner">
                    <h4>{{ $property->user->name }}</h4>
                    <ul class="info clearfix">
                        <li><i class="fas fa-map-marker-alt"></i>{{ $property->user->address }}</li>
                        <li><i class="fas fa-phone"></i><a href="tel:03030571965">{{ $property->user->phone }}</a></li>
                    </ul>
                    <div class="btn-box"><a href="agents-details.html">View Listing</a></div>
                </div>

             @endif 

            </div>
                               


    <div class="form-inner">
@auth

@php
    $id = Auth::user()->id;
    $userData = App\Models\User::find($id);
@endphp

 <form action="{{ route('property.message') }}" method="post" class="default-form">
    @csrf 

    <input type="hidden" name="property_id" value="{{ $property->id }}">

    @if($property->agent_id == Null)
    <input type="hidden" name="agent_id" value="">

    @else
    <input type="hidden" name="agent_id" value="{{ $property->agent_id }}">
    @endif

            <div class="form-group">
                <input type="text" name="msg_name" placeholder="Your name" value="{{ $userData->name }}">
            </div>
            <div class="form-group">
                <input type="email" name="msg_email" placeholder="Your Email" value="{{ $userData->email }}">
            </div>
            <div class="form-group">
                <input type="text" name="msg_phone" placeholder="Phone" value="{{ $userData->phone }}">
            </div>
            <div class="form-group">
                <textarea name="message" placeholder="Message"></textarea>
            </div>
            <div class="form-group message-btn">
                <button type="submit" class="theme-btn btn-one">Send Message</button>
            </div>
        </form>

@else

<form action="{{ route('property.message') }}" method="post" class="default-form">
    @csrf 

    <input type="hidden" name="property_id" value="{{ $property->id }}">

    @if($property->agent_id == Null)
    <input type="hidden" name="agent_id" value="">

    @else
    <input type="hidden" name="agent_id" value="{{ $property->agent_id }}">
    @endif

            <div class="form-group">
                <input type="text" name="msg_name" placeholder="Your name" required="">
            </div>
            <div class="form-group">
                <input type="email" name="msg_email" placeholder="Your Email" required="">
            </div>
            <div class="form-group">
                <input type="text" name="msg_phone" placeholder="Phone" required="">
            </div>
            <div class="form-group">
                <textarea name="message" placeholder="Message"></textarea>
            </div>
            <div class="form-group message-btn">
                <button type="submit" class="theme-btn btn-one">Send Message</button>
            </div>
        </form>

@endauth
 


    </div>



</div>


                            <div class="calculator-widget sidebar-widget">
                                <div class="calculate-inner">
                                    <div class="widget-title">
                                        <h4>Mortgage Calculator</h4>
                                    </div>
                                    <form method="post" action="mortgage-calculator.html" class="default-form">
                                        <div class="form-group">
                                            <i class="fas fa-dollar-sign"></i>
                                            <input type="number" name="total_amount" placeholder="Total Amount">
                                        </div>
                                        <div class="form-group">
                                            <i class="fas fa-dollar-sign"></i>
                                            <input type="number" name="down_payment" placeholder="Down Payment">
                                        </div>
                                        <div class="form-group">
                                            <i class="fas fa-percent"></i>
                                            <input type="number" name="interest_rate" placeholder="Interest Rate">
                                        </div>
                                        <div class="form-group">
                                            <i class="far fa-calendar-alt"></i>
                                            <input type="number" name="loan" placeholder="Loan Terms(Years)">
                                        </div>
                                        <div class="form-group">
                                            <div class="select-box">
                                                <select class="wide">
                                                   <option data-display="Monthly">Monthly</option>
                                                   <option value="1">Yearly</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group message-btn">
                                            <button type="submit" class="theme-btn btn-one">Calculate Now</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="similar-content">
                    <div class="title">
                        <h4>Similar Properties</h4>
                    </div>
                    <div class="row clearfix">

@foreach($relatedProperty as $item)
<div class="col-lg-4 col-md-6 col-sm-12 feature-block">
    <div class="feature-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
        <div class="inner-box">
            <div class="image-box">
                <figure class="image"><img src="{{ asset($item->property_thambnail  ) }}" alt=""></figure>
                <div class="batch"><i class="icon-11"></i></div>
                <span class="category">{{ $item->type->type_name }}</span>
            </div>
            <div class="lower-content">
                <div class="author-info clearfix">
                    <div class="author pull-left">
                      @if($item->agent_id == Null)

     <figure class="author-thumb"><img src="{{ url('upload/ariyan.jpg') }}" alt=""></figure>
                <h6>Admin </h6>

           @else

           <figure class="author-thumb"><img src="{{ (!empty($item->user->photo)) ? url('upload/agent_images/'.$item->user->photo) : url('upload/no_image.jpg') }}" alt=""></figure>
                 <h6>{{ $item->user->name }}</h6>
           @endif    
                    </div>
                    <div class="buy-btn pull-right"><a href="property-details.html">For {{ $item->property_status }}</a></div>
                </div>
                <div class="title-text"><h4><a href="{{ url('property/details/'.$item->id.'/'.$item->property_slug) }}">{{ $item->property_name }}</a></h4></div>
                <div class="price-box clearfix">
                    <div class="price-info pull-left">
                        <h6>Start From</h6>
                        <h4>${{ $item->lowest_price }}</h4>
                    </div>
                    <ul class="other-option pull-right clearfix">
                        <li><a href="property-details.html"><i class="icon-12"></i></a></li>
                        <li><a href="property-details.html"><i class="icon-13"></i></a></li>
                    </ul>
                </div>
                 <p>{{ $item->short_descp }}</p>
                        <ul class="more-details clearfix">
                            <li><i class="icon-14"></i>{{ $item->bedrooms }} Beds</li>
                            <li><i class="icon-15"></i>{{ $item->bathrooms }} Baths</li>
                            <li><i class="icon-16"></i>{{ $item->property_size }} Sq Ft</li>
                        </ul>
                <div class="btn-box"><a href="{{ url('property/details/'.$item->id.'/'.$item->property_slug) }}" class="theme-btn btn-two">See Details</a></div>
            </div>
        </div>
    </div>
</div>
@endforeach

                        
                     
                    </div>
                </div>
            </div>
        </section>
        <!-- property-details end -->


        <!-- subscribe-section -->
        <section class="subscribe-section bg-color-3">
            <div class="pattern-layer" style="background-image: url({{ asset('frontend/assets/images/shape/shape-2.png') }});"></div>
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-6 col-sm-12 text-column">
                        <div class="text">
                            <span>Subscribe</span>
                            <h2>Sign Up To Our Newsletter To Get The Latest News And Offers.</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 form-column">
                        <div class="form-inner">
                            <form action="contact.html" method="post" class="subscribe-form">
                                <div class="form-group">
                                    <input type="email" name="email" placeholder="Enter your email" required="">
                                    <button type="submit">Subscribe Now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- subscribe-section end -->






@endsection
