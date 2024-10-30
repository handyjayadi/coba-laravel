@extends('layouts.main')

@section('container')
<h2 mt-3 ml-3>Halaman User</h2>
<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">username</th>
      <th scope="col">nama Lengkap</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>bimbim</td>
      <td>bimbim zulkifli</td>
      <td><button class="btn btn-primary">Upadate</button> <button class="btn btn-danger">delete</button></td>

    </tr>
    <tr>
      <th scope="row">2</th>
      <td>handy</td>
      <td>handy jayadi</td>
      <td><button class="btn btn-primary">Upadate</button> <button class="btn btn-danger">delete</button></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td >ode</td>
      <td >ode zulkafir</td>
      <td><button class="btn btn-primary">Upadate</button> <button class="btn btn-danger">delete</button></td>
    </tr>
  </tbody>
</table>
@endsection
