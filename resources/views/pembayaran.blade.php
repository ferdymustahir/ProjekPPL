 @extends('layouts.App')
@section('content')

 <div class="container">
  <h2>Proses Pembayaran</h2>
  <table class="table">
    <thead>
      <tr>
        <th>Jenis Kayu</th>
        <th>Total</th>
        <th>Status</th>
        <th>Bayar</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Doe</td>
        <td>  adsa</td>
        <td>dfsg</td>
        <td><a href="{{url('/editBarang/'.$view->id)}}" class="btn btn-primary"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a> </td>
      </tr>
      
    </tbody>
  </table>
</div>
@endsection