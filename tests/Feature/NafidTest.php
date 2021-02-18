<?php

namespace Tests\Feature;

use App\Post;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class NafidTest extends TestCase
{ use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testPosts()
    {
        $post =new Post();
        $post->title="symphony";
        $post->content="liedizoedoed";

        $post->save();

        $this->assertDatabaseMissing('posts',['title'=>'symphon']);
    }
   
}
