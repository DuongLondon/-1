<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\User;
class UserTableSedder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->delete();
        $faker=Faker::create();

        for( $i= 0; $i < 20; $i++ ){
            User::create([
                'name'=>$faker->name,
                'email'=>$faker->unique->email,
                'password'=>$faker->numerify('########'),
            ]);
        }
    }
}
