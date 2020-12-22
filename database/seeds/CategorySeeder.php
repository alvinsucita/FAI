<?php

use Illuminate\Database\Seeder;
use App\CategoryProduct;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas = [
        	['name' => 'T-Shirt'],
        	['name' => 'Accessories'],
        	['name' => 'Bags'],
        	['name' => 'Sneakers'],
        	['name' => 'Slides'],
        	['name' => 'Long Sleeves']
        ];

        foreach($datas as $d):
        	CategoryProduct::create($d);
        endforeach;
    }
}
