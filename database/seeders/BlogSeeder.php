<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');


        for($i=1; $i <= 50; $i++){
            DB::table('blogs')->insert([
                'title' => $faker->sentence($nbWords = 6, $variableNbWords = true),
                'content' => $faker->text($maxNbChars = 200),
                'created_at' => $faker -> dateTime($max = 'now', $timezone = null),
                'updated_at' => $faker -> dateTime($max = 'now', $timezone = null)
            ]);
        }
    }
}