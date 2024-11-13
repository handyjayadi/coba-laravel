@extends('layouts.main')

@section('container')
<h1>Post Categories</h1>
<h3>

</h3>
@foreach ($categories as $c)

<div class="card mt-3 mb-3">
  <div class="card-header">
    Kategori {{$c->name}}
  </div>
  <div class="card-body">
    <!-- <h5 class="card-title">Special title treatment</h5> -->
    
        <a href="/categories/{{$c->id}}" class="card-text text-decoration-none"><h2>{{$c->name}}</h2></a>
    
    <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
  </div>
</div>
    
    

@endforeach

@endsection