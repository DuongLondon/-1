<?php

namespace Database\Seeders;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Book;
class BooksTableSedder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('books')->delete();

        $faker = Faker::create();

        for( $i = 0; $i < 20; $i++ ){
            Book::create([
                'Title' =>$faker->sentence(10),
                'Author'=>$faker->name,
                'Genre'=>$faker->sentence(5),
                'PubliccationYear'=>$faker->date('Y-m-d'),
                'ISBN'=>$faker->sentence('20'),
                'CoverImageURL'=>$faker->imageUrl(20,20),

            ]);
        }
    }
}
