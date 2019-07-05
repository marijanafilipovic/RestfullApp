<?php
use Illuminate\Database\Eloquent\FactoryBuilder;
use Illuminate\Database\Seeder;
use App\Article;
use App\Product;
use App\Review;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(ArticalTableSeeder::class);
        $this->call(ProductTableSeeder::class);
        $this->call(ReviewTableSeeder::class);

    }
}
