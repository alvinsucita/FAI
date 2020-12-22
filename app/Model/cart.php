<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class cart extends Model
{
    protected $connection= 'mysql';
    protected $table= 'barang';
    protected $primaryKey = 'barang_id';
    public $timestamps = false;
    protected $guarded = [
        'barang_id'
    ];
}
