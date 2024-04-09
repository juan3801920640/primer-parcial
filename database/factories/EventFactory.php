<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
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
            'name' => $this->faker->sentence($nbWords = 3, $variableNbWords = true),
            'start_date' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'end_date' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'location' => $this->faker->randomElement(['Colombia', 'USA', 'Brazil', 'Canada', 'Peru', 'India', 'Spain']),
            'capacity' => $this->faker->numberBetween(800, 3000)
        ];
    }
}
