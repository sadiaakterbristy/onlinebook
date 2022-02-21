@extends('layouts.master')
@section('content')
@include('frontend.user.header')

<div class="heading-tag-2">
    <h2>Book </h2>
    {{-- @foreach($books as $data)
    <h2>Book Name:{{$data->categories_id}}</h2> 
    @endforeach --}}
    </div>

   
@include('message')
    
            
    <div class="album py-5 bg-light">
        <div class="container">
    
            <div class=" d-flex   row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                
    
    @foreach($books as $data)
    
  
    
                <div class="col">
                    <div className="container mt-2 mb-5 col-md-3">
                        <div class="card shadow-sm " style="background-color: rgba(17, 90, 136, 0.493); height:850px;">
                        
                        
                        <img  style="height:50%; width:50%; "src="{{url('/files/photo/'.$data->file)}}" alt="product image">
             
                        <div class="card-body">
                                        <h4 style="font-family: 'Staatliches', cursive; font-size:2.5rem" class="card-title">Name : {{$data->name}}</h4>
                                        <h6 style="font-family: 'Staatliches', cursive; font-size:1.5rem" class="card-text">Author : {{ $data->author }} </h6>
                                        <h6 style="font-family: 'Staatliches', cursive; font-size:1.5rem" class="card-text">Category: {{ $data->category->name }} </h6>
                                        <h6 style="font-family: 'Staatliches', cursive; font-size:1.5rem" class="card-text">Year: {{ $data->publishing_year }} </h6>
                       
                       
    
                        </div>
                        <div class="d-flex justify-content-center align-items-center mb-3" style="margin-left:10px;  ">
                            <h5 style="font-family: 'Staatliches', cursive; font-size:1.2rem"> About: {{$data->description}} </h5>
                        </div>

                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-md " style="color: white; background-color: #71B7E6; "  ><a href="{{route('addToCart', $data->id )}} ">   Add to Cart <i class="fas fa-shopping-cart"> </i> </a> </button>
                                <button type="button" class="btn btn-md " style=" background-color: #e48a36cc; margin-left:1rem "  ><a href="{{route('addToWishlist', $data->id )}} ">   Add to Wishlist <i class="fas fa-heart"> </i> </a> </button>

                                {{-- <a href="" class="btn btn-sm btn-info">View <i class="fas fa-eye"></i></a> --}}
                            </div>
                            <h4 >{{$data->price}} BDT</h4>
                        </div>
    
    
                        </div>
                    </div>
                </div>

    
    @endforeach
            </div>
        </div>
    </div>

    <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>


    @include('frontend.user.footer')
@endsection
