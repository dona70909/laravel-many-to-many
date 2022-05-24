<?php

use Illuminate\Database\Seeder;
use App\Model\Post;
use Faker\Generator as Faker;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10 ; $i++) { 
            $newPost = new Post();
            $newPost->post_title = $faker->catchPhrase();
            $newPost->post_text = $faker->paragraphs(1,true);
            $newPost->post_img = "https://picsum.photos/1200/350?random=". rand(1, 55000);
            $newPost->save();
        }
    }
}
