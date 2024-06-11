<?php

namespace Database\Factories;

use App\Models\Employer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'jobTitle' => fake()->jobTitle(),
            'employer_id'=>Employer::factory(),
            'salary'=>'$100,000'
        ];
    }
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'salary' => '$20,000',
        ]);
    }
}
