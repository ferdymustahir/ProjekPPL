@extends('layouts.App')
@section('content')
	<div class="container">

    <div class="row">
      <div class="col-sm-12">
        <div class="full-right">
          <h2>Kayu</h2>
          <a href="tambahBarang" class="btn btn-success btn-sm">
            <i class="glyphicon glyphicon-plus"></i></a>
        </div>
      </div>
    </div>

    @if(count($tampil)>0)
    <table class="table table-bordered">
      <tr>
        <th>No</th>
        <th>Jenis Kayu</th>
        <th>Stok</th>
        <th>Harga</th>
        <th>Deskripsi</th>
        <th>Foto</th>
        <th>Action</th>
      </tr>
      @foreach($tampil as $view)
      <tr>
        <th>{{$loop->iteration}}</th>
        <th>{{$view->jenis_kayu}}</th>
        <th>{{$view->stok}}</th>
        <th>{{$view->harga}}</th>
        <th>{{$view->deskripsi}}</th>
        <th><img src="/img/{{$view->gambar}}" style="width: 100px; height: 100px;" /></th>
        <th><a href="{{url('/editBarang/'.$view->id)}}" class="btn btn-primary"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a> <button data-toggle="modal" data-target="#modalHapus{{$loop->iteration}}" type="button" class="btn btn-danger"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button></th>
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
                              <p>Jenis Kayu: {{$view->jenis_kayu}}<br>Stok: {{$view->stok}}<br>Harga: Rp. {{number_format($view->harga)}}</p>
                              Ingin melanjutkan?
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Batal</button> <button type="button" class="btnsumbit btn btn-danger" onclick="location.href='/hapusBarang/{{$view->id}}';">Hapus</button>
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