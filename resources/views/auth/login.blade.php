@extends('layouts.app')
@section('content')

<div id="pcoded" class="pcoded">
  <div class="pcoded-container navbar-wrapper">
 @include('frontend.nav')

<div class="tittle2">

  <h2>Login</h2>
</div>

<div class=" login-box2">
@include('message')
<form method="post" action=" {{route('login')}} ">  
  @csrf

  <div class="form-outline mb-4 ">
    <label for="email" class="visually-hidden  form-level">Email</label>
    <input type="text" name ="email" id="email" placeholder="Email" class="form-control @error('email') alert alert-danger @enderror" value="{{old('email')}}"/>
  </div>
  @error('email')
<div class="error">
    {{ $message }}
</div>
@enderror
  



  <div class="form-outline mb-4 ">
    <label class="visually-hidden form-label" for="password">Password</label>
    <input type="password" id="password" name="password" placeholder="Password" class="form-control @error('password') alert alert-danger @enderror" />
  </div>
  @error('password')
  <div class="error">
      {{ $message }}
  </div>
  @enderror

  <!-- 2 column grid layout for inline styling -->
  
  <div class="row mb-4 ">
    <div class="col d-flex justify-content-center">
      <!-- Checkbox -->
      <div class="form-check">
        <input
          class="form-check-input"
          type="checkbox"
          value=""
          id="form1Example3"
          checked
        />
        <label class="form-check-label" for="form1Example3"> Remember me </label>
     
    </div>
    
  </div>



  <!-- Submit button -->
  <button type="submit" class="btn btn-primary btn-block">Sign in</button>




</form>
{{-- <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas> --}}

{{-- 
</div>
<div class="reg">
  <ul>
    <a class="reg"  href="{{route('register')}} ">Register New Admin</a>
  </ul>

</div> --}}


</div>
</div>
@endsection