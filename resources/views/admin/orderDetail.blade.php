@extends('layouts.app')
@section('content')
    

            
        <div class="container-fluid">
            <div class="row">
                <div id="pcoded" class="pcoded">
                    <div class="pcoded-container navbar-wrapper">
                @include('frontend.nav')
             
                
                
                <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                      <h1 class="h2">Order Details</h1>
                 
        
        
        {{-- @dd( $orderViews) --}}
                    
                    </div>
                    @include('message')
                    <div class="text-95 text-secondary-d3 mt-5">
                        <table class="table">
                            <thead>
                                <tr>
                                <th>#</th>
                                <th>Book Name</th>
                                <th>Quantity</th>
                                <th>Book Price</th>
                                <th>Total (+vat) </th>
                            </tr>
                            </thead>

                        @foreach($orderList  as $key=> $order)

                        {{-- @dd($order->food); --}}
                            <tr>
                               <td>{{ $key+1 }}</td>
                              <td>{{ $order->book->name }}</td>
                               <td>{{ $order->quantity }}</td>
                               <td>{{ $order->book->price }}</td>
                                <td>{{ $order->sub_total }}</td>
                            
                        </tr>
                            

                            @endforeach
                        </table>
                    </div>
                    
                    <a type="btn" class="btn btn-secondary my-5" href="{{route('orders')}} ">back</a>
                </main>
                
            </div>
        </div>
        
            </div>
        </div>
        
        
        
        
        @endsection
        
