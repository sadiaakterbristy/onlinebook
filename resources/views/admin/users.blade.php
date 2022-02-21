@extends('layouts.app')
@section('content')
    
<div class="container-fluid">
    <div class="row">
      <div id="pcoded" class="pcoded">
        <div class="pcoded-container navbar-wrapper">
        {{View::make('frontend.nav ')}}
        
        
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
              <h1 class="h2">Customer</h1>
              
            </div>
         
          <div>
         
              
           
            <table class="table table-hover table-striped table-es-sm table-bordered">
          <thead>
                <tr>
               
                <th>Name</th>
                <th>Username</th>
                <th>Email</th>
                <th>Phone</th>
               
                <th>Delete</th>

                </tr>
              </thead>
                @foreach ($users as $user)
                <tr  >
                
                <td  >{{ $user->name }}</td>
                <td  >{{ $user->username }}</td>
                
                <td  >{{ $user->email }}</td>
                <td  >{{ $user->phone }}</td>
               
                <td>
                  <a class="btn btn-danger" href="{{route('users.delete', $user->id)}}"> Delete</a>

              </td>
                </tr>
                @endforeach
                </table>
             
          </div>
          {{$users->links()}}
        </main>
        
    </div>
</div>
    </div>
</div>

{{-- {{ $users->links() }} --}}
@endsection