<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TransactionTest extends TestCase
{
    use HasResourceRoutes;
    /**
     * A basic feature test example.
     *
     * @return \Illuminate\Testing\TestResponse
     */
    public function testExample()
    {
        $this->withoutMiddleware();
        return $this->resource('transactions')->assertStatus(200);
    }
}
