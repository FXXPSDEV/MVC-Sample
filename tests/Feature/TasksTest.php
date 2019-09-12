<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class TaskTest extends TestCase
{
    use DatabaseMigrations;

    public function user_read()
    {
        $task = factory('App\Task')->create();

        $response = $this->get('/tasks');

        $response->assertSee($task->title);
    }
}
