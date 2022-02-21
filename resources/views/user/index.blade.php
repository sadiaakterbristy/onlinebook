@extends('layouts.master')
@section('content')
@include('frontend.user.header')




@include('user.Home.slider')


<hr class="featurette-divider">


<div class="heading-tag">
    <h2 class="mb-5"> <a href="{{route('user.categories')}} ">Category</a></h2>
</div>
<hr class="featurette-divider">

<br>

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">


<div class="container marketing mb-5">

    <!-- Three columns of text below the carousel -->
    <div class="row">
      
      
      @foreach ($category as $data )
      <div class="col-lg-4">
          
       
        <img class="img-1"  style="height:200px; width:200px; "src="{{url('/files/photo/'.$data->file)}}" alt="image">
        
        {{-- <img src="{{asset('asset/4.jpg')}} " alt="" class="img-1"> --}}
        <h2 class="mt-3">{{$data->name}} </h2>
        {{-- <p>Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p> --}}
        {{-- <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p> --}}
      </div>
      
      @endforeach
      
      <div class="container d-flex justify-content-center">
        <a type="btn" class="btn btn-primary" href="{{route('user.categories')}} ">See more</a>
      </div>
     
    </div><!-- /.row -->


</div>

  </div>

  <hr class="featurette-divider">

  <div class="heading-tag">
    <h2 class=""> <a href="{{route('user.book')}} ">BOOK</a></h2>
</div>
<br>

    <div class="container">
    <!-- START THE FEATURETTES -->
@foreach ($book as $data )
  

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">{{$data->name}}  <span class="text-muted"></span></h2>
        <p class="lead">{{$data->description}} </p>
      </div>
      <div class="col-md-5">
       
        <img class="img-2"  src="{{url('/files/photo/'.$data->file)}}" alt="image">


      </div>
    </div>


    @endforeach
    <hr class="featurette-divider">
    
      <div class="container d-flex justify-content-center">
        <a type="btn" class="btn btn-primary" href="{{route('user.book')}} ">See more</a>
      </div>
      <hr class="featurette-divider">
      

  </div><!-- /.container -->
  <canvas class="my-4 w-10" id="myChart" width="90" height="38"></canvas>

@include('frontend.user.footer')


@endsection
