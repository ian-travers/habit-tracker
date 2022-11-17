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

    /** @test */
    public function habits_can_be_created()
    {
        $this->withoutExceptionHandling();

        $habit = Habit::factory()->make();

        $response = $this->post('/habits', $habit->toArray());

        $response->assertRedirect('/habits');
        $this->assertDatabaseHas('habits', $habit->toArray());
    }

    /** @test */
    public function habits_can_be_updated()
    {
        $this->withoutExceptionHandling();

        $habit = Habit::factory()->create();
        $updatedHabit = [
            'name' => 'updated',
            'times_per_day' => '5'
        ];

        $response = $this->put("/habits/{$habit->id}", $updatedHabit);

        $response->assertRedirect('/habits');
        $this->assertDatabaseHas('habits', ['id' => $habit->id, ...$updatedHabit]);
    }
}
