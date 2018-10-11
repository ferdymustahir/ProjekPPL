@extends('layouts.App')
@section('content')
	<div class="container">
	
		<h3>Tambah Penjualan</h3><br>
	
  	<form method="post" action="\tambahbarang" class="form-horizontal">
  		<div class="form-group">
    		<label for="inputEmail3" class="col-sm-4 control-label">Jenis Kayu</label>
    	<div class="col-sm-5">
      		<input type="email" class="form-control" id="inputEmail3" placeholder="Jenis Kayu ">
    	</div>
  		</div>
  	<div class="form-group">
    	<label for="inputPassword3" class="col-sm-4 control-label">Stok</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="inputPassword3" placeholder="Stok Tersedia">
    </div>
  	</div>
  	<div class="form-group">
    	<label for="inputPassword3" class="col-sm-4 control-label">Harga</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="inputPassword3" placeholder="Harga Kayu">
    </div>
  	</div>
  	<div class="form-group">
    	<label for="inputPassword3" class="col-sm-4 control-label">Deskripsi</label>
    <div class="col-sm-5">
      <textarea id="inputPassword3" class="form-control" placeholder="Deskripsikan Kayu Disini"></textarea>
    </div>
  	</div>
  	<div class="form-group">
    	<label for="exampleInputFile" class="col-sm-4 control-label">Upload Gambar</label>
    <div class="col-sm-5">
    	<input type="file" id="exampleInputFile">
    </div>
  	</div>
  
  <div class="form-group">
    <div class="col-sm-offset-4 col-sm-5">
      <button type="button" class="btn btn-danger">Batal</button>

      <button type="button" class="btn btn-info">Simpan</button>
    </div>
  </div>

</form>
</div>




@endsection