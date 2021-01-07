<?php

use Illuminate\Database\Seeder;
use App\ProductImages;

class ProductImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas = [
        	['product_id' => 1, 'image' => 'list1.jpg'],
        	['product_id' => 1, 'image' => 'list2.jpg'],
        	['product_id' => 1, 'image' => 'list1.jpg'],

        	['product_id' => 2, 'image' => 'list2.jpg'],
        	['product_id' => 2, 'image' => 'list3.jpg'],
        	['product_id' => 2, 'image' => 'list2.jpg'],

        	['product_id' => 3, 'image' => 'list3.jpg'],
			['product_id' => 3, 'image' => 'pict.jpg'],
			['product_id' => 3, 'image' => 'list2.jpg'],

        	['product_id' => 4, 'image' => 'product1.jpg'],
			['product_id' => 4, 'image' => 'product2.jpg'],
			['product_id' => 4, 'image' => 'list1.jpg'],

        	['product_id' => 5, 'image' => 'product2.jpg'],
        	['product_id' => 5, 'image' => 'product1.jpg'],
        	['product_id' => 5, 'image' => 'pict1.jpg'],

        	['product_id' => 6, 'image' => 'product3.jpg'],
			['product_id' => 6, 'image' => 'product4.jpg'],
			['product_id' => 6, 'image' => 'kaosputih.jpg'],

        	['product_id' => 7, 'image' => 'product4.jpg'],
			['product_id' => 7, 'image' => 'product3.jpg'],
			['product_id' => 7, 'image' => 'kaosputih1.jpg'],

        ];

        array_map(function($d) {
        	ProductImages::create($d);
        },  $datas);
    }
}
