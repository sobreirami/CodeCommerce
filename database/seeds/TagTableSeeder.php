<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent;

use CodeCommerce\Tag;

class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->truncate();

        factory('CodeCommerce\Tag', 10)->create();
    }
}
