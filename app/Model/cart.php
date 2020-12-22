<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class cart extends Model
{
    protected $connection= 'mysql';
    protected $table= 'product';
    protected $primaryKey = 'product_id';
    public $timestamps = false;
    protected $guarded = [
        'product_id'
    ];
}
