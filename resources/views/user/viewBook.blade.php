@extends('layouts.master')
@section('content')
@include('frontend.user.header')

<div class="heading-tag-2">
    <h2>Book </h2>

    </div>

    @include('message')
   
   
            
    <div class="album py-5 bg-light">
        <div class="container">
    
            <div class=" d-flex   row row-cols-2 row-cols-sm-3 row-cols-md-4 g-3">
      
               
    
                <div class="col">
                    <div className="container mt-2 mb-5 col-md-3">
                        <div class="card shadow-sm " style="background-color:  rgba(17, 90, 136, 0.493)">
                        
                        
                        <img  style="height:50%; width:50%; "src="{{url('/files/photo/'.$books->file)}}" alt="image">
                        <div class="card-body">
                            <h4 style="font-family: 'Staatliches', cursive; font-size:2.5rem;" class="card-title">Name : {{$books->name}}</h4>
                            <h6 style="font-family: 'Staatliches', cursive; font-size:1.5rem;" class="card-text">Author : {{ $books->author }} </h6>
                            <h6 style="font-family: 'Staatliches', cursive; font-size:1.5rem;" class="card-text">Category: {{ $books->category->name }} </h6>
                            <h6 style="font-family: 'Staatliches', cursive; font-size:1.5rem;" class="card-text">Year: {{ $books->publishing_year }} </h6>

    
                        </div>
                        
                        <div class="d-flex justify-content-center align-items-center mb-3" style=" 20px; margin-left:10px; ">
                            <h5 style="font-family: 'Staatliches', cursive; font-size:1.2rem"> About: {{$books->description}} </h5>
                        </div>

                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-md " style="text-color: rgb(14, 14, 150); background-color: #2b7aaf; "  ><a href="{{route('addToCart', $books->id )}} ">   Add to Cart <i class="fas fa-shopping-cart"> </i> </a> </button>
                                {{-- <button type="button" class="btn btn-sm " style=" background-color: #e48a36cc; margin-left:1rem "  ><a href="{{route('addToWishlist', $books->id )}} ">   Add to Wishlist <i class="fas fa-heart"> </i> </a> </button> --}}
                                {{-- <a href="" class="btn btn-sm btn-info">View <i class="fas fa-eye"></i></a> --}}
                            </div>
                            <h4>{{$books->price}} BDT</h4>
                        </div>
    
    
                        </div>
                    </div>
                </div>


      
            </div>
        </div>
    </div>

    <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>


    @include('frontend.user.footer')
@endsection
