@extends('admin.admin_dashboard')
@section('admin')

<div class="page-content">
        
        <div class="row inbox-wrapper">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-lg-3 border-end-lg">
                    <div class="d-flex align-items-center justify-content-between">
                      <button class="navbar-toggle btn btn-icon border d-block d-lg-none" data-bs-target=".email-aside-nav" data-bs-toggle="collapse" type="button">
                        <span class="icon"><i data-feather="chevron-down"></i></span>
                      </button>
                      <div class="order-first">
                        <h4>Mail Service</h4>
                        <p class="text-muted">Support@easylearningbd.com</p>
                      </div>
                    </div>
                    <div class="d-grid my-3">
                      <a class="btn btn-primary" href="./compose.html">Compose Email</a>
                    </div>
                    <div class="email-aside-nav collapse">
                      <ul class="nav flex-column">
                        <li class="nav-item active">
                          <a class="nav-link d-flex align-items-center" href="../email/inbox.html">
                            <i data-feather="inbox" class="icon-lg me-2"></i>
                            Inbox
                            <span class="badge bg-danger fw-bolder ms-auto">{{ count($usermsg) }}
                          </a>
                        </li>
                         
                        
                        
                      </ul>
                      <p class="text-muted tx-12 fw-bolder text-uppercase mb-2 mt-4">Labels</p>
                      <ul class="nav flex-column">
                        <li class="nav-item">
                          <a class="nav-link d-flex align-items-center" href="#">
                            <i data-feather="tag" class="text-warning icon-lg me-2"></i>
                            Important
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link d-flex align-items-center" href="#">
                          <i data-feather="tag" class="text-primary icon-lg me-2"></i> 
                          Business 
                        </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link d-flex align-items-center" href="#">
                            <i data-feather="tag" class="text-info icon-lg me-2"></i> 
                            Inspiration 
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-lg-9">
                    <div class="p-3 border-bottom">
                      <div class="row align-items-center">
                        <div class="col-lg-6">
                          <div class="d-flex align-items-end mb-2 mb-md-0">
                            <i data-feather="inbox" class="text-muted me-2"></i>
                            <h4 class="me-1">Inbox</h4>
                            <span class="text-muted">({{ count($usermsg) }} new messages)</span>
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="input-group">
                            <input class="form-control" type="text" placeholder="Search mail...">
                            <button class="btn btn-light btn-icon" type="button" id="button-search-addon"><i data-feather="search"></i></button>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    <div class="email-list">

                      
                      
      <!-- email list item -->
      @foreach($usermsg as $msg)
      <div class="email-list-item">
        
        <a href=" " class="email-list-detail">
          <div class="content">
            <span class="from">{{ $msg['user']['name'] }}</span>
            <p class="msg"> {{ $msg->message }} </p>
          </div>
          <span class="date">
            <span class="icon"><i data-feather="paperclip"></i> </span>
           {{ $msg->created_at->format('l M d') }}
          </span>
        </a>
      </div>
    @endforeach
                  
                    

                    </div>
                  </div>
                </div>
                
              </div>
            </div>
          </div>
        </div>

			</div>





@endsection