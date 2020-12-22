<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas = [
        	['category_id' => 4, 'name' => 'Sepatu Biru', 'harga' => 50000, 'stok' => 87, 'sold' => 13, 'rating' => 4, 'unique_click' => 20, 'image' => NULL],
        	['category_id' => 4, 'name' => 'Sepatu Hitam', 'harga' => 65000, 'stok' => 87, 'sold' => 13, 'rating' => 4, 'unique_click' => 20, 'image' => NULL],
        	['category_id' => 4, 'name' => 'Sepatu Kuning', 'harga' => 55000, 'stok' => 87, 'sold' => 13, 'rating' => 4, 'unique_click' => 20, 'image' => NULL],
        	['category_id' => 4, 'name' => 'Sepatu Orange', 'harga' => 102000, 'stok' => 87, 'sold' => 13, 'rating' => 4, 'unique_click' => 20, 'image' => NULL],
        	['category_id' => 4, 'name' => 'Sepatu Gray', 'harga' => 45000, 'stok' => 87, 'sold' => 13, 'rating' => 4, 'unique_click' => 20, 'image' => NULL],
        	['category_id' => 4, 'name' => 'Sepatu Emas', 'harga' => 345000, 'stok' => 87, 'sold' => 13, 'rating' => 4, 'unique_click' => 20, 'image' => NULL],
        	['category_id' => 4, 'name' => 'Sepatu Biru Hitam', 'harga' => 102000, 'stok' => 87, 'sold' => 13, 'rating' => 4, 'unique_click' => 20, 'image' => NULL]
        ];

        foreach($datas as $d):
        	Product::create($d);
        endforeach;
    }
}
