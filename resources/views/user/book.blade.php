@extends('layouts.master')
@section('content')
@include('frontend.user.header')

<div class="heading-tag-2">
    <h2>Book</h2>
    </div>


    <div class="row d-flex justify-content-center ">
        <div class="col-md-4" >
            <form action="{{route('user.book')}}" method="GET">
                @csrf
                <div class="row d-flex align-items-center">
                    <div class="col-md-6">
                        <input name="search" type="text" placeholder="Search" class="form-control">
                    </div>
                    <div class="col-md-6">
                      

                        <button type="submit" class="btn btn-primary">Search</button>
                    </div>
                </div>
            </form>
        </div>

        
    </div>
  
<br>

@include('message')
            



            
            <div class="album py-5 bg-light" >
                <div class="container" >
            
                    <div class=" d-flex   row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3" >

            
            @foreach($books as $data)
            
                        <div class="col">
                            <div className=" container mt-2 mb-5 col-md-3">
                                
                                <div class="card shadow-sm" style="background-color: rgba(17, 90, 136, 0.493); height: 1000px;">
                                
                                    {{-- <a href="#" class="add-cart"><i class="fas fa-shopping-cart"></i></a> --}}
                                   
                                
                                    <img class="card-img-center" style="height:50%; width:50%;"src="{{url('/files/photo/'.$data->file)}}" alt="product image">
                                   
                                  
                                    <div class="card-body">
                                       
                                        
                                        <h4 style="font-family: 'Staatliches', cursive; font-size:2.5rem" class="card-title">Name : {{$data->name}}</h4>
                                        <h6 style="font-family: 'Staatliches', cursive; font-size:1.5rem" class="card-text">Author : {{ $data->author }} </h6>
                                        <h6 style="font-family: 'Staatliches', cursive; font-size:1.5rem" class="card-text">Category: {{ $data->category->name }} </h6>
                                        <h6 style="font-family: 'Staatliches', cursive; font-size:1.5rem" class="card-text">Year: {{ $data->publishing_year }} </h6>


                                        {{-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> --}}
                                    </div>
                                    <div class="d-flex justify-content-center align-items-center mb-3" style=" margin-left:10px; font-family: 'Staatliches', cursive; ">
                                        <h5 style="font-size:1.2rem "> About: {{$data->description}} </h5>
                                    </div>
                                    
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-md " style="text-color: rgb(14, 14, 150); background-color: #2b7aaf; "  >
                                            <a href="{{route('addToCart', $data->id )}} ">   Add to Cart <i class="fas fa-shopping-cart"> </i> </a> </button>
                                            <button type="button" class="btn btn-md " style=" background-color: #e6740acc; margin-left:1rem "  ><a href="{{route('addToWishlist', $data->id )}} ">   Add to Wishlist <i class="fas fa-heart"> </i> </a> </button>

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
    {{$books->links()}}
            </div>
<div class=" py-3 d-flex justify-content-center">


            @if (isset($search))
            <p class="text-secondary">
                <span>searching for '{{ $search }}' found '{{ count($books) }}' results</span>
            </p>
        @endif
    </div>

            <canvas class="my-4 w-50" id="myChart" width="900" height="380"></canvas>


            @include('frontend.user.footer')
@endsection
