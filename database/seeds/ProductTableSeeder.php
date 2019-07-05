<?php

use Illuminate\Database\Seeder;
use App\Product;
class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::truncate();

        $faker = \Faker\Factory::create();

        for($i = 0; $i < 50; $i++ )
        {
            Product::create([
                'name' => $faker->name . random_int(1,1000),
                'description' => $faker->text,
                'price' => $faker->numberBetween(100,1000),
                'discount' => $faker->numberBetween(10,90),
                'slug' => $faker->slug()
            ]);
        }
    }
}
