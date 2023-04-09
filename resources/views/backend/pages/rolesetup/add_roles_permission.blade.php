@extends('admin.admin_dashboard')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

<style type="text/css">
  .form-check-label{
    text-transform: capitalize;
  }
</style>

<div class="page-content">

       
        <div class="row profile-body">
          <!-- left wrapper start -->
          
          <!-- left wrapper end -->
          <!-- middle wrapper start -->
          <div class="col-md-12 col-xl-12 middle-wrapper">
            <div class="row">
             <div class="card">
              <div class="card-body">

			<h6 class="card-title">Add Roles in Permission   </h6>

	 <form id="myForm" method="POST" action="{{ route('role.permission.store') }}" class="forms-sample">
				@csrf
 

				<div class="form-group mb-3">
 <label for="exampleInputEmail1" class="form-label">Roles Name   </label>
	 <select name="role_id" class="form-select" id="exampleFormControlSelect1">
                <option selected="" disabled="">Select Group</option>
                @foreach($roles as $role)
                <option value="{{ $role->id }}">{{ $role->name }}</option>
                @endforeach
            </select>
           
				</div>


    <div class="form-check mb-2">
                  <input type="checkbox" class="form-check-input" id="checkDefaultmain">
                  <label class="form-check-label" for="checkDefaultmain">
                   Permission All 
                  </label>
                </div>
 
 <hr>

 @foreach($permission_groups as $group)
      <div class="row">
        <div class="col-3">


          <div class="form-check mb-2">
                  <input type="checkbox" class="form-check-input" id="checkDefault">
                  <label class="form-check-label" for="checkDefault">
                   {{ $group->group_name }}
                  </label>
                </div>

          
        </div>


         <div class="col-9">

  @php
  $permissions = App\Models\User::getpermissionByGroupName($group->group_name)
  @endphp

      @foreach($permissions as $permission)
          <div class="form-check mb-2">
     
      <input type="checkbox" class="form-check-input" name="permission[]" id="checkDefault{{ $permission->id }}" value="{{ $permission->id }}">
     
    <label class="form-check-label" for="checkDefault{{ $permission->id }}">
                   {{ $permission->name }}
                  </label>
                </div>
          @endforeach
          <br>
        </div>
        
      </div> <!-- // End Row  -->
      @endforeach 




			 
				 
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
        
        $('#checkDefaultmain').click(function(){

          if ($(this).is(':checked')) {
            $('input[ type= checkbox]').prop('checked',true);
          }else{
             $('input[ type= checkbox]').prop('checked',false);
          }

        });
    </script>  
 
 

@endsection