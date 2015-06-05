<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent;

use CodeCommerce\User;
use Faker\Factory as Faker;

class UserTableSeeder extends Seeder
{

    public function run()
    {

        DB::table('users')->truncate();

        $faker = Faker::create();

        User::create([

            'name' => 'Michel Sobreira',
            'email' => 'sobreira.michel@gmail.com',
            'password' => Hash::make(123456)

        ]);

        foreach(range(1, 10) as $i)
        {
            User::create([

                'name' => $faker->name(),
                'email' => $faker->email(),
                'password' => Hash::make($faker->word())

            ]);
        }

    }

}