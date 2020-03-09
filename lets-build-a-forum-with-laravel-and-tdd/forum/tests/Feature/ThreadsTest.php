<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class ThreadsTest extends TestCase {

    use DatabaseMigrations;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testThreadsList() {
        $thread = factory('App\Thread')->create();

        $response = $this->get('/threads');

        $response->assertStatus(200);
        $response->assertSee($thread->title);
        $response->assertSee($thread->body);
    }

    public function testThreadsShow() {
        $thread = factory('App\Thread')->create();

        $response = $this->get('/threads/' . $thread->id);

        $response->assertStatus(200);

        $response->assertSee($thread->title);
        $response->assertSee($thread->body);
    }
}
