@extends('layouts.app')
@section('content')
    
{{-- <div class="container-fluid">
    <div class="row"> --}}
        <div id="pcoded" class="pcoded">
            <div class="pcoded-container navbar-wrapper">
        @include('frontend.nav ')
        
        
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
              <h1 class="h2">Category</h1>
              <button type="button" class="btn btn-primary"  data-bs-toggle="modal" data-bs-target="#exampleModal">
                <a href="{{route('admin.addcategory')}} ">Add Category</a>
            </button> 



            
            </div>
            <div class="card  table-responsive">
                @include('message')
            <table class="table table-hover table-striped table-es-sm table-bordered">
                <thead>
                    
                <tr>
               
                  <th >Image</th>
                  <th>Category Name</th>
                  <th>Edit</th>
                  <th>Delete</th>
                
                </tr>
            </thead>
                @foreach ( $category as $data )
                    <tr>
                        <td><img src="{{url('/files/photo/'.$data->file)}}" style="width:70px; height:60px;" ></td>
                        <td  >{{ $data->name }}</td>
                        <td>
                            <button type="button" class="btn btn-info text-white"><a  href="{{route('edit.categories', $data->id )}} " > <i class="fas fa-edit"></i> </a></button>
        
                        </td>
                        <td>
                            <a class="btn btn-danger" href=" {{route('category.delete', $data->id)}} "> <i class="fas fa-trash"></i></a>
        
                        </td>
                        </tr>
        
                    </tr>
                @endforeach
            </table>

        </div>


           {{$category->links()}} 
            
        </main>
        
    </div>
</div>
    {{-- </div>
</div> --}}




@endsection