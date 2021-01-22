<?php

namespace Tests\Unit;

use Tests\TestCase;

class UnitTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        // $this->assertTrue(true);
        $this->get('/api/package')->assertStatus(200);
        $this->get('/api/package/{id}')->assertStatus(200);
        $this->post('/api/package')->assertStatus(200);
        $this->patch('/api/package/{id}')->assertStatus(200);
        $this->delete('/api/package/{id}')->assertStatus(200);
    }
}
