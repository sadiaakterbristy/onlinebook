@extends('layouts.app')
@section('content')
    

            
        <div class="container-fluid">
            <div class="row">
                <div id="pcoded" class="pcoded">
                    <div class="pcoded-container navbar-wrapper">
                @include('frontend.nav')
             
                
                
                <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                      <h1 class="h2">Payment</h1>
                 
        
        
        
                    
                    </div>
                    @include('message')
                    <div class="card">
                    <table class="table table-hover table-striped table-es-sm table-bordered">
                        <thead>
                        <tr  >
                       
                        <th  >User Name</th>
                        <th  >Order ID</th>
                        <th>Total Amount</th>
                        <th>Payment Method</th>
                        <th>Payment Number</th>
                        <th>Transaction ID</th>
                        <th >Status</th>
                        <th >View Details</th>
                        <th >Action</th>
                        </tr>
                    </thead>

                        @foreach ( $orders as $data )
                        
                            <tr> 
                             
                                <td  >{{ $data->user->name }}</td>

                                <td>{{$data->order_id}}</td>
                                <td>{{$data->payment}}</td>
                                <td>{{$data->payment_method}}</td>
                                <td>{{$data->t_phone }}</td>
                                <td>{{$data->t_id}}</td>
                                <td>{{$data->pay_status}}</td>

                                <td>
                                    <button type="button" class="btn btn-secondary"><a  href="{{route('order.detail',$data->order_id)}} " > <i class="fas fa-eye"></i> </a></button>
                
                                </td>
                                @if($data->pay_status=='unpaid')
                                <td >
                                    <a href="{{route('orders.payment',$data->id)}} " class="btn btn-warning " >Paid</a>
                                </td>
                                @endif
                                @if($data->pay_status=='paid')
                                <td >
                                    <a href="{{route('orders.payment.cancel',$data->id)}}  " class="btn btn-danger" >Unpaid</a>
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
        
