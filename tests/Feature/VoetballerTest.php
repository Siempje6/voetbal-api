<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Voetballer;
use App\Models\Club;
use Illuminate\Foundation\Testing\RefreshDatabase;

class VoetballerTest extends TestCase
{
    use RefreshDatabase;

    public function test_index_shows_voetballers()
    {
        $club = Club::factory()->create();
        $voetballer = Voetballer::factory()->create();
        $voetballer->clubs()->attach($club->id);

        $response = $this->get(route('voetballers.index'));

        $response->assertStatus(200);
        $response->assertSee($voetballer->naam);
        $response->assertSee($club->naam);
    }
}
