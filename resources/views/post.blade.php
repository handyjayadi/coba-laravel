@extends('layouts.main')

@section('container')
<article>
    <h2>Judul :{{$post['title']}}</h2>
    <h5>Author :{{$post['author']}}</h5>
    <p>{{$post['body']}}</p>
</article>

<a href="/blog"><button class="btn btn-primary">kembali</button></a>
@endsection