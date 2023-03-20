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
                    <h1>WishList Property </h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.html">Home</a></li>
                        <li>WishList Property</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--End Page Title-->


        <!-- property-page-section -->
        <section class="property-page-section property-list">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                         
        @php

            $id = Auth::user()->id;
            $userData = App\Models\User::find($id); 
        @endphp


   <div class="blog-sidebar">
  <div class="sidebar-widget post-widget">
                    <div class="widget-title">
                        <h4>User Profile </h4>
                    </div>
                       <div class="post-inner">
                        <div class="post">
                            <figure class="post-thumb"><a href="blog-details.html">
        <img src="{{ (!empty($userData->photo)) ? url('upload/user_images/'.$userData->photo) : url('upload/no_image.jpg') }}" alt=""></a></figure>
        <h5><a href="blog-details.html">{{ $userData->name }} </a></h5>
         <p>{{ $userData->email }} </p>
                        </div> 
                    </div>
                </div> 


<div class="sidebar-widget category-widget">
            <div class="widget-title">
                
            </div>
             @include('frontend.dashboard.dashboard_sidebar')


          </div> 
</div>






                    </div>
                    <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                        <div class="property-content-side">
                            
                            <div class="wrapper list">
                                <div class="deals-list-content list-item">
                                 


    <div class="deals-block-one">
        <div class="inner-box">
            <div class="image-box">
                <figure class="image"><img src="assets/images/resource/deals-3.jpg" alt=""></figure>
                <div class="batch"><i class="icon-11"></i></div>
                <span class="category">Featured</span>
                <div class="buy-btn"><a href="property-details.html">For Buy</a></div>
            </div>
            <div class="lower-content">
                <div class="title-text"><h4><a href="property-details.html">Villa on Grand Avenue</a></h4></div>
                <div class="price-box clearfix">
                    <div class="price-info pull-left">
                        <h6>Start From</h6>
                        <h4>$30,000.00</h4>
                    </div>
                     
                </div>
               
                <ul class="more-details clearfix">
                    <li><i class="icon-14"></i>3 Beds</li>
                    <li><i class="icon-15"></i>2 Baths</li>
                    <li><i class="icon-16"></i>600 Sq Ft</li>
                </ul>
                <div class="other-info-box clearfix">
                    
                    <ul class="other-option pull-right clearfix">
                       
                        <li><a href="property-details.html"><i class="icon-13"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
               </div> 
                           
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- property-page-section end -->


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