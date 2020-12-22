<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Dtrans extends Model
{
    protected $table = 'dtrans';
    protected $primaryKey = null;
    public $incrementing = false;
    public $timestamps = false;
    protected $guarded = [];
}
