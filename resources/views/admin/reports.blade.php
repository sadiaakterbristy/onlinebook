@extends('layouts.app')
@section('content')
    
<div class="container-fluid">
    <div class="row">
        <div id="pcoded" class="pcoded">
            <div class="pcoded-container navbar-wrapper">
        @include('frontend.nav')
        
        
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
              <h1 class="h2">Reports</h1>
              
            </div>
            

<form action={{ route('reports') }} method="GET">

    {{-- @csrf --}}

    <div class="row">
        <div class="col-md-8">
            <div class=" row">
                <div class="col-md-6">
                    <label for="from">Date From:</label>
                    <input id="from" type="date" class="form-control" name="from_date">
                </div>

                <div class="col-md-6">
                    <label for="to">Date To:</label>
                    <input id="to" type="date" class="form-control" name="to_date">
                </div>
            </div>
        </div>
        <div class="col-md-4 mt-4 d-flex justify-content-center">
            <button type="submit" class="btn btn-primary">Search</button>
            <button type="button" onclick="printDiv()" class="btn btn-success mx-3">Print</button>
        </div>
    </div>
</form>

<div id="printArea">


<table class="table table-hover table-striped table-bordered">

    <thead>
      <tr>
        <th >#</th>
        <th >Customer Name</th>
        <th >Contact Number</th>
        <th >Email</th>
        

        <th >Date</th>

      </tr>
    </thead>
    <tbody>
       
        @if ($report->count() > 0)
        @foreach($report as $key=>$request)
        

        <tr>
             <th scope="row">{{$key+1}} </th>
            <td>{{$request->user->name}}</td>
            <td>{{$request->user->phone}}</td>
            <td>{{$request->user->email}}</td>
          


            <td>{{$request->booking_date}}</td>







        </tr>




        @endforeach


        @else

        <td>
            <h4>No Data Found!</h4>
        </td>


    @endif
    </tbody>
  </table>
</div>



{{$report->links()}}

</main>

</div>
</div>
</div>
</div>
<script type="text/javascript">
function printDiv() {
    var printContents = document.getElementById("printArea").innerHTML;
    var originalContents = document.body.innerHTML;

    document.body.innerHTML = printContents;

    window.print();

    document.body.innerHTML = originalContents;
}

</script>



        


@endsection