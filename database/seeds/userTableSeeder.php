<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use App\User;

class userTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        User::create([

        	'name'	=> $faker->name,
        	'email'	=> $faker->email,
        	'password'	=> 'respati',
        	'api_token'	=> str_random(60),

    	]);
    }
}
