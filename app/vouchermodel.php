<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class vouchermodel extends Model
{
    protected $connection= 'mysql';
    protected $table= 'voucher';
    public $timestamps = false;
    protected $fillable = [
        'kodevoucher',
        'diskon'
    ];
}
