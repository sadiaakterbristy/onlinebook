@extends('layouts.app')
@section('content')
 
<div id="pcoded" class="pcoded">
  <div class="pcoded-container navbar-wrapper">

{{View::make('frontend.nav')}}

<div class="tittle2">

  <h2>Edit Category</h2>
</div>

<div class="login-box2">
<form method="post" action="{{route('update.categories', $category->id )}}"  enctype="multipart/form-data">
  @csrf
    
  <div class="mb-3">
    <label for="name" class="visually-hidden">Category Name</label>
    <input value="{{$category->name}} " type="text" name ="name" id="name" placeholder="Category  name" class="form-control @error('name') alert alert-danger @enderror" value="{{old('name')}}">
  </div>







   
    <button type="submit" class="btn btn-primary">Add</button>
  </form>
</div>
</div>
</div>

@endsection