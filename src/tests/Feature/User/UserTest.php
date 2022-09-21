<?php

namespace Tests\Feature\User;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\Feature\OpenApiSpecAssertions;
use Tests\TestCase;

class UserTest extends TestCase
{
    use OpenApiSpecAssertions;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/api/test');

        $response->assertStatus(201);
    }
}
