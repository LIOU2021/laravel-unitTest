<?php

namespace Tests\Unit;

use App\Service\OrderService;
use PHPUnit\Framework\TestCase;

class OrderTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $test = OrderService::create('s');
        $this->assertTrue($test);
    }
}
