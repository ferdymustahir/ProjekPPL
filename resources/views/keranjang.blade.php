@extends('layouts.App')
@section('content')

<div class="container">
  <h2>Keranjang Belanja</h2>
  <p>Pelayanan kami lebih diutamakan daripada perut kami</p>            
  <table class="table">
    <thead>
      <tr>
        <th>No</th>
        <th>Jenis Kayu</th>
        <th>Jumlah</th>
        <th>Harga</th>
        <th>Total</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($view as $data)
      <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$data->jenis_kayu}}</td>
        <td>{{$data->jumlah}}</td>
        <td>{{$data->harga}}</td>
        <td>{{$data->total}}</td>
        <td><button type="button" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i></button></td>

      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection