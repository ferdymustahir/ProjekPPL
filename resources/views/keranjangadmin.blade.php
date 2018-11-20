@extends('layouts.App')
@section('content')

<div class="container">
  <h2>Keranjang Belanja</h2>
  <p>Pelayanan kami lebih diutamakan daripada perut kami</p>            
  <table class="table">
    <thead>
      <tr>
        <th>Jenis Kayu</th>
        <th>Jumlah</th>
        <th>Harga</th>
        <th>Total</th>
        <th>Status Pembayaran</th>
        <th>Bayar</th>
      </tr>
    </thead>
    <tbody>
      @foreach($lihat as $lihatt)
      <tr>
        <td>{{$lihatt->jenis_kayu}}</td>
        <td>{{$lihatt->jumlah}}</td>
        <td>{{$lihatt->harga}}</td>
        <td>{{$lihatt->total}}</td>
        <td>Belum Terverifikasi</td>
        <td><a href="{{url('/editBarang/'.$view->id)}}" class="btn btn-primary"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></a> <button data-toggle="modal" data-target="#modalupload{{$loop->iteration}}" type="button" class="btn btn-success"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span>Bayar</button></td>
      
      @endforeach
    </tbody>
  </table>
      
</div>

@endsection