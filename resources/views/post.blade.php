@extends('layouts.main')

@section('container')
<div class="container col-sm-9">
<article class="">
    <h2 class="mb-5 mt-5 text-decoration-none">{{$post->title}}</h2>
    <p>By. {{$post->user->name}} <a class="text-decoration-none" href="/categories/{{$post->category->slug}}">{{$post->category->name }}</a> </p>

{!!$post->body!!}
</article>   
    
<a href="/blog"><button class="btn btn-primary mt-5 ">kembali</button></a>
</div>


@endsection