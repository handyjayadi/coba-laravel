@extends('layouts.main')

@section('container')


<h1 class="mb-5 ">{{$title}}</h1>



<div class="row mb-5 mt-5 justify-content-center ">
  <div class="col-md-6">
    <form action="/blog" method="get">
      <div class="input-group mb-3">
        <input class="form-control" placeholder="Cari Blog..." name="search" type="search" id="search" value="{{request('search')}}">
        
        <button class="btn btn-primary" type="submit">search</button>
      </div>
    </form>
  </div>
</div>
<div class="d-flex justify-content-center">
{{$posts->links()}}
</div>


@if($posts->count())
@foreach ($posts as $p)
<div class="card mt-4 mb-4 text-decoration-none">
<p class="card-header "></pclass>By. <a href="/author/{{$p->user->username}}" class="text-decoration-none"> {{$p->user->name}}</a> in <a href="/categories/{{$p->category->id}} " class=" mb-5 text-decoration-none">{{$p->category->name }}</a> </p>
  
  <div class="card-body">
  <h5 class="card-title"><a href="/blog/{{$p->id}}" class="text-decoration-none">{{$p->title}}</a></h5>  
    <p class="mb-2p ">{{$p->excerpt}}</p>
    <p>{{$posts[0]->created_at->diffForHumans()}}</p>
    <a href="/blog/{{$p->id}}" class="btn btn-primary">read more</a>
  </div>
</div>
@endforeach

 @else
 <p class="text-center fs-4">No Blog Found..!!</p>
 @endif

@endsection