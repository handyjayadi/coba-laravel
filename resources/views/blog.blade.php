@extends('layouts.main')

@section('container')
<h1 class="mb-5">{{$title}}</h1>
<h3>

</h3>
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

@endsection