@extends('layouts.app')
@section('content')

<div id="pcoded" class="pcoded">
  <div class="pcoded-container navbar-wrapper">
 
@include('frontend.nav')

<div class="tittle">

  <h2>Add Category</h2>
</div>

<div class="login-box">
<form method="post" action="{{route('admin.addcategory')}}"  enctype="multipart/form-data">
  @csrf
    
  <div class="mb-3">
    <label for="name" class="visually-hidden">Category Name</label>
    <input type="text" name ="name" id="name" placeholder="Category  name" class="form-control @error('name') alert alert-danger @enderror" value="{{old('name')}}">
  </div>
  @error('name')
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
@endsection