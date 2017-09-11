<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use App\Sejarah;
use App\Kategori_sejarah;

class SejarahTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create('it_IT');


        foreach(range(1, 5) as $i){

        	$kategori = Kategori_sejarah::create([

				'nama_kategori' => $faker->word(range(1, 10)),
				'image'			=> 'image.jpg',
                'count'         => 5
        	]);

        	foreach(range(1, 5) as $k){

        		Sejarah::create([

        			'kategori_id'	=> $i,
        			'judul'			=> $faker->sentence,
        			'alamat'		=> $faker->address,
        			'deskripsi'		=> $faker->sentence,
        			'image'			=> 'test.png',
        			'longitude'		=> $faker->longitude,
        			'latitude'		=> $faker->latitude,
        			'links'			=> 'https://www.youtube.com/watch?v=fSnMXHHUwNo&index=6&list=PLEgI20pG1DqyueOv_hY4F7t1qRUS_X4Ny',
        			'api_token'		=> Auth::guard('api')->id(),

        		]);	
        	}
        }

    }
}
