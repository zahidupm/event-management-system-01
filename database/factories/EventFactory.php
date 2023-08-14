<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Auth;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\odel=Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(4),
            'event_date' => $this->faker->date(),
            'event_time' => $this->faker->time(),
            'location' => $this->faker->address(),
            'user_id' => User::all()->random()->id,
        ];
    }
}
