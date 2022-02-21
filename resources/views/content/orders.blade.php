@extends('layouts.app')
@section('content')
    

            
        <div class="container-fluid">
            <div class="row">
                <div id="pcoded" class="pcoded">
                    <div class="pcoded-container navbar-wrapper">
                @include('frontend.nav')
             
                
                
                <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                      <h1 class="h2">Order</h1>
                 
        
        
        
                    
                    </div>
                    @include('message')
                    <div class="card">
                    <table class="table table-hover table-striped table-es-sm table-bordered">
                        <thead>
                        <tr  >
                       
                        <th  >User Name</th>
                        <th  >Order ID</th>
                        <th>Book Name</th>
                        <th>Order Date</th>
                        <th>Address</th>
                        <th>Order Status</th>
                        <th >Payment Status</th>
                        <th >View Details</th>
                        <th >Action</th>
                        </tr>
                    </thead>

                        @foreach ( $orders as $data )
                        
                            <tr> 
                             
                                <td  >{{ $data->user->name }}</td>
                                <td  >{{ $data->id}}</td>

                                <td>{{$data->orderDetail->book->name}}</td>
                                <td>{{$data->created_at->format('Y-m-d ')}}</td>
                                <td>{{$data->address }}</td>
                                <td>{{$data->status}}</td>
                                <td>{{$data->paid_status}}</td>

                                <td>
                                    <button type="button" class="btn btn-secondary"><a  href="{{route('order.detail',$data->id)}} " > <i class="fas fa-eye"></i> </a></button>
                
                                </td>
                                @if($data->status=='pending')
                                <td >
                                    <a href="{{route('orders.confirm',$data->id)}} " class="btn btn-success " >Confirm</a>
                                </td>
                                @endif
                                @if($data->status=='confirm')
                                <td >
                                    <a href="{{route('orders.cancel',$data->id)}}  " class="btn btn-danger" >cancel</a>
                                </td>
                            @endif
                                </tr>
                
                            </tr>
                        @endforeach
                    </table>
        
        
        
                </div>
                    
                   {{$orders->links()}} 
                </main>
                
            </div>
        </div>
        
            </div>
        </div>
        
        
        
        
        @endsection
        
