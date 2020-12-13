<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Dtrans extends Model
{
    protected $table = 'dtrans';
    protected $primaryKey = 'dtrans_id';
    public $incrementing = true;
    public $timestamps = false;
    protected $guarded = [];
}
