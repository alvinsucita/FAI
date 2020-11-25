<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class penginapanmodel extends Model
{
    protected $connection= 'mysql';
    protected $table= 'penginapan';
    public $timestamps = false;
    protected $fillable = [
        'nama_penginapan',
        'alamat',
        'link',
        'harga'
    ];
}
