<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pembayaran extends Model
{
    protected $table = 'pembayaran';
    protected $primarykey = 'id';
    protected $fillable =['struk'];
    public $timestamps=true;
}
