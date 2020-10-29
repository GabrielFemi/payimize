<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class OnboardingRouteTest extends TestCase
{
    /**
     *
     * @test
     * @return void
     */
    public function onlyAuthenticatedUsersCanViewDashboard(): void
    {
        $response = $this->get('/dashboard');

        $response->assertStatus(302);
    }

    /**
     * @test
     * @return void
     */
    public function onlyOnboardedUsersCanViewDashboard() : void
    {
        $this->withoutMiddleware(['auth:santum']);

        $response = $this->get('/dashboard');
        $response->assertStatus(302);
    }
}
