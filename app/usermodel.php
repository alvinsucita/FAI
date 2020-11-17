<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usermodel extends Model
{
    protected $connection= 'mysql';
    protected $table= 'user';
    public $timestamps = false;
    protected $fillable = [
        'username',
        'password',
        'email',
        'tanggallahir',
        'alamat',
        'nohp'
    ];
}
