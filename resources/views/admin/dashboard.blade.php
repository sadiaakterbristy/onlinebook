{{-- @props(['user' => $user]) --}}

@extends('layouts.app')
@section('content')
{{-- @include('frontend.nav') --}}

{{-- {{View::make('frontend.icon')}} --}}

{{-- 
<div class="container-fluid">
    <div class="row">
        @include('admin.sidebar')

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
              <h1 class="h2">Dashboard</h1>
            </div>
            <p class="adminwelcometag" >Welcome  </p>
      
      
            </div>
          </main>
    </div>
</div> --}}

<div id="pcoded" class="pcoded">
  <div class="pcoded-container navbar-wrapper">

@include('frontend.nav')


<main class="col-md-10 ms-sm-auto col-lg-10 px-md-2 ">
  <div class="container-fluid">
      <div class="row">
          <div class="row " style="margin-top: 100px; margin-left:100px;">
  
              <div class="col-xl-4 col-sm-6 col-12 me-5">
                  <div class="card " style="background-color: #f7ae1e">
                      <div class="card-body">
                          <div class="dash-widget-header">
                              {{-- <span class="dash-widget-icon text-primary border-primary">
                                  <i class="fe fe-users"></i>
                                  <i class="fas fa-users"></i>
                              </span> --}}
                              
                              <div class="dash-count">
                                  <h3>{{$user}}</h3>
                              </div>
                          </div>
                          <div class="dash-widget-info">
                              <h1 class="text-muted">User</h1>
                              <div class="progress progress-sm">
                                  <div class="progress-bar bg-primary w-50"></div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
             

              <div class="col-xl-4 col-sm-6 col-12">
                <div class="card " style="background-color: #1CC9A7">
                    <div class="card-body">
                        <div class="dash-widget-header">
                            {{-- <span class="dash-widget-icon text-primary border-success">
                                <i class="fe fe-users"></i>
                            </span> --}}
                            <div class="dash-count">
                                <h3>{{ $order }}</h3>
                            </div>
                        </div>
                        <div class="dash-widget-info">
                            <h1 class="text-muted">Order</h1>
                            <div class="progress progress-sm">
                                <div class="progress-bar bg-success w-50"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
              <div class="col-xl-4 col-sm-6 col-12 me-5">
                  <div class="card" style="background-color: #E85445" >
                      <div class="card-body">
                          <div class="dash-widget-header">
                              {{-- <span class="dash-widget-icon text-danger border-info">
                                  <i class="fe fe-target"></i>
                              </span> --}}
                              <div class="dash-count">
                                  <h3>{{ $book }} </h3>
                              </div>
                          </div>
                          <div class="dash-widget-info">
  
                              <h1 class="text-muted">Book</h1>
                              <div class="progress progress-sm">
                                  <div class="progress-bar bg-info w-50"></div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-xl-4 col-sm-6 col-12 me-5 ">
                  <div class="card bg-info">
                      <div class="card-body">
                          <div class="dash-widget-header">
                              {{-- <span class="dash-widget-icon text-danger border-danger">
                                  <i class="fe fe-browser"></i>
                              </span> --}}
                              <div class="dash-count">
                                  <h3>{{ $category }}</h3>
                              </div>
                          </div>
                          <div class="dash-widget-info">
  
                              <h1 class="text-muted">Category</h1>
                              <div class="progress progress-sm">
                                  <div class="progress-bar bg-danger w-50"></div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
  
          </div>
      </div>
  </div>
  </main>
  



  </div>
  </div>

@endsection