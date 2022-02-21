@extends('layouts.app')
@section('content')
<div id="pcoded" class="pcoded">
  <div class="pcoded-container navbar-wrapper">
{{View::make('frontend.nav')}}

<div class="tittle2">

  <h2>Edit Book</h2>
</div>
{{-- @dd($books) --}}
<div class="login-box2">
<form method="post" action="{{route('update.book', $books->id)}}"  enctype="multipart/form-data">
  @csrf
    
  <div class="mb-3">
    <label for="name" class="visually-hidden">Book Name</label>
    <input value="{{$books->name}} " type="text" name ="name" id="name" placeholder="Book name" class="form-control @error('name') alert alert-danger @enderror" value="{{old('name')}}">
  </div>
  @error('name')
  <div class="error">
      {{ $message }}
  </div>
@enderror
<div class="mb-3">
  <label for="author" class="visually-hidden">Author</label>
  <input value="{{$books->author}} " type="text" name ="author" id="author" placeholder="Author" class="form-control @error('author') alert alert-danger @enderror" value="{{old('username')}}">
</div>
@error('author')
<div class="error">
    {{ $message }}
</div>
@enderror
<div class="mb-3">
  <label for="publishing_year" class="visually-hidden">Publishing Year</label>
  <input value="{{$books->publishing_year}} " type="text" name ="publishing_year" id="publishing_year" placeholder="Publishing Year" class="form-control @error('publishing_year') alert alert-danger @enderror" value="{{old('username')}}">
</div>
@error('publishing_year')
<div class="error">
    {{ $message }}
</div>
@enderror

<div class="mb-4">
  <label for="price" class="visually-hidden">Price</label>
  <input value="{{$books->price}} " type="text" name ="price" id="price" placeholder="Price" class="form-control @error('price') alert alert-danger @enderror" value="">
</div>
    @error('price')
  <div class="error">
      {{ $message }}
  </div>
@enderror
<div class="mb-4">
  <label for="title" class="visually-hidden">Title</label>
  <input value="{{$books->title}} " type="text" name ="title" id="title" placeholder="Title" class="form-control @error('title') alert alert-danger @enderror" value="">
</div>
    @error('title')
  <div class="error">
      {{ $message }}
  </div>
@enderror
<div class="mb-4">
  <label for="description" class="visually-hidden">Description</label>
  <input value="{{$books->description}} " type="text" name ="description" id="description" placeholder="Description" class="form-control @error('description') alert alert-danger @enderror" value="">
</div>
    @error('description')
  <div class="error">
      {{ $message }}
  </div>
@enderror
<div class="mb-4">
  <label for="stock" class="visually-hidden">Stock</label>
  <input value="{{$books->stock}} " type="text" name ="stock" id="stock" placeholder="Stock" class="form-control @error('stock') alert alert-danger @enderror" value="">
</div>
    @error('stock')
  <div class="error">
      {{ $message }}
  </div>
@enderror
{{-- <div class="form-group">
  <label for="exampleInputRePicture">Upload Picture</label>
  <input name="picture" type="file" class="form-control" id="exampleInputRePicture" >

</div> --}}

   
    <button type="submit" class="btn btn-primary">Add</button>
  </form>
</div>
</div>
</div>

@endsection