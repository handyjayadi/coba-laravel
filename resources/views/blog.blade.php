@extends('layouts.main')

@section('container')
<h1>blog</h1>
<h3>

</h3>
@foreach ($posts as $p)
<article class="mb-5">
    <a href="/blog/{{$p["slug"]}}"><h2>judul :{{$p ["title"]}}</h2></a>
    <p>{{$p["body"]}}</p>
@endforeach
</article>
@endsection