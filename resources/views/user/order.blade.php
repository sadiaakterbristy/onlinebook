@extends('layouts.master')
@section('content')
@include('frontend.user.header')


<div style="margin-left: 500px; margin-top: 30px;" >


  <div class="card card-body">
    {{-- <table class="table table-hover table-striped table-es-sm table-bordered"> --}}
      
              
              
 <div class="col-md-4">
  <form method="post" action="{{route('user.order.submit')}} "  enctype="multipart/form-data">
    @csrf
@foreach ($order as $data )
  

      <th>Book Name : {{$data->cartBook->name }}</th>
      <br>
      <br>
     
    
    <input value="{{$data->cartBook->id }}" type="hidden" name ="book_id"  >
    @endforeach

    <div class="form-outline mb-4 ">
    <label for="price" class="">Price:</label>
    <input type="text" readonly name ="price" class="form-control " value="{{$total }}">
    </div>
  




    <div class="form-outline mb-4 ">
    <label for="date" >Date</label>

    <input type="date" name ="date" id="date" value="{{date('Y-m-d')}}" min="{{date('Y-m-d')}}" placeholder="Date" class="form-control ">
    </div>


    <div class="form-outline mb-4 ">
    <input type="text" name ="address" id="details" placeholder="Address" class="form-control @error('phone') alert alert-danger @enderror"  >
    </div>
    <div class="form-outline mb-4 ">
    <input type="text" name ="phone" id="details" placeholder="phone" class="form-control @error('phone') alert alert-danger
      
    @enderror "  >
    </div>
 
    @error('phone')
    <div class="error">
        {{ $message }}
    </div>
    @enderror

    
 


      <button type="submit" class="btn btn-primary">Order</button>
    </form>
 </div>

    {{-- </table> --}}
  </div>
</div>

@include('frontend.user.footer')
@endsection