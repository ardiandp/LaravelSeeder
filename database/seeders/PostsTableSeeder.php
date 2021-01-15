<?php

namespace Database\Seeders;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create('id_ID');
        for($i=1; $i<=100; $i++)
        {
        $posts = [
            [
                'title' => $faker->name,
                'body'  => $faker->text,
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
        ];
        \DB::table('posts')->insert($posts);

        }
    }
}
