<?php

//ini buat nampung nama file gambar untuk barang
namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Imagepath extends Model
{
    protected $table = 'imagepath';
    protected $primaryKey = 'namafile';
    public $incrementing = false;
    public $timestamps = false;
    protected $guarded = [];
}
