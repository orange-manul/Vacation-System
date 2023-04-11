<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Vacation;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Vacation>
 */
class VacationFactory extends Factory
{
    /**
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $start_date = $this->faker->dateTimeBetween('-1 year', 'now');
        $end_date = $this->faker->dateTimeBetween($start_date, '+1 month');

        return [
            'start_date' => $start_date->format('Y-m-d'),
            'end_date' => $end_date->format('Y-m-d'),
            'vacation_status' => $this->faker->randomElement(['pending', 'approved', 'rejected']),
            'user_id' => User::inRandomOrder()->first()->id,
        ];
    }
}
