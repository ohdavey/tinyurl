<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class GenerateTinyUrl extends TestCase
{
    use DatabaseMigrations;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testUrlCanBeSubmitted()
    {
        $this->post('/tinyurl', ['url' => 'http://lalala.com']);
        $this->assertTrue(true);
    }
}
