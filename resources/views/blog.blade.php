@extends('layouts.main')

@section('container')
<h1>blog</h1>
<h3>

</h3>
<table class="table table-hover">
    <thead>
    <tr>
        <td>nama</td>
        <td>umur</td>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>{{$nama}}</td>
        <td>{{$umur}}</td>
    </tr>
    </tbody>
</table>
@endsection