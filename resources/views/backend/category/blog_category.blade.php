@extends('admin.admin_dashboard')
@section('admin')


<div class="page-content">

				<nav class="page-breadcrumb">
					<ol class="breadcrumb">
	  <a href="{{ route('add.state') }}" class="btn btn-inverse-info"> Add Category    </a>
					</ol>
				</nav>

				<div class="row">
					<div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h6 class="card-title">Blog Category All </h6>
               
                <div class="table-responsive">
                  <table id="dataTableExample" class="table">
                    <thead>
                      <tr>
                        <th>Sl </th>
                        <th>Blog Category Name </th>
                        <th>Blog Category Slug </th>
                        <th>Action </th> 
                      </tr>
                    </thead>
                    <tbody>
                   @foreach($category as $key => $item)
                      <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{ $item->category_name }}</td>
                        <td>{{ $item->category_slug }}</td>
                        <td>
       <a href="{{ route('edit.state',$item->id) }}" class="btn btn-inverse-warning"> Edit </a>
       <a href="{{ route('delete.state',$item->id) }}" class="btn btn-inverse-danger" id="delete"> Delete  </a>
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