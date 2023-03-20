@extends('frontend.frontend_dashboard')
@section('main')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>


 <!--Page Title-->
        <section class="page-title centred" style="background-image: url({{ asset('frontend/assets/images/background/page-title-5.jpg') }});">
            <div class="auto-container">
                <div class="content-box clearfix">
                    <h1>Change Password  </h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.html">Home</a></li>
                        <li>Change Password</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--End Page Title-->


        <!-- sidebar-page-container -->
        <section class="sidebar-page-container blog-details sec-pad-2">
            <div class="auto-container">
                <div class="row clearfix">
                    



          @php

            $id = Auth::user()->id;
            $userData = App\Models\User::find($id); 
        @endphp




        <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
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
                        <div class="blog-details-content">
                            <div class="news-block-one">
                                <div class="inner-box">
                                    
                                    <div class="lower-content">
                                        
                                         
                                      
          
 <form action="{{ route('user.password.update') }}" method="post" class="default-form" enctype="multipart/form-data">
 	@csrf



 	  <div class="form-group">
            <label>Old Password</label>
            <input type="password" name="old_password" class="form-control @error('old_password') is-invalid @enderror" id="old_password">
             @error('old_password')
           <span class="text-danger">{{ $message }}</span>
           @enderror
        </div>

          <div class="form-group">
            <label>New Password </label>
            <input type="password" name="new_password" class="form-control @error('new_password') is-invalid @enderror" id="new_password">
             @error('new_password')
           <span class="text-danger">{{ $message }}</span>
           @enderror
        </div>


          <div class="form-group">
            <label>Confirm New Password</label>
            <input type="password" name="new_password_confirmation" class="form-control" id="new_password_confirmation"> 
        </div>
 

        <div class="form-group message-btn">
            <button type="submit" class="theme-btn btn-one">Save Changes </button>
        </div>
    </form>

 

                                    </div>
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
