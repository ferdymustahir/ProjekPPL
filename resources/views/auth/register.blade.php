@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{ __('Bergabung Menjadi Bagian dari Kami') }}</div>

                <div class="panel-body">
                    <form method="POST" enctype="multipart/form-data" class="form-horizontal" action="{{ route('register') }}">
                        @csrf
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-sm-4 control-label">{{ __('Name') }}</label>
                
                            <div class="col-sm-5">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-sm-4 control-label">{{ __('E-Mail Address') }}</label>

                            <div class="col-sm-5">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

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
                            <label for="password-confirm" class="col-sm-4 control-label">{{ __('Confirm Password') }}</label>

                            <div class="col-sm-5">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('alamat') ? ' has-error' : '' }}">
                            <label for="alamat" class="col-sm-4 control-label">Alamat</label>

                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="alamat" required>

                                @if ($errors->has('alamat'))
                                <span class="help-block">
                                <strong>{{ $errors->first('alamat') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('jeniskelamin') ? ' has-error' : '' }}">
                            <label for="jeniskelamin" class="col-sm-4 control-label">Jenis Kelamin</label>

                            <div class="col-sm-5">
                                <label class="radio-inline">
                                <input type="radio" name="jeniskelamin" value="Laki-laki" required>Laki-laki</input>
                                </label>
                                <label class="radio-inline">
                                <input type="radio" name="jeniskelamin" value="Perempuan">Perempuan</input>
                                </label>

                                @if ($errors->has('jeniskelamin'))
                                <span class="help-block">
                                <strong>{{ $errors->first('jeniskelamin') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('agama') ? ' has-error' : '' }}">
                            <label for="agama" class="col-sm-4 control-label">Agama</label>

                            <div class="col-sm-5">
                                <label class="radio-inline">
                                <input type="radio" name="agama"  value="Islam" required>Islam</input>
                                </label>
                                <label class="radio-inline">
                                <input type="radio" name="agama" value="Hindu">Hindu</input>
                                </label>
                                <label class="radio-inline">
                                <input type="radio" name="agama" value="Buddha">Buddha</input>
                                </label>
                                <label class="radio-inline">
                                <input type="radio" name="agama" value="Katolik">Katolik</input>
                                </label>
                                <label class="radio-inline">
                                <input type="radio" name="agama" value="Kristen">Kristen</input>
                                </label>

                                @if ($errors->has('agama'))
                                <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('nohp') ? ' has-error' : '' }}">
                            <label for="nohp" class="col-sm-4 control-label">No HP</label>

                            <div class="col-sm-5">
                                <input type="number" min="0" maxlength="13" class="form-control" name="nohp" required>

                                @if ($errors->has('nohp'))
                                <span class="help-block">
                                <strong>{{ $errors->first('nohp') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('fotoktp') ? ' has-error' : '' }}">
                            <label for="fotoktp" class="col-sm-4 control-label">Foto KTP</label>

                            <div class="col-sm-5">
                                <input type="file" accept="image/*" class="form-control" name="fotoktp" required>

                                @if ($errors->has('fotoktp'))
                                <span class="help-block">
                                <strong>{{ $errors->first('fotoktp') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-4 col-sm-5">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Daftar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
