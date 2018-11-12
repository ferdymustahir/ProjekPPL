@extends('layouts.App')
@section('content')
	<div class="container">

    <div class="row">
      <div class="col-sm-12">
        <div class="full-right">
          <h2>Driver</h2>
          <a href="tambahDriver" class="btn btn-success btn-sm">
            <i class="glyphicon glyphicon-plus"></i></a>
        </div>
      </div>
    </div>

    @if(count($tampil)>0)
    <table class="table table-bordered">
      <tr>
        <th>No</th>
        <th>NIK</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>No Hp</th>
        <th>Foto</th>
        <th>Action</th>
      </tr>
      @foreach($tampil as $view)
      <tr>
        <th>{{$loop->iteration}}</th>
        <th>{{$view->nik}}</th>
        <th>{{$view->name}}</th>
        <th>{{$view->alamat}}</th>
        <th>{{$view->nohp}}</th>
        <th><img src="/fotodriver/{{$view->fotodriver}}" style="width: 100px; height: 100px;" /></th>
        <th><a href="{{url('/editDriver/'.$view->id)}}" class="btn btn-primary"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a> <button data-toggle="modal" data-target="#modalHapus{{$loop->iteration}}" type="button" class="btn btn-danger"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button></th>
      </tr>

      <div class="modal fade" id="modalHapus{{$loop->iteration}}" role="dialog">
                      <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Konfirmasi Hapus Data</h4>
                          </div>
                          <div class="modal-body">
                            <p>Anda hendak menghapus data dengan keterangan berikut:
                              <p></p>
                              Ingin melanjutkan?
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Batal</button> <button type="button" class="btnsumbit btn btn-danger" onclick="location.href='/hapusBarang/{{$view->nik}}';">Hapus</button>
                          </div>
                        </div>
                      </div>
                    </div>
      @endforeach
    </table>
    @else
    Data Kosong
    @endif


		</div>


@endsection