@extends('layouts.App')
@section('content')

<div class="container">
	
		<h3>Proses Pengiriman</h3><br>
	
  	<form class="form-horizontal">
  		<div class="form-group">
    		<label for="inputEmail3" class="col-sm-4 control-label">Nama Penerima</label>
    	<div class="col-sm-5">
      		<input type="email" class="form-control" id="inputEmail3" placeholder="Nama Penerima ">
    	</div>
  		</div>
  		<div class="form-group">
    	<label for="inputPassword3" class="col-sm-4 control-label">Alamat</label>
    <div class="col-sm-5">
      <textarea id="inputPassword3" class="form-control" placeholder="Alamat"></textarea>
    </div>
  	</div>
  	<div class="form-group">
    	<label for="inputPassword3" class="col-sm-4 control-label">Provinsi</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="inputPassword3" placeholder="Provinsi">
    </div>
  	</div>
  	<div class="form-group">
    	<label for="inputPassword3" class="col-sm-4 control-label">Kota</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="inputPassword3" placeholder="Kota">
    </div>
  	</div>
  	<div class="form-group">
    <div class="col-sm-offset-4 col-sm-5">
      
      <button type="button" class="btn btn-info">Lanjutkan</button>
    </div>
  </div>
  @endsection