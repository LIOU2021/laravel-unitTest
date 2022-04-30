<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class Order2Test extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->postJson('/api/order', 
        [
            'name' => 'Sally'
        ]);
 
        $response
            ->assertStatus(200)
            ->assertJson([
                'created' => 3,
            ]);
    }
}
