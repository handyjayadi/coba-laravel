@extends('layouts.main')

@section('container')
<h1>blog</h1>
<h3>

</h3>
@foreach ($posts as $p)
<article class="mb-5">
    <h2>judul :{{$p ["title"]}}</h2>
    <h5>Author : {{$p ["author"]}}</h5>
    <p>{{$p["body"]}}</p>
@endforeach
</article>
@endsection