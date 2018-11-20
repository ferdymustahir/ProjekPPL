@extends('layouts/App')
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
        <td>{{App\pembelian::where('idbarang',$lihatt->id)->first()->status}}</td>
        <td><button data-toggle="modal" data-target="#modalupload{{$loop->iteration}}" type="button" class="btn btn-success"><span class="glyphicon glyphicon-usd" aria-hidden="true"></span>Bayar</button></td>
        
        
 <form class="form-horizontal" action="{{url('/pembayaran/'.$lihatt->id)}}" method="POST" enctype="multipart/form-data">
     {{csrf_field()}}
      <div class="modal fade" id="modalupload{{$loop->iteration}}" role="dialog">
                      <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Upload Struk Pembayaran</h4>
                          </div>
                          <div class="modal-body">
                           
                             <input type="file" accept="image/*" name="struk" required>
                          
                          </div>
                          <div class="modal-footer">
                             <button type="button" class="btn btn-primary" data-dismiss="modal">Batal</button> <button class="btn btn-danger" type="submit">Simpan</button>
                          </div>
                        </div>
                      </div>
                    </div>
       </form>
      @endforeach
    </tbody>
  </table>
      
</div>

@endsection