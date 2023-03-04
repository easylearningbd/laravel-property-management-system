@extends('frontend.frontend_dashboard')
@section('main')

        <!-- banner-section -->
 <section class="banner-section" style="background-image: url({{ asset('frontend/assets/images/banner/banner-1.jpg') }});">
            <div class="auto-container">
                <div class="inner-container">
                    <div class="content-box centred">
                        <h2>Create Lasting Wealth Through Realshed</h2>
                        <p>Amet consectetur adipisicing elit sed do eiusmod.</p>
                    </div>
                    <div class="search-field">
                        <div class="tabs-box">
                            <div class="tab-btn-box">
                                <ul class="tab-btns tab-buttons centred clearfix">
                                    <li class="tab-btn active-btn" data-tab="#tab-1">BUY</li>
                                    <li class="tab-btn" data-tab="#tab-2">RENT</li>
                                </ul>
                            </div>
<div class="tabs-content info-group">
<div class="tab active-tab" id="tab-1">
<div class="inner-box">
<div class="top-search">
<form action="index.html" method="post" class="search-form">
    <div class="row clearfix">
        <div class="col-lg-4 col-md-12 col-sm-12 column">
            <div class="form-group">
                <label>Search Property</label>
                <div class="field-input">
                    <i class="fas fa-search"></i>
                    <input type="search" name="search-field" placeholder="Search by Property, Location or Landmark..." required="">
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 column">
            <div class="form-group">
                <label>Location</label>
                <div class="select-box">
                    <i class="far fa-compass"></i>
                    <select class="wide">
                       <option data-display="Input location">Input location</option>
                       <option value="1">New York</option>
                       <option value="2">California</option>
                       <option value="3">London</option>
                       <option value="4">Maxico</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 column">
            <div class="form-group">
                <label>Property Type</label>
                <div class="select-box">
                    <select class="wide">
                       <option data-display="All Type">All Type</option>
                       <option value="1">Laxury</option>
                       <option value="2">Classic</option>
                       <option value="3">Modern</option>
                       <option value="4">New</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="search-btn">
        <button type="submit"><i class="fas fa-search"></i>Search</button>
    </div>
</form>
</div>
<div class="switch_btn_one ">
<button class="nav-btn nav-toggler navSidebar-button clearfix search__toggler">Advanced Search<i class="fas fa-angle-down"></i></button>
<div class="advanced-search">
    <div class="close-btn">
        <a href="#" class="close-side-widget"><i class="far fa-times"></i></a>
    </div>
    <div class="row clearfix">
        <div class="col-lg-4 col-md-6 col-sm-12 column">
            <div class="form-group">
                <label>Distance from Location</label>
                <div class="select-box">
                    <select class="wide">
                       <option data-display="Distance from Location">Distance from Location</option>
                       <option value="1">Max Bath</option>
                       <option value="2">Within 1 Mile</option>
                       <option value="3">Within 2 Mile</option>
                       <option value="4">Within 3 Mile</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 column">
            <div class="form-group">
                <label>Bedrooms</label>
                <div class="select-box">
                    <select class="wide">
                       <option data-display="Max Rooms">Max Rooms</option>
                       <option value="1">One Rooms</option>
                       <option value="2">Two Rooms</option>
                       <option value="3">Three Rooms</option>
                       <option value="4">Four Rooms</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 column">
            <div class="form-group">
                <label>Sort by</label>
                <div class="select-box">
                    <select class="wide">
                       <option data-display="Most Popular">Most Popular</option>
                       <option value="1">Top Rating</option>
                       <option value="2">New Rooms</option>
                       <option value="3">Classic Rooms</option>
                       <option value="4">Luxry Rooms</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 column">
            <div class="form-group">
                <label>Floor</label>
                <div class="select-box">
                    <select class="wide">
                       <option data-display="Select Floor">Select Floor</option>
                       <option value="1">One Floor</option>
                       <option value="2">Two Floor</option>
                       <option value="3">Three Floor</option>
                       <option value="4">Four Floor</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 column">
            <div class="form-group">
                <label>Bath</label>
                <div class="select-box">
                    <select class="wide">
                       <option data-display="Max Bath">Max Bath</option>
                       <option value="1">Max Bath</option>
                       <option value="2">Max Bath</option>
                       <option value="3">Max Bath</option>
                       <option value="4">Max Bath</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 column">
            <div class="form-group">
                <label>Agencies</label>
                <div class="select-box">
                    <select class="wide">
                       <option data-display="Any Agency">Any Agency</option>
                       <option value="1">Any Agency</option>
                       <option value="2">Agency 01</option>
                       <option value="3">Agency 02</option>
                       <option value="4">Agency 03</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="range-box">
        <div class="row clearfix">
            <div class="col-lg-6 col-md-6 col-sm-12 column">
                <div class="price-range">
                    <h6>Select Price Range</h6>
                    <div class="range-input">
                        <div class="input"><input type="text" class="property-amount" name="field-name" readonly=""></div>
                    </div>
                    <div class="price-range-slider"></div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 column">
                <div class="area-range">
                    <h6>Select Area</h6>
                    <div class="range-input">
                        <div class="input"><input type="text" class="area-range" name="field-name" readonly=""></div>
                    </div>
                    <div class="area-range-slider"></div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
<div class="tab" id="tab-2">
<div class="inner-box">
<div class="top-search">
<form action="index.html" method="post" class="search-form">
    <div class="row clearfix">
        <div class="col-lg-4 col-md-12 col-sm-12 column">
            <div class="form-group">
                <label>Search Property</label>
                <div class="field-input">
                    <i class="fas fa-search"></i>
                    <input type="search" name="search-field" placeholder="Search by Property, Location or Landmark..." required="">
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 column">
            <div class="form-group">
                <label>Location</label>
                <div class="select-box">
                    <i class="far fa-compass"></i>
                    <select class="wide">
                       <option data-display="Input location">Input location</option>
                       <option value="1">New York</option>
                       <option value="2">California</option>
                       <option value="3">London</option>
                       <option value="4">Maxico</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 column">
            <div class="form-group">
                <label>Property Type</label>
                <div class="select-box">
                    <select class="wide">
                       <option data-display="All Type">All Type</option>
                       <option value="1">Laxury</option>
                       <option value="2">Classic</option>
                       <option value="3">Modern</option>
                       <option value="4">New</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="search-btn">
        <button type="submit"><i class="fas fa-search"></i>Search</button>
    </div>
</form>
</div>
<div class="switch_btn_one ">
<button class="nav-btn nav-toggler navSidebar-button clearfix search__toggler">Advanced Search<i class="fas fa-angle-down"></i></button>
<div class="advanced-search">
    <div class="close-btn">
        <a href="#" class="close-side-widget"><i class="far fa-times"></i></a>
    </div>
    <div class="row clearfix">
        <div class="col-lg-4 col-md-6 col-sm-12 column">
            <div class="form-group">
                <label>Distance from Location</label>
                <div class="select-box">
                    <select class="wide">
                       <option data-display="Distance from Location">Distance from Location</option>
                       <option value="1">Max Bath</option>
                       <option value="2">Within 1 Mile</option>
                       <option value="3">Within 2 Mile</option>
                       <option value="4">Within 3 Mile</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 column">
            <div class="form-group">
                <label>Bedrooms</label>
                <div class="select-box">
                    <select class="wide">
                       <option data-display="Max Rooms">Max Rooms</option>
                       <option value="1">One Rooms</option>
                       <option value="2">Two Rooms</option>
                       <option value="3">Three Rooms</option>
                       <option value="4">Four Rooms</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 column">
            <div class="form-group">
                <label>Sort by</label>
                <div class="select-box">
                    <select class="wide">
                       <option data-display="Most Popular">Most Popular</option>
                       <option value="1">Top Rating</option>
                       <option value="2">New Rooms</option>
                       <option value="3">Classic Rooms</option>
                       <option value="4">Luxry Rooms</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 column">
            <div class="form-group">
                <label>Floor</label>
                <div class="select-box">
                    <select class="wide">
                       <option data-display="Select Floor">Select Floor</option>
                       <option value="1">One Floor</option>
                       <option value="2">Two Floor</option>
                       <option value="3">Three Floor</option>
                       <option value="4">Four Floor</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 column">
            <div class="form-group">
                <label>Bath</label>
                <div class="select-box">
                    <select class="wide">
                       <option data-display="Max Bath">Max Bath</option>
                       <option value="1">Max Bath</option>
                       <option value="2">Max Bath</option>
                       <option value="3">Max Bath</option>
                       <option value="4">Max Bath</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 column">
            <div class="form-group">
                <label>Agencies</label>
                <div class="select-box">
                    <select class="wide">
                       <option data-display="Any Agency">Any Agency</option>
                       <option value="1">Any Agency</option>
                       <option value="2">Agency 01</option>
                       <option value="3">Agency 02</option>
                       <option value="4">Agency 03</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="range-box">
        <div class="row clearfix">
            <div class="col-lg-6 col-md-6 col-sm-12 column">
                <div class="price-range">
                    <h6>Select Price Range</h6>
                    <div class="range-input">
                        <div class="input"><input type="text" class="property-amount" name="field-name" readonly=""></div>
                    </div>
                    <div class="price-range-slider"></div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 column">
                <div class="area-range">
                    <h6>Select Area</h6>
                    <div class="range-input">
                        <div class="input"><input type="text" class="area-range" name="field-name" readonly=""></div>
                    </div>
                    <div class="area-range-slider"></div>
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
</div>
</div>
</div>
</section>
<!-- banner-section end -->


<!-- category-section -->
<section class="category-section centred">
<div class="auto-container">
<div class="inner-container wow slideInLeft animated" data-wow-delay="00ms" data-wow-duration="1500ms">
<ul class="category-list clearfix">
<li>
<div class="category-block-one">
<div class="inner-box">
<div class="icon-box"><i class="icon-1"></i></div>
<h5><a href="property-details.html">Residential</a></h5>
<span>52</span>
</div>
</div>
</li>
<li>
<div class="category-block-one">
<div class="inner-box">
<div class="icon-box"><i class="icon-2"></i></div>
<h5><a href="property-details.html">Commercial</a></h5>
<span>20</span>
</div>
</div>
</li>
<li>
<div class="category-block-one">
<div class="inner-box">
<div class="icon-box"><i class="icon-3"></i></div>
<h5><a href="property-details.html">Appertment</a></h5>
<span>35</span>
</div>
</div>
</li>
<li>
<div class="category-block-one">
<div class="inner-box">
<div class="icon-box"><i class="icon-4"></i></div>
<h5><a href="property-details.html">Industrial</a></h5>
<span>10</span>
</div>
</div>
</li>
<li>
<div class="category-block-one">
<div class="inner-box">
<div class="icon-box"><i class="icon-5"></i></div>
<h5><a href="property-details.html">Building Code</a></h5>
<span>27</span>
</div>
</div>
</li>
</ul>
<div class="more-btn"><a href="categories.html" class="theme-btn btn-one">All Categories</a></div>
</div>
</div>
</section>
<!-- category-section end -->


        <!-- feature-section -->
        <section class="feature-section sec-pad bg-color-1">
            <div class="auto-container">
                <div class="sec-title centred">
                    <h5>Features</h5>
                    <h2>Featured Property</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing sed do eiusmod tempor incididunt <br />labore dolore magna aliqua enim.</p>
                </div>
                <div class="row clearfix">


                    <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                        <div class="feature-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><img src="{{ asset('frontend/assets/images/feature/feature-1.jpg') }}" alt=""></figure>
                                    <div class="batch"><i class="icon-11"></i></div>
                                    <span class="category">Featured</span>
                                </div>
                                <div class="lower-content">
                                    <div class="author-info clearfix">
                                        <div class="author pull-left">
                                            <figure class="author-thumb"><img src="{{ asset('frontend/assets/images/feature/author-1.jpg') }}" alt=""></figure>
                                            <h6>Michael Bean</h6>
                                        </div>
                                        <div class="buy-btn pull-right"><a href="property-details.html">For Buy</a></div>
                                    </div>
                                    <div class="title-text"><h4><a href="property-details.html">Villa on Grand Avenue</a></h4></div>
                                    <div class="price-box clearfix">
                                        <div class="price-info pull-left">
                                            <h6>Start From</h6>
                                            <h4>$30,000.00</h4>
                                        </div>
                                        <ul class="other-option pull-right clearfix">
                                            <li><a href="property-details.html"><i class="icon-12"></i></a></li>
                                            <li><a href="property-details.html"><i class="icon-13"></i></a></li>
                                        </ul>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing sed.</p>
                                    <ul class="more-details clearfix">
                                        <li><i class="icon-14"></i>3 Beds</li>
                                        <li><i class="icon-15"></i>2 Baths</li>
                                        <li><i class="icon-16"></i>600 Sq Ft</li>
                                    </ul>
                                    <div class="btn-box"><a href="property-details.html" class="theme-btn btn-two">See Details</a></div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                        <div class="feature-block-one wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><img src="{{ asset('frontend/assets/images/feature/feature-2.jpg') }}" alt=""></figure>
                                    <div class="batch"><i class="icon-11"></i></div>
                                    <span class="category">Featured</span>
                                </div>
                                <div class="lower-content">
                                    <div class="author-info clearfix">
                                        <div class="author pull-left">
                                            <figure class="author-thumb"><img src="{{ asset('frontend/assets/images/feature/author-2.jpg') }}" alt=""></figure>
                                            <h6>Robert Niro</h6>
                                        </div>
                                        <div class="buy-btn pull-right"><a href="property-details.html">For Rent</a></div>
                                    </div>
                                    <div class="title-text"><h4><a href="property-details.html">Contemporary Apartment</a></h4></div>
                                    <div class="price-box clearfix">
                                        <div class="price-info pull-left">
                                            <h6>Start From</h6>
                                            <h4>$45,000.00</h4>
                                        </div>
                                        <ul class="other-option pull-right clearfix">
                                            <li><a href="property-details.html"><i class="icon-12"></i></a></li>
                                            <li><a href="property-details.html"><i class="icon-13"></i></a></li>
                                        </ul>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing sed.</p>
                                    <ul class="more-details clearfix">
                                        <li><i class="icon-14"></i>3 Beds</li>
                                        <li><i class="icon-15"></i>2 Baths</li>
                                        <li><i class="icon-16"></i>600 Sq Ft</li>
                                    </ul>
                                    <div class="btn-box"><a href="property-details.html" class="theme-btn btn-two">See Details</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                        <div class="feature-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><img src="{{ asset('frontend/assets/images/feature/feature-3.jpg') }}" alt=""></figure>
                                    <div class="batch"><i class="icon-11"></i></div>
                                    <span class="category">Featured</span>
                                </div>
                                <div class="lower-content">
                                    <div class="author-info clearfix">
                                        <div class="author pull-left">
                                            <figure class="author-thumb"><img src="{{ asset('frontend/assets/images/feature/author-3.jpg') }}" alt=""></figure>
                                            <h6>Keira Mel</h6>
                                        </div>
                                        <div class="buy-btn pull-right"><a href="property-details.html">Sold Out</a></div>
                                    </div>
                                    <div class="title-text"><h4><a href="property-details.html">Luxury Villa With Pool</a></h4></div>
                                    <div class="price-box clearfix">
                                        <div class="price-info pull-left">
                                            <h6>Start From</h6>
                                            <h4>$63,000.00</h4>
                                        </div>
                                        <ul class="other-option pull-right clearfix">
                                            <li><a href="property-details.html"><i class="icon-12"></i></a></li>
                                            <li><a href="property-details.html"><i class="icon-13"></i></a></li>
                                        </ul>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing sed.</p>
                                    <ul class="more-details clearfix">
                                        <li><i class="icon-14"></i>3 Beds</li>
                                        <li><i class="icon-15"></i>2 Baths</li>
                                        <li><i class="icon-16"></i>600 Sq Ft</li>
                                    </ul>
                                    <div class="btn-box"><a href="property-details.html" class="theme-btn btn-two">See Details</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="more-btn centred"><a href="property-list.html" class="theme-btn btn-one">View All Listing</a></div>
            </div>
        </section>
        <!-- feature-section end -->


        <!-- video-section -->
        <section class="video-section centred" style="background-image: url({{ asset('frontend/assets/images/background/video-1.jpg') }});">
            <div class="auto-container">
                <div class="video-inner">
                    <div class="video-btn">
                        <a href="https://www.youtube.com/watch?v=nfP5N9Yc72A&amp;t=28s" class="lightbox-image" data-caption=""><i class="icon-17"></i></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- video-section end -->


        <!-- deals-section -->
        <section class="deals-section sec-pad">
            <div class="auto-container">
                <div class="sec-title">
                    <h5>Hot Property</h5>
                    <h2>Our Best Deals</h2>
                </div>
                 
 <div class="row clearfix">

   <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                        <div class="feature-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><img src="{{ asset('frontend/assets/images/feature/feature-1.jpg') }}" alt=""></figure>
                                    <div class="batch"><i class="icon-11"></i></div>
                                    <span class="category">Featured</span>
                                </div>
                                <div class="lower-content">
                                    <div class="author-info clearfix">
                                        <div class="author pull-left">
                                            <figure class="author-thumb"><img src="{{ asset('frontend/assets/images/feature/author-1.jpg') }}" alt=""></figure>
                                            <h6>Michael Bean</h6>
                                        </div>
                                        <div class="buy-btn pull-right"><a href="property-details.html">For Buy</a></div>
                                    </div>
                                    <div class="title-text"><h4><a href="property-details.html">Villa on Grand Avenue</a></h4></div>
                                    <div class="price-box clearfix">
                                        <div class="price-info pull-left">
                                            <h6>Start From</h6>
                                            <h4>$30,000.00</h4>
                                        </div>
                                        <ul class="other-option pull-right clearfix">
                                            <li><a href="property-details.html"><i class="icon-12"></i></a></li>
                                            <li><a href="property-details.html"><i class="icon-13"></i></a></li>
                                        </ul>
                                    </div>
                                     
                                    <ul class="more-details clearfix">
                                        <li><i class="icon-14"></i>3 Beds</li>
                                        <li><i class="icon-15"></i>2 Baths</li>
                                        <li><i class="icon-16"></i>600 Sq Ft</li>
                                    </ul>
                                    <div class="btn-box"><a href="property-details.html" class="theme-btn btn-two">See Details</a></div>
                                </div>
                            </div>
                        </div>
                    </div>




                       <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                        <div class="feature-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><img src="{{ asset('frontend/assets/images/feature/feature-1.jpg') }}" alt=""></figure>
                                    <div class="batch"><i class="icon-11"></i></div>
                                    <span class="category">Featured</span>
                                </div>
                                <div class="lower-content">
                                    <div class="author-info clearfix">
                                        <div class="author pull-left">
                                            <figure class="author-thumb"><img src="{{ asset('frontend/assets/images/feature/author-1.jpg') }}" alt=""></figure>
                                            <h6>Michael Bean</h6>
                                        </div>
                                        <div class="buy-btn pull-right"><a href="property-details.html">For Buy</a></div>
                                    </div>
                                    <div class="title-text"><h4><a href="property-details.html">Villa on Grand Avenue</a></h4></div>
                                    <div class="price-box clearfix">
                                        <div class="price-info pull-left">
                                            <h6>Start From</h6>
                                            <h4>$30,000.00</h4>
                                        </div>
                                        <ul class="other-option pull-right clearfix">
                                            <li><a href="property-details.html"><i class="icon-12"></i></a></li>
                                            <li><a href="property-details.html"><i class="icon-13"></i></a></li>
                                        </ul>
                                    </div>
                                    
                                    <ul class="more-details clearfix">
                                        <li><i class="icon-14"></i>3 Beds</li>
                                        <li><i class="icon-15"></i>2 Baths</li>
                                        <li><i class="icon-16"></i>600 Sq Ft</li>
                                    </ul>
                                    <div class="btn-box"><a href="property-details.html" class="theme-btn btn-two">See Details</a></div>
                                </div>
                            </div>
                        </div>
                    </div>


<div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                        <div class="feature-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><img src="{{ asset('frontend/assets/images/feature/feature-1.jpg') }}" alt=""></figure>
                                    <div class="batch"><i class="icon-11"></i></div>
                                    <span class="category">Featured</span>
                                </div>
                                <div class="lower-content">
                                    <div class="author-info clearfix">
                                        <div class="author pull-left">
                                            <figure class="author-thumb"><img src="{{ asset('frontend/assets/images/feature/author-1.jpg') }}" alt=""></figure>
                                            <h6>Michael Bean</h6>
                                        </div>
                                        <div class="buy-btn pull-right"><a href="property-details.html">For Buy</a></div>
                                    </div>
                                    <div class="title-text"><h4><a href="property-details.html">Villa on Grand Avenue</a></h4></div>
                                    <div class="price-box clearfix">
                                        <div class="price-info pull-left">
                                            <h6>Start From</h6>
                                            <h4>$30,000.00</h4>
                                        </div>
                                        <ul class="other-option pull-right clearfix">
                                            <li><a href="property-details.html"><i class="icon-12"></i></a></li>
                                            <li><a href="property-details.html"><i class="icon-13"></i></a></li>
                                        </ul>
                                    </div>
                                     
                                    <ul class="more-details clearfix">
                                        <li><i class="icon-14"></i>3 Beds</li>
                                        <li><i class="icon-15"></i>2 Baths</li>
                                        <li><i class="icon-16"></i>600 Sq Ft</li>
                                    </ul>
                                    <div class="btn-box"><a href="property-details.html" class="theme-btn btn-two">See Details</a></div>
                                </div>
                            </div>
                        </div>
                    </div>





 </div>

            </div>
        </section>
        <!-- deals-section end -->


        <!-- testimonial-section end -->
        <section class="testimonial-section bg-color-1 centred">
            <div class="pattern-layer" style="background-image: url({{ asset('frontend/assets/images/shape/shape-1.png') }});"></div>
            <div class="auto-container">
                <div class="sec-title">
                    <h5>Testimonials</h5>
                    <h2>What They Say About Us</h2>
                </div>
                <div class="single-item-carousel owl-carousel owl-theme owl-dots-none nav-style-one">
                    <div class="testimonial-block-one">
                        <div class="inner-box">
                            <figure class="thumb-box"><img src="{{ asset('frontend/assets/images/resource/testimonial-1.jpg') }}" alt=""></figure>
                            <div class="text">
                                <p>Our goal each day is to ensure that our residents’ needs are not only met but exceeded. To make that happen we are committed to provid ing an environment in which residents can enjoy.</p>
                            </div>
                            <div class="author-info">
                                <h4>Rebeka Dawson</h4>
                                <span class="designation">Instructor</span>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-block-one">
                        <div class="inner-box">
                            <figure class="thumb-box"><img src="{{ asset('frontend/assets/images/resource/testimonial-2.jpg') }}" alt=""></figure>
                            <div class="text">
                                <p>Our goal each day is to ensure that our residents’ needs are not only met but exceeded. To make that happen we are committed to provid ing an environment in which residents can enjoy.</p>
                            </div>
                            <div class="author-info">
                                <h4>Marc Kenneth</h4>
                                <span class="designation">Founder CEO</span>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-block-one">
                        <div class="inner-box">
                            <figure class="thumb-box"><img src="{{ asset('frontend/assets/images/resource/testimonial-1.jpg') }}" alt=""></figure>
                            <div class="text">
                                <p>Our goal each day is to ensure that our residents’ needs are not only met but exceeded. To make that happen we are committed to provid ing an environment in which residents can enjoy.</p>
                            </div>
                            <div class="author-info">
                                <h4>Owen Lester</h4>
                                <span class="designation">Manager</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- testimonial-section end -->


        <!-- chooseus-section -->
        <section class="chooseus-section">
            <div class="auto-container">
                <div class="inner-container bg-color-2">
                    <div class="upper-box clearfix">
                        <div class="sec-title light">
                            <h5>Why Choose Us?</h5>
                            <h2>Reasons To Choose Us</h2>
                        </div>
                        <div class="btn-box">
                            <a href="categories.html" class="theme-btn btn-one">All Categories</a>
                        </div>
                    </div>
                    <div class="lower-box">
                        <div class="row clearfix">
                            <div class="col-lg-4 col-md-6 col-sm-12 chooseus-block">
                                <div class="chooseus-block-one">
                                    <div class="inner-box">
                                        <div class="icon-box"><i class="icon-19"></i></div>
                                        <h4>Excellent Reputation</h4>
                                        <p>Lorem ipsum dolor sit consectetur sed eiusm tempor.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 chooseus-block">
                                <div class="chooseus-block-one">
                                    <div class="inner-box">
                                        <div class="icon-box"><i class="icon-26"></i></div>
                                        <h4>Best Local Agents</h4>
                                        <p>Lorem ipsum dolor sit consectetur sed eiusm tempor.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 chooseus-block">
                                <div class="chooseus-block-one">
                                    <div class="inner-box">
                                        <div class="icon-box"><i class="icon-21"></i></div>
                                        <h4>Personalized Service</h4>
                                        <p>Lorem ipsum dolor sit consectetur sed eiusm tempor.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- chooseus-section end -->


        <!-- place-section -->
        <section class="place-section sec-pad">
            <div class="auto-container">
                <div class="sec-title centred">
                    <h5>Top Places</h5>
                    <h2>Most Popular Places</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing sed do eiusmod tempor incididunt <br />labore dolore magna aliqua enim.</p>
                </div>
                <div class="sortable-masonry">
                    <div class="items-container row clearfix">
                        <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all illustration brand marketing software">
                            <div class="place-block-one">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="{{ asset('frontend/assets/images/resource/place-1.jpg') }}" alt=""></figure>
                                    <div class="text">
                                        <h4><a href="categories.html">Los Angeles</a></h4>
                                        <p>10 Properties</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all brand illustration print software logo">
                            <div class="place-block-one">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="{{ asset('frontend/assets/images/resource/place-2.jpg') }}" alt=""></figure>
                                    <div class="text">
                                        <h4><a href="categories.html">San Francisco</a></h4>
                                        <p>08 Properties</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all illustration marketing logo">
                            <div class="place-block-one">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="{{ asset('frontend/assets/images/resource/place-3.jpg') }}" alt=""></figure>
                                    <div class="text">
                                        <h4><a href="categories.html">Las Vegas</a></h4>
                                        <p>29 Properties</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-6 col-sm-12 masonry-item small-column all brand marketing print software">
                            <div class="place-block-one">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="{{ asset('frontend/assets/images/resource/place-4.jpg') }}" alt=""></figure>
                                    <div class="text">
                                        <h4><a href="categories.html">New York City</a></h4>
                                        <p>05 Properties</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- place-section end -->


        <!-- team-section -->
        <section class="team-section sec-pad centred bg-color-1">
            <div class="pattern-layer" style="background-image: url({{ asset('frontend/assets/images/shape/shape-1.png') }});"></div>
            <div class="auto-container">
                <div class="sec-title">
                    <h5>Our Agents</h5>
                    <h2>Meet Our Excellent Agents</h2>
                </div>
                <div class="single-item-carousel owl-carousel owl-theme owl-dots-none nav-style-one">
                    <div class="team-block-one">
                        <div class="inner-box">
                            <figure class="image-box"><img src="{{ asset('frontend/assets/images/team/team-1.jpg') }}" alt=""></figure>
                            <div class="lower-content">
                                <div class="inner">
                                    <h4><a href="agents-details.html">Merrie Lewis</a></h4>
                                    <span class="designation">Senior Agent</span>
                                    <ul class="social-links clearfix">
                                        <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="index.html"><i class="fab fa-google-plus-g"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="team-block-one">
                        <div class="inner-box">
                            <figure class="image-box"><img src="{{ asset('frontend/assets/images/team/team-2.jpg') }}" alt=""></figure>
                            <div class="lower-content">
                                <div class="inner">
                                    <h4><a href="agents-details.html">Parks Missie</a></h4>
                                    <span class="designation">Senior Agent</span>
                                    <ul class="social-links clearfix">
                                        <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="index.html"><i class="fab fa-google-plus-g"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="team-block-one">
                        <div class="inner-box">
                            <figure class="image-box"><img src="{{ asset('frontend/assets/images/team/team-3.jpg') }}" alt=""></figure>
                            <div class="lower-content">
                                <div class="inner">
                                    <h4><a href="agents-details.html">Mariana Buenos</a></h4>
                                    <span class="designation">Senior Agent</span>
                                    <ul class="social-links clearfix">
                                        <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="index.html"><i class="fab fa-google-plus-g"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="team-block-one">
                        <div class="inner-box">
                            <figure class="image-box"><img src="{{ asset('frontend/assets/images/team/team-4.jpg') }}" alt=""></figure>
                            <div class="lower-content">
                                <div class="inner">
                                    <h4><a href="agents-details.html">Stephen Fowler</a></h4>
                                    <span class="designation">Senior Agent</span>
                                    <ul class="social-links clearfix">
                                        <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="index.html"><i class="fab fa-google-plus-g"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="team-block-one">
                        <div class="inner-box">
                            <figure class="image-box"><img src="{{ asset('frontend/assets/images/team/team-5.jpg') }}" alt=""></figure>
                            <div class="lower-content">
                                <div class="inner">
                                    <h4><a href="agents-details.html">Daisy Phillips</a></h4>
                                    <span class="designation">Senior Agent</span>
                                    <ul class="social-links clearfix">
                                        <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="index.html"><i class="fab fa-google-plus-g"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- team-section end -->


        <!-- cta-section -->
        <section class="cta-section bg-color-2">
            <div class="pattern-layer" style="background-image: url({{ asset('frontend/assets/images/shape/shape-2.png') }});"></div>
            <div class="auto-container">
                <div class="inner-box clearfix">
                    <div class="text pull-left">
                        <h2>Looking to Buy a New Property or <br />Sell an Existing One?</h2>
                    </div>
                    <div class="btn-box pull-right">
                        <a href="property-details.html" class="theme-btn btn-three">Rent Properties</a>
                        <a href="index.html" class="theme-btn btn-one">Buy Properties</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- cta-section end -->


        <!-- news-section -->
        <section class="news-section sec-pad">
            <div class="auto-container">
                <div class="sec-title centred">
                    <h5>News & Article</h5>
                    <h2>Stay Update With Realshed</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing sed do eiusmod tempor incididunt <br />labore dolore magna aliqua enim.</p>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><a href="blog-details.html"><img src="{{ asset('frontend/assets/images/news/news-1.jpg') }}" alt=""></a></figure>
                                    <span class="category">Featured</span>
                                </div>
                                <div class="lower-content">
                                    <h4><a href="blog-details.html">Including Animation In Your Design System</a></h4>
                                    <ul class="post-info clearfix">
                                        <li class="author-box">
                                            <figure class="author-thumb"><img src="{{ asset('frontend/assets/images/news/author-1.jpg') }}" alt=""></figure>
                                            <h5><a href="blog-details.html">Eva Green</a></h5>
                                        </li>
                                        <li>April 10, 2020</li>
                                    </ul>
                                    <div class="text">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing sed.</p>
                                    </div>
                                    <div class="btn-box">
                                        <a href="blog-details.html" class="theme-btn btn-two">See Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><a href="blog-details.html"><img src="{{ asset('frontend/assets/images/news/news-2.jpg') }}" alt=""></a></figure>
                                    <span class="category">Featured</span>
                                </div>
                                <div class="lower-content">
                                    <h4><a href="blog-details.html">Taking The Pattern Library To The Next Level</a></h4>
                                    <ul class="post-info clearfix">
                                        <li class="author-box">
                                            <figure class="author-thumb"><img src="{{ asset('frontend/assets/images/news/author-2.jpg') }}" alt=""></figure>
                                            <h5><a href="blog-details.html">George Clooney</a></h5>
                                        </li>
                                        <li>April 09, 2020</li>
                                    </ul>
                                    <div class="text">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing sed.</p>
                                    </div>
                                    <div class="btn-box">
                                        <a href="blog-details.html" class="theme-btn btn-two">See Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><a href="blog-details.html"><img src="{{ asset('frontend/assets/images/news/news-3.jpg') }}" alt=""></a></figure>
                                    <span class="category">Featured</span>
                                </div>
                                <div class="lower-content">
                                    <h4><a href="blog-details.html">How New Font Technologies Will Improve The Web</a></h4>
                                    <ul class="post-info clearfix">
                                        <li class="author-box">
                                            <figure class="author-thumb"><img src="{{ asset('frontend/assets/images/news/author-3.jpg') }}" alt=""></figure>
                                            <h5><a href="blog-details.html">Simon Baker</a></h5>
                                        </li>
                                        <li>April 28, 2020</li>
                                    </ul>
                                    <div class="text">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing sed.</p>
                                    </div>
                                    <div class="btn-box">
                                        <a href="blog-details.html" class="theme-btn btn-two">See Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- news-section end -->


        <!-- download-section -->
        <section class="download-section bg-color-3">
            <div class="pattern-layer" style="background-image: url({{ asset('frontend/assets/images/shape/shape-3.png') }});"></div>
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-6 col-sm-12 image-column">
                        <div class="image-box">
                            <figure class="image image-1 wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms"><img src="{{ asset('frontend/assets/images/resource/download-1.png') }}" alt=""></figure>
                            <figure class="image image-2 wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms"><img src="{{ asset('frontend/assets/images/resource/download-2.png') }}" alt=""></figure>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 content-column">
                        <div class="content_block_1">
                            <div class="content-box">
                                <span>Download</span>
                                <h2>Download Our Android and IOS App for Experience</h2>
                                <div class="download-btn">
                                    <a href="index.html" class="app-store">
                                        <i class="fab fa-apple"></i>
                                        <p>Download on</p>
                                        <h4>App Store</h4>
                                    </a>
                                    <a href="index.html" class="google-play">
                                        <i class="fab fa-google-play"></i>
                                        <p>Get It On</p>
                                        <h4>Google Play</h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- download-section end -->

@endsection
