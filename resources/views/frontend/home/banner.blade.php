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