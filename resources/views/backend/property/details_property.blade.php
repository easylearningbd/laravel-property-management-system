@extends('admin.admin_dashboard')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

<div class="page-content">

<div class="row">
                    <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                                <h6 class="card-title">Property Details </h6>
                                <p class="text-muted mb-3">Add class <code>.table</code></p>
                                <div class="table-responsive">
        <table class="table table-striped">
            
            <tbody>
                <tr> 
                    <td>Property Name </td>
                    <td>{{ $property->property_name }}</td> 
                </tr>

                <tr> 
                    <td>Property Status </td>
                    <td>{{ $property->property_status }}</td> 
                </tr>
                
            </tbody>
        </table>
                                </div>
              </div>
            </div>
                    </div>
                    <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                                <h6 class="card-title">Hoverable Table</h6>
                                <p class="text-muted mb-3">Add class <code>.table-hover</code></p>
                                <div class="table-responsive">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>First Name</th>
                                                    <th>LAST NAME</th>
                                                    <th>USERNAME</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th>1</th>
                                                    <td>Mark</td>
                                                    <td>Otto</td>
                                                    <td>@mdo</td>
                                                </tr>
                                                <tr>
                                                    <th>2</th>
                                                    <td>Jacob</td>
                                                    <td>Thornton</td>
                                                    <td>@fat</td>
                                                </tr>
                                                <tr>
                                                    <th>3</th>
                                                    <td>Larry</td>
                                                    <td>the Bird</td>
                                                    <td>@twitter</td>
                                                </tr>
                                                <tr>
                                                    <th>4</th>
                                                    <td>Larry</td>
                                                    <td>Jellybean</td>
                                                    <td>@lajelly</td>
                                                </tr>
                                                <tr>
                                                    <th>5</th>
                                                    <td>Larry</td>
                                                    <td>Kikat</td>
                                                    <td>@lakitkat</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                </div>
              </div>
            </div>
                    </div>
                </div>


        
  </div>
 


 
 
 

@endsection