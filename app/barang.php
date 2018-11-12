<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    protected $table = 'barang';
    protected $primarykey = 'id';
    protected $fillable =['jenis_kayu','stok','harga','deskripsi','gambar'];
    public $timestamps=true;


}
