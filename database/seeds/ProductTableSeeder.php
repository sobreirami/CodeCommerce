<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent;

use CodeCommerce\Product;

class ProductTableSeeder extends Seeder
{

    public function run()
    {

        DB::table('products')->truncate();

        factory('CodeCommerce\Product', 40)->create();

    }

}