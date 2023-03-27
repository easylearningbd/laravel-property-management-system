@extends('admin.admin_dashboard')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

<div class="page-content">

       
        <div class="row profile-body">
          <!-- left wrapper start -->
          
          <!-- left wrapper end -->
          <!-- middle wrapper start -->
          <div class="col-md-8 col-xl-8 middle-wrapper">
            <div class="row">
             <div class="card">
              <div class="card-body">

			<h6 class="card-title">Add Testimonial   </h6>

			<form method="POST" action="{{ route('store.testimonials') }}" class="forms-sample" enctype="multipart/form-data">
				@csrf
 

				<div class="mb-3">
 <label for="exampleInputEmail1" class="form-label"> Name   </label>
					 <input type="text" name="name" class="form-control " > 
				</div>

        <div class="mb-3">
 <label for="exampleInputEmail1" class="form-label"> Position   </label>
           <input type="text" name="position" class="form-control " > 
        </div>

        <div class="mb-3">
 <label for="exampleInputEmail1" class="form-label"> Message   </label>
             <textarea name="message" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>

			 	<div class="mb-3">
 <label for="exampleInputEmail1" class="form-label">Tentimonial Photo   </label>
   <input class="form-control"  name="image" type="file" id="image">
        </div>

  <div class="mb-3">
 <label for="exampleInputEmail1" class="form-label">    </label>
  <img id="showImage" class="wd-80 rounded-circle" src="{{ url('upload/no_image.jpg') }}" alt="profile">
        </div>
				 
	 <button type="submit" class="btn btn-primary me-2">Save Changes </button>
			 
			</form>

              </div>
            </div>




            </div>
          </div>
          <!-- middle wrapper end -->
          <!-- right wrapper start -->
         
          <!-- right wrapper end -->
        </div>

			</div>
 
<script type="text/javascript">
  $(document).ready(function(){
    $('#image').change(function(e){
      var reader = new FileReader();
      reader.onload = function(e){
        $('#showImage').attr('src',e.target.result);
      }
      reader.readAsDataURL(e.target.files['0']);
    });
  });


</script>

@endsection