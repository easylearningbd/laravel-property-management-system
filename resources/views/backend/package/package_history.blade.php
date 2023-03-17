@extends('admin.admin_dashboard')
@section('admin')



<div class="page-content">

				<nav class="page-breadcrumb">
					<ol class="breadcrumb">
	  <a href="{{ route('add.property') }}" class="btn btn-inverse-info"> Add Property    </a>
					</ol>
				</nav>

				<div class="row">
					<div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h6 class="card-title">Package History All </h6>
               
                <div class="table-responsive">
                  <table id="dataTableExample" class="table">
                    <thead>
                      <tr>
                        <th>Sl </th>
                        <th>Image </th> 
                        <th>Name </th> 
                        <th>Package </th> 
                        <th>Invoice </th> 
                        <th>Amount  </th> 
                        <th>Date </th> 
                        <th>Action </th> 
                      </tr>
                    </thead>
                    <tbody>
                   @foreach($packagehistory as $key => $item)
                      <tr>
                        <td>{{ $key+1 }}</td>
                        <td><img src="{{ (!empty($item->user->photo)) ? url('upload/agent_images/'.$item->user->photo) : url('upload/no_image.jpg') }}" style="width:70px; height:40px;"> </td> 
                        <td>{{ $item['user']['name'] }}</td> 
                        <td>{{ $item->package_name }}</td> 
                        <td>{{ $item->invoice }}</td> 
                        <td>{{ $item->package_amount }}</td> 
                        <td>{{ $item->created_at->format('l d M Y') }}</td> 
                        <td> 
       <a href="{{ route('package.invoice',$item->id) }}" class="btn btn-inverse-warning" title="Download"> <i data-feather="download"></i> </a> 
      
                        </td> 
                      </tr>
                     @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
					</div>
				</div>

			</div>









@endsection