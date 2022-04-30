<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class Order3Test extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->postJson('/api/user', [
            'name' => 'Sally',
            'email'=>'Sally@gmail.tw',
            'password'=>'123456',
        ]);
 
        $response
            ->assertStatus(200)
            ->assertJson([
                'msg' => 'success',
            ]);
    }
}
