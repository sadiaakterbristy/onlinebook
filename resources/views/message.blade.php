

<center>
@if(Session::has('success'))
{{-- <div class="alert"> --}}
<p class="alert alert-success">{{ Session::get('success') }}</p>
{{-- <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> --}}
{{-- </div>  --}}
@endif
</center>
<center>
@if(Session::has('error'))
{{-- <div class="alert"> --}}
<p class="alert alert-danger">{{ Session::get('error') }}</p>
  {{-- <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> --}}
{{-- </div>  --}}
@endif
</center>
