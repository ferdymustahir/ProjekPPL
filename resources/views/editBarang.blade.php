@extends('layouts.App')
@section('content')
	<div class="container">
	
		<h3 style="text-align: center;">Edit Barang</h3><br>
	
  	<form class="form-horizontal" action="{{url('/simBarang/'.$view->id)}}" method="post" enctype="multipart/form-data">
      {{csrf_field()}}
  		<div class="form-group{{ $errors->has('jenis_kayu') ? ' has-error' : '' }}">
    		<label for="jenis_kayu" class="col-sm-4 control-label">Jenis Kayu</label>
    	<div class="col-sm-5">
      		<input type="text" class="form-control" name="jenis_kayu" placeholder="Jenis Kayu" value="{{$view->jenis_kayu}}" required>
      @if ($errors->has('jenis_kayu'))
        <span class="help-block">
            <strong>{{ $errors->first('jenis_kayu') }}</strong>
        </span>
      @endif
    	</div>
  		</div>

  	<div class="form-group{{ $errors->has('stok') ? ' has-error' : '' }}">
    	<label for="stok" class="col-sm-4 control-label">Stok</label>
    <div class="col-sm-5">
      <input type="number" min="0" class="form-control" name="stok" placeholder="Stok Tersedia" value="{{$view->stok}}" required>
    @if ($errors->has('stok'))
        <span class="help-block">
            <strong>{{ $errors->first('stok') }}</strong>
        </span>
      @endif
    </div>
  	</div>

  	<div class="form-group{{ $errors->has('harga') ? ' has-error' : '' }}">
    	<label for="harga" class="col-sm-4 control-label">Harga</label>
    <div class="col-sm-5">
      <input type="number" min="1" class="form-control" name="harga" placeholder="Harga Kayu" value="{{$view->harga}}" required>
    @if ($errors->has('harga'))
        <span class="help-block">
            <strong>{{ $errors->first('harga') }}</strong>
        </span>
      @endif
    </div>
  	</div>

  	<div class="form-group{{ $errors->has('deskripsi') ? ' has-error' : '' }}">
    	<label for="deskripsi" class="col-sm-4 control-label">Deskripsi</label>
    <div class="col-sm-5">
      <textarea name="deskripsi" class="form-control" placeholder="Masukkan Deskripsi" required>{{$view->deskripsi}}</textarea>
    @if ($errors->has('deskripsi'))
        <span class="help-block">
            <strong>{{ $errors->first('deskripsi') }}</strong>
        </span>
      @endif
    </div>
  	</div>

  	<div class="form-group{{ $errors->has('gambar') ? ' has-error' : '' }}">
    	<label for="gambar" class="col-sm-4 control-label">Upload Gambar</label>
    <div class="col-sm-5">
    	<input type="file" accept="image/*" name="gambar" value="{{$view->gambar}}">
    @if ($errors->has('gambar'))
        <span class="help-block">
            <strong>{{ $errors->first('gambar') }}</strong>
        </span>
      @endif
    </div>
  	</div>
  
  <div class="form-group">
    <div class="col-sm-offset-4 col-sm-5">
      <a href="/home" class="btn btn-danger">Batal</a>
      <button type="submit" class="btn btn-info">Simpan</button>
    </div>
  </div>

</form>
</div>




@endsection