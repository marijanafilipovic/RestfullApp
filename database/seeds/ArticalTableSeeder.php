<?php
use Faker\Factory;
use Illuminate\Database\Seeder;
use App\Article;
class ArticalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Article::truncate();

        $faker = \Faker\Factory::create();

        for($i = 0; $i < 150; $i++ ){
            Article::create([
                'title' => $faker->title,
                'body' => $faker->text,
                'author' => $faker->name,
                'slug' => $faker->slug(6)
            ]);
        }
    }
}
