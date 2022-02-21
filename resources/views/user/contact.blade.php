@extends('layouts.master')
@section('content')
@include('frontend.user.header')



<div class="heading-tag-2">
  <h2>Feedback</h2>
  </div>
  @include('message')

<div class="container d-flex justify-content-center " style="margin-top: 10%">
    <div class="col">
      
      <div class="container">
        <div class="row ">

    
    <div class=" mb-3">
        <h4 style="font-family: 'Stint Ultra Condensed', cursive; font-size:40px " class="text-dark">Name: {{auth()->user()->name}} </h4>
        <h4 style="font-family: 'Stint Ultra Condensed', cursive; font-size:40px " class="text-dark">Username: {{auth()->user()->username}} </h4>
        <h4 style="font-family: 'Stint Ultra Condensed', cursive; font-size:40px " class="text-dark">Email: {{auth()->user()->email}} </h4>
        <h4 style="font-family: 'Stint Ultra Condensed', cursive; font-size:40px " class="text-dark">Phone: {{auth()->user()->phone}} </h4>
      <hr/>
      </div>
    </div>
</div>     

<form action="{{route('review.submit')}} " method="post">
  @csrf
  

  
  <div class="form-outline mb-4" >
    <label for="description" style=" color:sienna;  font-family: 'Stint Ultra Condensed', cursive; "> <h1>Description:</h1> </label>
    <textarea name="description" class="form-control" rows="4" style="background-color: rgb(206, 200, 188)"> </textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>



<canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>


</div>
</div>
@include('frontend.user.footer')

@endsection