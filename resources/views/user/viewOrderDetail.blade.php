@extends('layouts.master')
@section('content')
@include('frontend.user.header')


<div class="card"> 
    @if (session()->has('error'))
    <div class="alert alert-danger d-flex justify-content-between">
        {{ session()->get('error') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<div id="printArea">
    <div class="container">
        <div class="row ">

    
    <div class="mt-4 mb-5">
        <h4 class="text-dark">Name: {{auth()->user()->name}} </h4>
        <h4 class="text-dark">Username: {{auth()->user()->username}} </h4>
        <h4 class="text-dark">Email: {{auth()->user()->email}} </h4>
        <h4 class="text-dark">Phone: {{auth()->user()->phone}} </h4>
      <hr/>
      </div>
    </div>
</div>

<div  style="background-color: #b4b7b7" class="table-responsive  mt-4 p-5 rounded shadow ">
<!-- reservation table -->
<h2 class="float-start text-light text-center border-buttom ">My Order</h2>

<table class="table my-3  " style="margin-right: 200px;">
<thead>
  <tr>
    <th >#</th>
    <th >Book Name</th>
    <th >Address</th>
    <th >Phone</th>
    <th >Status</th>
    <th >Price</th>
    <th >Total price </th>
    <th>Action</th>
    
     {{-- <th>Action</th> --}}
      
    
   
  </tr>
</thead>
<tbody>
</div>




 @foreach($order as $key=>$data)


    <tr>
    
        <th scope="row">{{$key+1}}</th>
        <td>{{ $data->book->name }}</td>
        <td>{{ $data->order->address }}</td>
        <td>{{ $data->order->phone }}</td>
        <td>{{ $data->order->status }}</td>
        <td>{{ $data->book->price }}</td>
        <td>{{ $data->sub_total }}</td>
      
        
        @if($data->order->status=='pending' )
        <td>
        <a type="btn" class="btn btn-info" href="{{route('myOrder.cancel',$data->order->id)}} ">Cancel</a>
         </td>
         @endif
        @if($data->order->status=='cancel' )
        <td>
        <a type="btn" class="btn btn-info" href="{{route('myOrder.cancel',$data->order->id)}} ">Cancel</a>
         </td>
         @endif

      
        
        
        
    </tr>
    @endforeach

    </tbody>
    </table>
    
    <div  >
<button type="button" onclick="printDiv()" class="btn btn-success mx-3 float-end">Print</button>
</div>
</div>
    </div>
    <canvas class="my-4 w-50" id="myChart" width="900" height="380"></canvas>

    
    <script type="text/javascript">
            function printDiv() {
                var printContents = document.getElementById("printArea").innerHTML;
                var originalContents = document.body.innerHTML;
                document.body.innerHTML = printContents;
                window.print();
                document.body.innerHTML = originalContents;
            }
        </script>
@include('frontend.user.footer')
@endsection