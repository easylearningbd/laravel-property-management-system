@extends('agent.agent_dashboard')
@section('agent')



<div class="page-content">

				<nav class="page-breadcrumb">
					<ol class="breadcrumb">
					 
					</ol>
				</nav>

				<div class="row">
					<div class="col-md-12">
            <div class="card">
 <form method="post" action="{{ route('store.business.plan') }}">
 	@csrf
            		
            	
              <div class="card-body">
                <div class="container-fluid d-flex justify-content-between">
                  <div class="col-lg-3 ps-0">
                    <a href="#" class="noble-ui-logo logo-light d-block mt-3">Noble<span>UI</span></a>                 
                    <p class="mt-1 mb-1"><b>NobleUI Themes</b></p>
                    <p>108,<br> Great Russell St,<br>London, WC1B 3NA.</p>
                    <h5 class="mt-5 mb-2 text-muted">Invoice to :</h5>
                    <p>{{ $data->name }},<br> {{ $data->email }},<br> {{ $data->address }}.</p>
                  </div>
                  <div class="col-lg-3 pe-0">
                    <h4 class="fw-bolder text-uppercase text-end mt-4 mb-2">invoice</h4>
                    <h6 class="text-end mb-5 pb-4">  </h6>
                    <p class="text-end mb-1">Balance Due</p>
                    <h4 class="text-end fw-normal">$ 20</h4>
                    <h6 class="mb-0 mt-3 text-end fw-normal mb-2"><span class="text-muted"> </span>  </h6>
                    
                  </div>
                </div>
                <div class="container-fluid mt-5 d-flex justify-content-center w-100">
                  <div class="table-responsive w-100">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                              <th>#</th>
                              <th>Package Name </th>
                              <th class="text-end">Property Qty</th>
                              <th class="text-end">Unit cost</th>
                              <th class="text-end">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                          <tr class="text-end">
                            <td class="text-start">1</td>
                            <td class="text-start">Business</td>
                            <td>3</td>
                            <td>$20</td>
                            <td>$20</td>
                          </tr>
                           
                        </tbody>
                      </table>
                    </div>
                </div>
                <div class="container-fluid mt-5 w-100">
                  <div class="row">
                    <div class="col-md-6 ms-auto">
                        <div class="table-responsive">
                          <table class="table">
                              <tbody>
                                <tr>
                                  <td>Sub Total</td>
                                  <td class="text-end">$ 20</td>
                                </tr>
                                 
                                <tr>
                                  <td class="text-bold-800">Total</td>
                                  <td class="text-bold-800 text-end"> $ 20</td>
                                </tr>
                                <tr>
                                  <td>Payment Made</td>
                                  <td class="text-danger text-end">(-) $ 20</td>
                                </tr>
                                <tr class="bg-dark">
                                  <td class="text-bold-800">Balance Due</td>
                                  <td class="text-bold-800 text-end">$ 20</td>
                                </tr>
                              </tbody>
                          </table>
                        </div>
                    </div>
                  </div>
                </div>
                <div class="container-fluid w-100">
                  
                  <button type="submit" class="btn btn-primary float-end mt-4 ms-2"><i data-feather="send" class="me-3 icon-md"></i>Send Invoice</button>
                 
                </div>
              </div>
            </div>
                 </form>




					</div>
				</div>
			</div>






@endsection
 