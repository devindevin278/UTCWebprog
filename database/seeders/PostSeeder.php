<?php

namespace Database\Seeders;

use App\Models\Post;
use Faker\factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = Faker::create('id_ID');

        for($i = 0; $i < 10; $i++) {
            $rand = mt_rand(6,14);
            $title = $faker->sentence(mt_rand(5,10));
            Post::create([
                'title' => $title,
                'rating_count' => mt_rand(1,1000),
                'subtitle' => $faker->sentence(mt_rand(3,5)),
                'image' => 'https://source.unsplash.com/1200x800?'.$title,
                'description' => $faker->sentence(),
                'author' => $faker->name(),
                'read_time' => $rand,
                'body' => '<p>'. implode('</p><p>', $faker->paragraphs($rand)) . '</p>',
                'video' => 'test',
                'date' => $faker->dateTimeInInterval('-1 year', '+1 year')
            ]);
        }
    }
}
