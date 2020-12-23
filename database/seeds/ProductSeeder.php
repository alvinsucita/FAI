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
        	['category_id' => 2, 'name' => 'Sepatu Biru', 'harga' => 50000, 'stok' => 12, 'sold' => 13, 'rating' => 4, 'unique_click' => 32, 'image' => 'list1.jpg', 'size' => '42'],
        	['category_id' => 2, 'name' => 'Sepatu Hitam', 'harga' => 65000, 'stok' => 87, 'sold' => 13, 'rating' => 4, 'unique_click' => 1, 'image' => 'list2.jpg', 'size' => '42'],
        	['category_id' => 2, 'name' => 'Sepatu Kuning', 'harga' => 55000, 'stok' => 32, 'sold' => 13, 'rating' => 4, 'unique_click' => 64, 'image' => 'list3.jpg', 'size' => '43'],
        	['category_id' => 2, 'name' => 'Sepatu Orange', 'harga' => 102000, 'stok' => 3, 'sold' => 13, 'rating' => 4, 'unique_click' => 34, 'image' => 'product1.jpg', 'size' => '45'],
        	['category_id' => 2, 'name' => 'Sepatu Gray', 'harga' => 45000, 'stok' => 87, 'sold' => 13, 'rating' => 4, 'unique_click' => 11, 'image' => 'product2.jpg', 'size' => '38'],
        	['category_id' => 1, 'name' => 'Kaos Hitam', 'harga' => 345000, 'stok' => 34, 'sold' => 13, 'rating' => 4, 'unique_click' => 23, 'image' => 'product3.jpg', 'size' => 'L'],
        	['category_id' => 1, 'name' => 'Kaos Putih', 'harga' => 102000, 'stok' => 12, 'sold' => 13, 'rating' => 4, 'unique_click' => 1, 'image' => 'product4.jpg', 'size' => 'XL'],
            ['category_id' => 1, 'name' => 'Kaos Putih 1', 'harga' => 101000, 'stok' => 10, 'sold' => 13, 'rating' => 4, 'unique_click' => 1, 'image' => 'kaosputih.jpg', 'size' => 'M'],
            ['category_id' => 1, 'name' => 'Kaos Putih 2', 'harga' => 102000, 'stok' => 12, 'sold' => 13, 'rating' => 4, 'unique_click' => 1, 'image' => 'kaosputih1.jpg', 'size' => 'S']
        ];

        foreach($datas as $d):
        	Product::create($d);
        endforeach;
    }
}
