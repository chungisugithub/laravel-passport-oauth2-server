<?php

use App\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // for ($i = 1 ;$i < 100; $i++){
        //     Post::create([
        //         'user_id' => ,
        //         'title' => 'Lorem ipsum seeder example '.$i,
        //         'body' => 'Lorem Ipsum typesetting industry. Lorem Ipsum seeder example '.$i,
        //         'created_at' => ,
        //         'updated_at' =>
        //     ]);
        // }
        factory(Post::class, 10)->create();
    }
}
