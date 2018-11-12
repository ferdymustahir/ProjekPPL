@extends('layouts.App')
@section('content')

<div class="container">
  <h1>Kelola Kayu</h1>
  <button type="button" class="btn btn-primary">Primary</button>         
  <table class="table">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama</th>
        <th>E-mail</th>
        <th>Alamat</th>
        <th>Jenis Kelamin</th>
        <th>Agama</th>
        <th>No Hp</th>
        <th>Foto KTP</th>


      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>Doe</td>
        <td>john@example.com</td>
        <td>john@example.com</td>
        <td>john@example.com</td>
      </tr>
    </tbody>
  </table>
</div>

@endsection