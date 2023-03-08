@extends('admin.admin_dashboard')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

<div class="page-content">

       
        <div class="row profile-body">
          <!-- left wrapper start -->
          
          <!-- left wrapper end -->
          <!-- middle wrapper start -->
          <div class="col-md-12 col-xl-12 middle-wrapper">
            <div class="row">
       
       <div class="card">
    <div class="card-body">
        <h6 class="card-title">Add Property </h6>
            <form>


    <div class="row">
        <div class="col-sm-6">
            <div class="mb-3">
                <label class="form-label">Property Name </label>
                <input type="text" name="property_name" class="form-control"  >
            </div>
        </div><!-- Col -->
        <div class="col-sm-6">
            <div class="mb-3">
                <label class="form-label">Property Status</label>
               <select name="property_status" class="form-select" id="exampleFormControlSelect1">
                <option selected="" disabled="">Select Status</option>
                <option value="rent">For Rent</option>
                <option value="buy">For Buy</option> 
            </select>
            </div>
        </div><!-- Col -->


    <div class="col-sm-6">
            <div class="mb-3">
                <label class="form-label">Lowest Price </label>
                <input type="text" name="lowest_price" class="form-control"  >
            </div>
        </div><!-- Col -->


            <div class="col-sm-6">
            <div class="mb-3">
                <label class="form-label">Max Price </label>
                <input type="text" name="max_price" class="form-control"  >
            </div>
        </div><!-- Col -->


         <div class="col-sm-6">
            <div class="mb-3">
                <label class="form-label">Main Thambnail </label>
                <input type="file" name="property_thambnail " class="form-control" onChange="mainThamUrl(this)"  >

                <img src="" id="mainThmb">

            </div>
        </div><!-- Col -->



         <div class="col-sm-6">
            <div class="mb-3">
                <label class="form-label">Multiple Image </label>
                <input type="file" name="multi_img[]" class="form-control" id="multiImg" multiple="" >
 
         <div class="row" id="preview_img"> </div>

            </div>
        </div><!-- Col -->





    </div><!-- Row -->



    <div class="row">
        <div class="col-sm-4">
            <div class="mb-3">
                <label class="form-label">City</label>
                <input type="text" class="form-control" placeholder="Enter city">
            </div>
        </div><!-- Col -->
        <div class="col-sm-4">
            <div class="mb-3">
                <label class="form-label">State</label>
                <input type="text" class="form-control" placeholder="Enter state">
            </div>
        </div><!-- Col -->
        <div class="col-sm-4">
            <div class="mb-3">
                <label class="form-label">Zip</label>
                <input type="text" class="form-control" placeholder="Enter zip code">
            </div>
        </div><!-- Col -->
    </div><!-- Row -->
    <div class="row">
        <div class="col-sm-6">
            <div class="mb-3">
                <label class="form-label">Email address</label>
                <input type="email" class="form-control" placeholder="Enter email">
            </div>
        </div><!-- Col -->
        <div class="col-sm-6">
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" autocomplete="off" placeholder="Password">
            </div>
        </div><!-- Col -->
    </div><!-- Row -->
            </form>
      <button type="button" class="btn btn-primary submit">Submit form</button>
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
    $(document).ready(function (){
        $('#myForm').validate({
            rules: {
                amenitis_name: {
                    required : true,
                },

                
            },
            messages :{
                amenitis_name: {
                    required : 'Please Enter Amenities Name',
                }, 
                 

            },
            errorElement : 'span', 
            errorPlacement: function (error,element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight : function(element, errorClass, validClass){
                $(element).addClass('is-invalid');
            },
            unhighlight : function(element, errorClass, validClass){
                $(element).removeClass('is-invalid');
            },
        });
    });
    
</script>


 <script type="text/javascript">
    function mainThamUrl(input){
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e){
              $('#mainThmb').attr('src',e.target.result).width(80).height(80);
            };
            reader.readAsDataURL(input.files[0]);
        }
    } 
 </script>


 <script> 
 
  $(document).ready(function(){
   $('#multiImg').on('change', function(){ //on file input change
      if (window.File && window.FileReader && window.FileList && window.Blob) //check File API supported browser
      {
          var data = $(this)[0].files; //this file data
           
          $.each(data, function(index, file){ //loop though each file
              if(/(\.|\/)(gif|jpe?g|png|webp)$/i.test(file.type)){ //check supported file type
                  var fRead = new FileReader(); //new filereader
                  fRead.onload = (function(file){ //trigger function on successful read
                  return function(e) {
                      var img = $('<img/>').addClass('thumb').attr('src', e.target.result) .width(100)
                  .height(80); //create image element 
                      $('#preview_img').append(img); //append image to output element
                  };
                  })(file);
                  fRead.readAsDataURL(file); //URL representing the file's data.
              }
          });
           
      }else{
          alert("Your browser doesn't support File API!"); //if File API is absent
      }
   });
  });
   
  </script>

@endsection