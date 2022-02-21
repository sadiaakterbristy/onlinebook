@extends('layouts.app')
@section('content')
 


<div class="container-fluid">
  <div class="row">
<div id="pcoded" class="pcoded">
<div class="pcoded-container navbar-wrapper">
@include('frontend.nav')


<div class="tittle">

  <h2>Add Book</h2>
</div>




<div class="login-box">
  <form method="post" action="{{route('admin.addbooks')}}"  enctype="multipart/form-data">
    @csrf


    <div class="mb-3">
      <label for="name" class="visually-hidden">Book Name</label>
      <input type="text" name ="name" id="name" placeholder="Book name" class="form-control @error('name') alert alert-danger @enderror" value="{{old('name')}}">
    </div>
    @error('name')
    <div class="error">
        {{ $message }}
    </div>
  @enderror


  <div class="mb-3">
    <label for="author" class="visually-hidden">Author</label>
    <input type="text" name ="author" id="author" placeholder="Author" class="form-control @error('author') alert alert-danger @enderror" value="{{old('username')}}">
  </div>
  @error('author')
  <div class="error">
      {{ $message }}
  </div>
  @enderror

  <div class="mb-3">
    <label for="category" class="visually-hidden" > Category </label>
  
    <select class="form-control rounded-0 shadow-none " name="category_id">
      <option selected> Choose a Category</option>
      @foreach ($add as $data )
        
      <option value="{{$data->id}} " >{{$data->name}} </option>
      @endforeach
    </select>
  </div>

  <div class="mb-3">
    <label for="publishing_year" class="visually-hidden">Publishing Year</label>
    <input type="number" name ="publishing_year" id="publishing_year" placeholder="Publishing Year" class="form-control @error('publishing_year') alert alert-danger @enderror" value="{{old('username')}}">
  </div>
  @error('publishing_year')
  <div class="error">
      {{ $message }}
  </div>
  @enderror


  <div class="mb-4">
    <label for="price" class="visually-hidden">Price</label>
    <input type="number" name ="price" id="price" placeholder="Price" class="form-control @error('price') alert alert-danger @enderror" value="">
  </div>
      @error('price')
    <div class="error">
        {{ $message }}
    </div>
  @enderror


  <div class="mb-4">
    <label for="title" class="visually-hidden">Title</label>
    <input type="text" name ="title" id="title" placeholder="Title" class="form-control @error('title') alert alert-danger @enderror" value="">
  </div>
      @error('title')
    <div class="error">
        {{ $message }}
    </div>
  @enderror


  <div class="mb-4">
    <label for="description" class="visually-hidden">Description</label>
    <input type="text" name ="description" id="description" placeholder="Description" class="form-control @error('description') alert alert-danger @enderror" value="">
  </div>
      @error('description')
    <div class="error">
        {{ $message }}
    </div>
  @enderror

  <div class="mb-4">
    <label for="stock" class="visually-hidden">Stock</label>
    <input type="text" name ="stock" id="stock" placeholder="Stock" class="form-control @error('stock') alert alert-danger @enderror" value="">
  </div>
      @error('stock')
    <div class="error">
        {{ $message }}
    </div>
  @enderror

  <div class="form-group">
    <label for="exampleInputRePicture">Upload Picture</label>
    <input name="picture" type="file" class="form-control" id="exampleInputRePicture" >
  
  </div>
  
     
      <button type="submit" class="btn btn-primary">Add</button>








  </form>
</div>












</div>
</div>
</div>
</div>



@endsection