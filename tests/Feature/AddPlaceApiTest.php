<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AddPlaceApiTest extends TestCase
{
    use RefreshDatabase;

    public function test_add_place_api_works()
    {
        $data = [
            'place_name' => 'SunRaku Park',
            'description' => 'Pastrana, Leyte',
        ];

        $response = $this->postJson('/api/v1/add-place', $data);

        $response->assertStatus(201)
                 ->assertJson(['message' => 'Place added successfully']);

        $this->assertDatabaseHas('places', $data);
    }
}
