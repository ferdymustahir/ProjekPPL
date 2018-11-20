<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pembelian extends Model
{
    protected $table = 'pembelian';
    protected $primarykey = 'id';
    protected $fillable =['idbarang','iduser','jumlah','status','idPembayaran'];
    public $timestamps=true;


}
