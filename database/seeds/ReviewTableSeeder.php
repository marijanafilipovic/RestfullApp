<?php

use Illuminate\Database\Seeder;
use App\Review;
use Faker\Factory;
class ReviewTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Review::truncate();

        $faker = \Faker\Factory::create();

        for($i =0; $i < 350; $i++)
        {
            Review::create([
                'product_id' => $faker->numberBetween(1, 50),
                'review' => $faker->paragraph,
                'customer' => $faker->name,
                'star' => $faker->numberBetween(1,5)

            ]);
        }
    }
}
