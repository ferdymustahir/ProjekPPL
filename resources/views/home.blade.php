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
        <img src="img/aw.jpg" alt="Los Angeles" style="width:100%;">
      </div>

      <div class="item">
        <img src="img/as.jpg" alt="Chicago" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="img/ku.jpg" alt="New york" style="width:100%;">
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
    <div class="col-sm-6 col-md-4">
      <div class="thumbnail">
        <img src="img/minibus.jpg" alt="barang1">
        <div class="caption">
        <h3>Tongkat Kayu</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua.</p>
        <p><a href="#" class="btn btn-primary" role="button">Beli</a> <a href="#" class="btn btn-default" role="button">Detail</a></p>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-md-4">
      <div class="thumbnail">
        <img src="img/minibus.jpg" alt="barang2">
        <div class="caption">
        <h3>Kaligrafi</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua.</p>
        <p><a href="#" class="btn btn-primary" role="button">Beli</a> <a href="#" class="btn btn-default" role="button">Detail</a></p>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-md-4">
      <div class="thumbnail">
        <img src="img/minibus.jpg" alt="barang3">
        <div class="caption">
        <h3>Tasbih</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua.</p>
        <p><a href="#" class="btn btn-primary" role="button">Beli</a> <a href="#" class="btn btn-default" role="button">Detail</a></p>
        </div>
      </div>
    </div>
  </div>
  <nav class="navbar navbar-default">
  <p class="navbar-text">&copy 2018 SIPEKA</p>
  <ul class="nav navbar-nav navbar-right">
      <li><a href="#"> Hak Cipta Dilindungi <span class="glyphicon glyphicon-lock"></span></a></li>
    </ul>
</nav> 

</div>

    


@endsection
