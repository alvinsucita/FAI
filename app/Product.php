<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';
    protected $fillable = ['category_id', 'name', 'harga', 'stok', 'sold', 'rating', 'unique_click', 'image'];

    public static function getFullData($where = [])
    {
    	$query = Product::join('category', 'product.category_id', '=', 'category.category_id')
    					->where($where)
    					->select('product.*', 'category.name AS category_name');

    	return $query;
    }

    public static function getByCategory($where = [], $colWhereIn, $whereIn = [])
    {
    	$query = Product::join('category', 'product.category_id', '=', 'category.category_id')
    					->where($where)
    					->whereIn($colWhereIn, $whereIn)
    					->select('product.*', 'category.name AS category_name');

    	return $query;
    }
}