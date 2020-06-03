@extends('base')

@section('content')
@if (Auth::check())

	
    @can('tcos-only', Auth::user())
    <div class="content">
      <a href="registerNewUser"><button type="button" class="btn btn-success">Register</button></a>
      <button type="button" class="btn btn-primary">Select</button>
      <button type="button" class="btn btn-primary">Update</button>
      <button type="button" class="btn btn-danger">Delete</button>
    </div>

    @endcan

@endif


</div>
@endsection