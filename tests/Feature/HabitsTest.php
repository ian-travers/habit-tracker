<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Habit;

class HabitsTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function habits_view_can_be_rendered()
    {
        $this->withoutExceptionHandling();
        $habits = Habit::factory(3)->create();

        $response = $this->get('/habits');

        $response->assertStatus(200);
        $response->assertViewHas('habits', $habits);
    }
}
