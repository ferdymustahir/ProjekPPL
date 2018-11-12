@extends('layouts.App')
@section('content')
	<div class="container">
	
		<h3 style="text-align: center;">Edit Driver</h3><br>
	
  	<form class="form-horizontal" action="/editDriver/{{$view->id}}" method="post" enctype="multipart/form-data">
      {{csrf_field()}}


      <div class="form-group{{ $errors->has('nikdriver') ? ' has-error' : '' }}">
        <label for="nikdriver" class="col-sm-4 control-label">NIK Driver</label>
      <div class="col-sm-5">
          <input type="number" min="0" class="form-control" name="nikdriver" placeholder="Masukkan NIK" value="{{$view->nik}}" required readonly>
      @if ($errors->has('nikdriver'))
        <span class="help-block">
            <strong>{{ $errors->first('nikdriver') }}</strong>
        </span>
      @endif
      </div>
      </div>

    <div class="form-group{{ $errors->has('namadriver') ? ' has-error' : '' }}">
      <label for="namadriver" class="col-sm-4 control-label">Nama Driver</label>
    <div class="col-sm-5">
      <input type="text" value="{{$view->name}}" class="form-control" name="namadriver" placeholder="Nama Driver" required readonly>
    @if ($errors->has('namadriver'))
        <span class="help-block">
            <strong>{{ $errors->first('namadriver') }}</strong>
        </span>
      @endif
    </div>
    </div>

    <div class="form-group{{ $errors->has('alamatdriver') ? ' has-error' : '' }}">
      <label for="alamatdriver" class="col-sm-4 control-label">Alamat Driver</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" value="{{$view->alamat}}" name="alamatdriver" placeholder="Alamat Driver" required>
    @if ($errors->has('alamatdriver'))
        <span class="help-block">
            <strong>{{ $errors->first('alamatdriver') }}</strong>
        </span>
      @endif
    </div>
    </div>

    <div class="form-group{{ $errors->has('nohpdriver') ? ' has-error' : '' }}">
      <label for="nohpdriver" class="col-sm-4 control-label">No Handphone Driver</label>
    <div class="col-sm-5">
      <input type="number" min="0" class="form-control" value="{{$view->nohp}}" name="nohpdriver" placeholder="Handphone Driver" required>
    @if ($errors->has('nohpdriver'))
        <span class="help-block">
            <strong>{{ $errors->first('nohpdriver') }}</strong>
        </span>
      @endif
    </div>
    </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-sm-4 control-label">{{ __('Alamat Surel') }}</label>

                            <div class="col-sm-5">
                                <input id="email" type="email" class="form-control" name="email" value="{{$view->email}}" required readonly>

                                @if ($errors->has('email'))
                                <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-sm-4 control-label">{{ __('Password') }}</label>

                            <div class="col-sm-5">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-sm-4 control-label">{{ __('Konfirmasi Password') }}</label>

                            <div class="col-sm-5">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

  	<div class="form-group{{ $errors->has('fotodriver') ? ' has-error' : '' }}">
    	<label for="fotodriver" class="col-sm-4 control-label">Foto Driver</label>
    <div class="col-sm-5">
    	<input type="file" accept="image/*" name="fotodriver">
    @if ($errors->has('fotodriver'))
        <span class="help-block">
            <strong>{{ $errors->first('fotodriver') }}</strong>
        </span>
      @endif
    </div>
  	</div>
  
  <div class="form-group">
    <div class="col-sm-offset-4 col-sm-5">
      <a href="/viewdriver" class="btn btn-danger">Batal</a>
      <button type="submit" class="btn btn-info">Simpan</button>
    </div>
  </div>

</form>
</div>




@endsection