<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Htrans extends Model
{
    protected $table = 'htrans';
    protected $primaryKey = 'htrans_id';
    public $incrementing = false;
    public $timestamps = false;
    protected $guarded = [];
}
