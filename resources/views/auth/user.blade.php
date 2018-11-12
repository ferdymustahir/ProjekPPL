@extends('layouts.app')

@section('content')
<style type="text/css">
.break{
  -ms-word-break: break-all;
  word-break: break-all;

  /* Non standard for webkit */
  word-break: break-word;

  -webkit-hyphens: auto;
  -moz-hyphens: auto;
  hyphens: auto;
}
</style>
<div class="container">
  <div class="row">
  <div class="col-md-6 col-md-offset-3">
  <div class="panel panel-default">
    <div class="panel-heading">Data User</div>
    <div class="panel-body">
    <div class="thumbnail center-block" style="width:400px;">
    @if($view->fotoktp=='')
    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAZAAAADIBAMAAAA0O6rRAAAAG1BMVEXMzMyWlpacnJyqqqrFxcWxsbGjo6O3t7e+vr6He3KoAAAACXBIWXMAAA7EAAAOxAGVKw4bAAAEoUlEQVR4nO2bQW/bOBCFh5Js+SgqGydHqelic7S7LdCjlKTFHm0feraLYNOjnQVytts/vhySEmlXjnPYgsrifUCk51AC5omcIUXDRAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAhGX0Lv94qLr49LVp/VFebQ9VSIZSn+ZSytmB6iBVjXLCaqDEOe2roGy0EQ7GRONU99WKM1bs1xh2KiSJ1EZ2HIzc7qnuq5m1GoBaXJKvghIbI6V8n0xlsac6GMrx9q8Vt0byrLqVOfkqKDttZMSDacCP1akuas4P3brjwTTnnnMqKKU2EsulOq7OfNXFRj/4UrVOx8QdNPFVSAZyzkaESY/cV11MdRXYqNBtehS+CkmdCzZiAhey8lQXqwsyV9vA5W+eCsrqUhvZ6KE0VOXIKUZVqUqdyqaDSp076pbUDCVlzKmQqCi0kamdQmae0sxZpLKJ0jx3dUtsp5BzT4XkRlbaiHme/HCd0kQcetQmwFct6rzpMtV/ToVkekHaiBkyI1WxnNKkPI0f1laV7JH5185XAeFE3TNSeMqwklUiD4Jcnbfh554KCAdhjOixn7CRVhl2cjI4qEj8OTJlrc49FZD5GRkj0oafecoQy8v6YLKbq3Fn63MtPRWOhKM2RkzcbKRVzTXj6f6kEsu8Mnfpm50Khy44J3qEF+l7lTUpjf2KP/SkR3SlOZEjKgf2Vx8b7pCe5YiuUCeqFr8Trr171LL/nqhnVUtaxs8ZGcm9FJmagdZXI818vvSUZSj9ojWU+daczXw+9lQ4nJFmhTXxlGWz9xo71wOL2hXWmafC4YwcW/0qyrE3sSfSxtu31S/ZZG/eQraeMqj32rlzFTdDrnkLufRUYIT3hih9ZbiRy9plft0mvn0vzHwVFvH8O7ta+Q7cjLhpVd/e2a2Ro7soeuVbtv0wbQdQ73ZR7CLp2L5WzOuRTbuPWI7/1vRwX8saObbTuOMhE7Xr+KbO9XCn0RqJ2x1fp5gVj6pRU3QTZ0RN8c2Or1NBEc/txqfGwsr20Mgz0rvdeMtLvx9x9O37EQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA/F8R9u/V88qMyPz9kZYDI5n6JPi3MzlRlJH5ld9t+UD0Wd6TKIjKXxvpCbLkzyMtHUb0cbylJ2sk+b36oQ53i0p8o3T166N9hoxu6N0VRVWqxODNhMQi41P8Zq5axeKKhmvV4hm5WNKDNRLPzGEwEU803IT0wUYG959n8bqmf+jL3QcS9/r05Y4fsFBNo4I++Eay61FhjUSVOSSFiLbfwyaUGlpRlRSjyWL9kd6qZy8qfXpLtWoVqoke1J/5xZ8x8jRcWyOiOWQiXT6ENaKSXT/o4npZcLAcF5+yJkcy+h7zj5Vdj0SP9HOP0B9F4B7hSPixL78tVTfoaPnk9Ui0sBdaI4Nz+jlHaD4LboRzhBbrxxk9VbccLZ9cjlB6YS+0RvQHffSqFoWedDggVbVoV9UVpeU1h8MnV7UoLeyFvhEz/G5lM49QaCMvYLg+fc2r4DF0AP8R4jp0BAAAAF7Av6WwyYeK7KAEAAAAAElFTkSuQmCC" style="width:400px;height:auto"/>
    @else
    <img src="/img/{{$view->fotoktp}}" style="width:400px;height:auto;">
    @endif
    <div class="caption text-center">Foto KTP</div>
    </div>

    <h3>Nama : {{$view->name}}</h3>
    <h4>E-mail : {{$view->email}}</h4>
    <h4>Alamat : {{$view->alamat}}</h4>
    <h4>Jenis Kelamin : {{$view->jeniskelamin}}</h4>
    <h4>Agama : {{$view->agama}}</h4>
    <h4>No. Hp : {{$view->nohp}}</h4>

    <button onclick="window.location.href='/editprofil';" class="btn btn-info center-block"><span class="glyphicon glyphicon-pencil"></span> Edit</button>
  </div>
</div>
</div>
</div>
</div>
@endsection