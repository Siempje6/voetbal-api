<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Club;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ClubTest extends TestCase
{
    use RefreshDatabase;

    public function test_index_shows_clubs()
    {
        $clubs = Club::factory()->count(3)->create();

        $response = $this->get(route('clubs.index'));

        $response->assertStatus(200);
        foreach ($clubs as $club) {
            $response->assertSee($club->naam);
        }
    }
}
