<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
  <meta name="author" content="NobleUI">
  <meta name="keywords" content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

  <title>Admin Panel - Real Estate </title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
  <!-- End fonts -->


  <link rel="stylesheet" href="{{ asset('backend/assets/vendors/select2/select2.min.css') }}">
  <link rel="stylesheet" href="{{ asset('backend/assets/vendors/jquery-tags-input/jquery.tagsinput.min.css') }}">



<!-- Plugin css for this page -->
  <link rel="stylesheet" href="{{ asset('backend/assets/vendors/datatables.net-bs5/dataTables.bootstrap5.css') }}">
  <!-- End plugin css for this page -->

  <!-- core:css -->
  <link rel="stylesheet" href="{{ asset('backend/assets/vendors/core/core.css') }}">
  <!-- endinject -->

  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="{{ asset('backend/assets/vendors/flatpickr/flatpickr.min.css') }}">
  <!-- End plugin css for this page -->

  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset('backend/assets/fonts/feather-font/css/iconfont.css') }}">
  <link rel="stylesheet" href="{{ asset('backend/assets/vendors/flag-icon-css/css/flag-icon.min.css') }}">
  <!-- endinject -->

  <!-- Layout styles -->  
  <link rel="stylesheet" href="{{ asset('backend/assets/css/demo2/style.css') }}">
  <!-- End layout styles -->

  <link rel="shortcut icon" href="{{ asset('backend/assets/images/favicon.png') }}" />

   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >
 

 
</head>
<body>
  <div class="main-wrapper">

    <!-- partial:partials/_sidebar.html -->
    @include('admin.body.sidebar')
  
    <!-- partial -->
  
    <div class="page-wrapper">
          
      <!-- partial:partials/_navbar.html -->
     @include('admin.body.header')
      <!-- partial -->

     @yield('admin')

      <!-- partial:partials/_footer.html -->
    @include('admin.body.footer')
      <!-- partial -->
    
    </div>
  </div>

  <!-- core:js -->
  <script src="{{ asset('backend/assets/vendors/core/core.js') }}"></script>
  <!-- endinject -->

  <!-- Plugin js for this page -->
  <script src="{{ asset('backend/assets/vendors/flatpickr/flatpickr.min.js') }}"></script>
  <script src="{{ asset('backend/assets/vendors/apexcharts/apexcharts.min.js') }}"></script>
  <!-- End plugin js for this page -->

  <!-- inject:js -->
  <script src="{{ asset('backend/assets/vendors/feather-icons/feather.min.js') }}"></script>
  <script src="{{ asset('backend/assets/js/template.js') }}"></script>
  <!-- endinject -->

  <!-- Custom js for this page -->
  <script src="{{ asset('backend/assets/js/dashboard-dark.js') }}"></script>
  <!-- End custom js for this page -->

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
 @if(Session::has('message'))
 var type = "{{ Session::get('alert-type','info') }}"
 switch(type){
    case 'info':
    toastr.info(" {{ Session::get('message') }} ");
    break;

    case 'success':
    toastr.success(" {{ Session::get('message') }} ");
    break;

    case 'warning':
    toastr.warning(" {{ Session::get('message') }} ");
    break;

    case 'error':
    toastr.error(" {{ Session::get('message') }} ");
    break; 
 }
 @endif 
</script>

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <script src="{{ asset('backend/assets/js/code/code.js') }}"></script>
  <script src="{{ asset('backend/assets/js/code/validate.min.js') }}"></script>

  <!-- Start datatables -->
  <script src="{{ asset('backend/assets/vendors/datatables.net/jquery.dataTables.js') }}"></script>
  <script src="{{ asset('backend/assets/vendors/datatables.net-bs5/dataTables.bootstrap5.js') }}"></script> 
  <script src="{{ asset('backend/assets/js/data-table.js') }}"></script>
  <!-- End datatables -->


  <!-- Input Tags -->
  <script src="{{ asset('backend/assets/vendors/inputmask/jquery.inputmask.min.js') }}"></script>
  <script src="{{ asset('backend/assets/vendors/select2/select2.min.js') }}"></script>
  <script src="{{ asset('backend/assets/vendors/typeahead.js/typeahead.bundle.min.js') }}"></script>

  <script src="{{ asset('backend/assets/vendors/jquery-tags-input/jquery.tagsinput.min.js') }}"></script>

  <script src="{{ asset('backend/assets/js/inputmask.js') }}"></script>
  <script src="{{ asset('backend/assets/js/select2.js') }}"></script>
  <script src="{{ asset('backend/assets/js/typeahead.js') }}"></script>
  <script src="{{ asset('backend/assets/js/tags-input.js') }}"></script>

    <!-- Input Tags -->

 <!-- tinymce -->
      <script src="{{ asset('backend/assets/vendors/tinymce/tinymce.min.js') }}"></script>
     <script src="{{ asset('backend/assets/js/tinymce.js') }}"></script>
 <!-- tinymce -->

  <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>


</body>
</html>    