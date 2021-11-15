@extends('dashboard')

@section('content')

  @include ('courses/_search_form')

  <div class="d-flex justify-content-between">
    <div class="p-2">
      <h1>LIST COURSES : </1>
    </div>
  </div>

  @include ('courses/_list')
@endsection
