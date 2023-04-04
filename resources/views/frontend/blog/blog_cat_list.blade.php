@extends('frontend.frontend_dashboard')
@section('main')
@section('title')
  {{ $breadcat->category_name }} | Easy RealEstate  
@endsection

 <!--Page Title-->
       <section class="page-title-two bg-color-1 centred">
            <div class="pattern-layer">
                <div class="pattern-1" style="background-image: url({{ asset('frontend/assets/images/shape/shape-9.png') }});"></div>
                <div class="pattern-2" style="background-image: url({{ asset('frontend/assets/images/shape/shape-10.png') }});"></div>
            </div>
            <div class="auto-container">
                <div class="content-box clearfix">
                    <h1> {{ $breadcat->category_name }}  </h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.html">Home</a></li>
                        <li>{{ $breadcat->category_name }} </li>
                    </ul>
                </div>
            </div>
        </section>
        <!--End Page Title-->


        <!-- sidebar-page-container -->
        <section class="sidebar-page-container blog-grid sec-pad-2">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                        <div class="blog-grid-content">
                            <div class="row clearfix">


@foreach($blog as $item)
<div class="col-lg-6 col-md-6 col-sm-12 news-block">
<div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
    <div class="inner-box">
        <div class="image-box">
            <figure class="image"><a href="{{ url('blog/details/'.$item->post_slug) }}"><img src="{{ asset($item->post_image) }}" alt=""></a></figure>
            <span class="category">Featured</span>
        </div>
        <div class="lower-content">
            <h4><a href="{{ url('blog/details/'.$item->post_slug) }}">{{ $item->post_title }}</a></h4>
            <ul class="post-info clearfix">
                <li class="author-box">
                    <figure class="author-thumb"><img src="{{ (!empty($item->user->photo)) ? url('upload/admin_images/'.$item->user->photo) : url('upload/no_image.jpg') }}" alt=""></figure>
  <h5><a href=" ">{{ $item['user']['name'] }}</a></h5>
                </li>
                <li>{{ $item->created_at->format('M d Y') }}</li>
            </ul>
            <div class="text">
                <p>{{ $item->short_descp }}</p>
            </div>
            <div class="btn-box">
                <a href="{{ url('blog/details/'.$item->post_slug) }}" class="theme-btn btn-two">See Details</a>
            </div>
        </div>
    </div>
</div>
</div>
@endforeach


                             
                            </div>
                            <div class="pagination-wrapper">
                                <ul class="pagination clearfix">
                                    <li><a href="blog-1.html" class="current">1</a></li>
                                    <li><a href="blog-1.html">2</a></li>
                                    <li><a href="blog-1.html">3</a></li>
                                    <li><a href="blog-1.html"><i class="fas fa-angle-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                        <div class="blog-sidebar">
                            <div class="sidebar-widget search-widget">
                                <div class="widget-title">
                                    <h4>Search</h4>
                                </div>
                                <div class="search-inner">
                                    <form action="blog-1.html" method="post">
                                        <div class="form-group">
                                            <input type="search" name="search_field" placeholder="Search" required="">
                                            <button type="submit"><i class="fas fa-search"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="sidebar-widget social-widget">
                                <div class="widget-title">
                                    <h4>Follow Us On</h4>
                                </div>
                                <ul class="social-links clearfix">
                                    <li><a href="blog-1.html"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="blog-1.html"><i class="fab fa-google-plus-g"></i></a></li>
                                    <li><a href="blog-1.html"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="blog-1.html"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="blog-1.html"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                            <div class="sidebar-widget category-widget">
                                <div class="widget-title">
                                    <h4>Category</h4>
                                </div>
     <div class="widget-content">
        <ul class="category-list clearfix">
           @foreach($bcategory as $cat)

           @php
        $post = App\Models\BlogPost::where('blogcat_id',$cat->id)->get();
           @endphp


  <li><a href="{{ url('blog/cat/list/'.$cat->id) }}">{{ $cat->category_name }}<span>({{ count($post) }})</span></a></li>
            @endforeach
        </ul>
    </div>
                            </div>
                            <div class="sidebar-widget post-widget">
                                <div class="widget-title">
                                    <h4>Recent Posts</h4>
                                </div>
       <div class="post-inner">
        
    	@foreach($dpost as $post)
        <div class="post">
            <figure class="post-thumb"><a href="blog-details.html"><img src="{{ asset($post->post_image) }}" alt=""></a></figure>
            <h5><a href="blog-details.html">{{ $post->post_title }}</a></h5>
            <span class="post-date">{{ $post->created_at->format('M d Y') }}</span>
        </div>
      	@endforeach


    </div>
                            </div>
                           
                          
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- sidebar-page-container -->

        <!-- subscribe-section -->
        <section class="subscribe-section bg-color-3">
            <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-2.png);"></div>
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
