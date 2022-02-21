@extends('layouts.app')
@section('content')
  



<div class="container-fluid">
    <div class="row">
      
        <div id="pcoded" class="pcoded">
            <div class="pcoded-container navbar-wrapper">
       @include('frontend.nav')

        
      
        
        
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
              <h1 class="h2">Books</h1>
              <button class="btn btn-primary">
                  <a href=" {{route('addbooks') }} ">Add Book</a>
              </button>
            </div>


            @include('message')

            

          <div class="card"> 
            <table class="table table-hover table-striped table-es-sm table-bordered">
                <thead>
                <tr  >
               
                <th  >Book Name</th>
                <th  >Image</th>
                <th  >Author</th>
                <th  >Category</th>
                <th  >Year</th>
                <th  >Price</th>
                <th  >Title</th>
                <th  >Description</th>
                <th  >Stock</th>
                <th >Edit</th>
                <th >Delete</th>
               
                </tr>
            </thead>
                @foreach ($books as $book)
                <tr  >
                
                <td  >{{ $book->name }}</td>
                <td><img src="{{url('/files/photo/'.$book->file)}}" style="width:70px; height:60px;" ></td>
                <td  >{{ $book->author }}</td>
                <td  >{{ $book->category->name }}</td>
                
                <td  >{{ $book->publishing_year }}</td>
                <td  >{{ $book->price }}</td>
                <td  >{{ $book->title }}</td>
                <td  >{{ $book->description }}</td>
                <td  >{{ $book->stock }}</td>
                <td>
                    <button type="button" class="btn btn-info text-white"><a href="{{route('editbook', $book->id)}} "> <i class="fas fa-edit"></i> </a></button>
                    {{-- <a class="btn btn-danger" href="{{route('book.delete', $book->id)}}"> <i class="fas fa-trash"></i> </a> --}}

                </td>
                <td>
                    
                     <a class="btn btn-danger" href="{{route('book.delete', $book->id)}}"> <i class="fas fa-trash"></i> </a> 
                </td>
                
                </tr>
                @endforeach
                </table>
            </div> 
            {{$books->links()}}  
        </main>
        
    </div>
</div>
    </div>
</div>





@endsection