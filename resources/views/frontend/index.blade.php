@extends('frontend.frontend_dashboard')
@section('main')

@section('title')
  Easy Real Estate Complete Project  
@endsection

        <!-- banner-section -->
         @include('frontend.home.banner')
         <!-- banner-section end -->
 

 
<!-- category-section -->
  @include('frontend.home.category')
<!-- category-section end -->


        <!-- feature-section -->
       @include('frontend.home.feature')
        <!-- feature-section end -->


        <!-- video-section -->
         @include('frontend.home.video')
        <!-- video-section end -->


        <!-- deals-section -->
       @include('frontend.home.deals')
        <!-- deals-section end -->


        <!-- testimonial-section end -->
      @include('frontend.home.testimonial')
        <!-- testimonial-section end -->


        <!-- chooseus-section -->
         @include('frontend.home.chooseus')
        <!-- chooseus-section end -->


        <!-- place-section -->
        @include('frontend.home.place')
        <!-- place-section end -->


        <!-- team-section -->
         @include('frontend.home.team')
        <!-- team-section end -->


        <!-- cta-section -->
      @include('frontend.home.cta')
        <!-- cta-section end -->


        <!-- news-section -->
       @include('frontend.home.news')
        <!-- news-section end -->


        <!-- download-section -->
       @include('frontend.home.download')
        <!-- download-section end -->

@endsection
