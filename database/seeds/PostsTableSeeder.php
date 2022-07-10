<?php

use App\Post;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {   
        for ($i=0; $i < 10 ; $i++) { 
            
            $post = new Post();
            $post->title = $faker->sentence();
            $post->content = $faker->paragraph(rand(10, 20), false);
            $post->slug = Post::getPostSlugFromTitle($post->title);
            $post->save();
        }
    }
}
