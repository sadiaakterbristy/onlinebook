@extends('layouts.app')
@section('content')
    
{{-- <div class="container-fluid">
    <div class="row"> --}}
        <div id="pcoded" class="pcoded">
            <div class="pcoded-container navbar-wrapper">
        @include('frontend.nav ')
        
        
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
              <h1 class="h2">Feedback</h1>
           



            
            </div>
            <div class="card  table-responsive">
                @include('message')
            <table class="table table-hover table-striped table-es-sm table-bordered">
                <thead>
                    
                <tr>
               
                  <th>User Name</th>
                  <th>Feedback</th>
                  <th>Delete</th>
                  
                
                </tr>
            </thead>
                @foreach ( $feedback as $data )
                    <tr>
                        <td  >{{ $data->userContact->name }}</td>
                        <td>
                            {{$data->description}}
                        </td>
                        <td>
                            <a class="btn btn-danger" href=" {{route('feedback.delete', $data->id)}} "> <i class="fas fa-trash"></i></a>
        
                        </td>
                     
                        </tr>
        
                    </tr>
                @endforeach
            </table>

        </div>


            {{$feedback->links()}}
            
        </main>
        
    </div>
</div>
    {{-- </div>
</div> --}}




@endsection