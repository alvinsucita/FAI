<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryProduct extends Model
{
    protected $table = 'category';
    protected $fillable = ['name'];
}