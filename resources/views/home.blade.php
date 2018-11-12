@section('head')
 
@endsection
@extends('layouts.app')
@section('content')
  <div class="container"> 
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="img/aw.jpg" alt="Los Angeles" style="width:100%; height:300px;" >
      </div>

      <div class="item">
        <img src="img/as.jpg" alt="Chicago" style="width:100%; height:300px;">
      </div>
    
      <div class="item">
        <img src="img/ku.jpg" alt="New york" style="width:100%; height:300px;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div><br>
  <div class="row">
    <h4>Barang Baru</h4>
    @foreach($tampil as $view)
    <div class="col-sm-6 col-md-4">
      <div class="thumbnail">
        <img src="img/{{$view->gambar}}" alt="barang1" style="width: 300px; height: 300px;">
        <div class="caption">
        <h3>{{$view->jenis_kayu}}</h3>
        <p class="harga">Harga: {{$view->harga}}</p>
        <p class="stok">Stok: {{$view->stok}}</p>
        <p class="deskripsi">{{$view->deskripsi}}</p>
        <p><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalBeli{{$loop->iteration}}" id="buy" role="button">Beli</button> <a href="#" class="btn btn-default" role="button">Detail</a></p>
        </div>
      </div>
    </div>

    <div class="modal fade" id="modalBeli{{$loop->iteration}}" role="dialog">
                      <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Konfirmasi Pembelian</h4>
                          </div>
                          <div class="modal-body">
                            
                              <p>Nama Barang: {{$view->jenis_kayu}}<br>Harga: Rp. {{$view->harga}}<br>Stok: Rp. {{$view->stok}}</p>
                            
                              <form method="post" action="/beliBarang/{{$view->id}}">
                              {{csrf_field()}}

                              <input type="number" min="1" max="{{$view->stok}}" class="form-control" placeholder="Jumlah" name="jumlahstok"></input>
                              <button type="submit" class=" btn btn-primary">Beli</button>
                              </form>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Batal</button>
                          </div>
                        </div>
                      </div>
                    </div>
    @endforeach
  </div>
  <nav class="navbar navbar-default">
  <p class="navbar-text">&copy 2018 SIPEKA</p>
  <ul class="nav navbar-nav navbar-right">
      <li><a href="#"> Hak Cipta Dilindungi <span class="glyphicon glyphicon-lock"></span></a></li>
    </ul>
</nav> 

</div>
@endsection
