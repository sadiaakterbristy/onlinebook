@extends('layouts.master')
@section('content')
@include('frontend.user.header')




<div class="heading-tag-2">
    <h2> Category</h2>
</div>
<br>

<div class="row d-flex justify-content-center">
    <div class="col-md-4">
        <form action="{{route('user.categories')}}" method="GET">
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




            
<div class="album py-5 bg-light">
    <div class="container">

        <div class=" d-flex   row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

@foreach($category as $data)

            <div class="col">
                <div className="container mt-2 mb-5 col-md-4">
                <div class="card shadow-sm" style="background-color: rgba(107, 120, 128, 0.493)">
                    <img  style="height:200px; width:100%; "src="{{url('/files/photo/'.$data->file)}}" alt="image">
                    <div class="card-body">
                        <h4 style="font-family: 'Staatliches', cursive; font-size:2.5rem" class="card-title">Name:  {{$data->name}}</h4 style="font-family: Arial, Helvetica, sans-serif;">
                   

                    </div>
                    <div>
                        <a href=" {{route('user.categories.book', $data->id)}} " class="btn btn-md " style="background-color: rgba(244, 246, 248, 0.877);" >View <i class="fas fa-eye"></i></a>

                    </div>

                    </div>
                </div>
            </div>


@endforeach
        </div>
    </div>
    {{$category->links()}}
</div>

<div class=" py-3 d-flex justify-content-center">


    @if (isset($search))
    <p class="text-secondary">
        <span>searching for '{{ $search }}' found '{{ count($category) }}' results</span>
    </p>
@endif
</div>
<canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>

@include('frontend.user.footer')
@endsection