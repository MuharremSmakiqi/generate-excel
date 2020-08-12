<?php

use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */ 
     public function run()
    {
        $faker = \Faker\Factory::create();

        for($i=0; $i<=100; $i++):
          DB::table('orders')->insert([
            'name' => $faker->name,
            'price' => $faker->randomDigit,
            'description' => $faker->paragraph,
            'barcode' => $faker->numberBetween(1000,1000),
            'zip' =>  $faker->numberBetween(100,1000),
            'signature' =>  Str::random(10),
        ]);
        endfor;
    } 
}
