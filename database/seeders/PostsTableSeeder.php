<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory;
use DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [];
        $faker = Factory::create();
        $author_id = DB::table('users')->pluck('id');

        for($i = 1; $i <= 10; $i++){
            $posts [] = [
                'title'        => $faker->sentence($nbWords = 4, $variableNbWords = true),
                'excerpt'      => $faker->text($maxNbChars = 20),            
                'content'      => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
                'image'        => $faker->imageUrl($width = 640, $height = 480),
                'author_id'    => $faker->randomElement($author_id),
                'created_at'   => $faker->dateTime(),
                'updated_at'   => $faker->dateTime($max='now'),
            ];
        }
        DB::table("posts")->insert($posts);
    }
}
