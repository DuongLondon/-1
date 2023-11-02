<?php

namespace Database\Seeders;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Review;
use App\Models\Book;
use App\Models\User;
class ReviewTableSedder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('reviews')->delete();

        $faker = Faker::create();
        $book_ids = Book::all()->pluck('id')->toArray();
        $user_ids = User::all()->pluck('id')->toArray();
        for ($i = 0; $i < 20; $i++){
            Review::create([
                'BookID'=>$faker->numerify($book_ids),
                'UserID'=>$faker->numerify($user_ids),
                'Rating'=>$faker->numerify('#'),
                'ReviewText'=>$faker->sentence(10),
                'ReviewDate'=>$faker->date('Y=m-d'),
            ]);
        }
    }
}
