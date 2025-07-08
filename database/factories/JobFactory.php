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
            'title' => fake()->jobTitle(),
            'description' => fake()->paragraph(),
            'company_name' => fake()->company(),
            'salary' => fake()->randomFloat(2, 5000, 10000),
            // Method 1: Simple random between existing IDs
            'employer_id' => Employer::query()->inRandomOrder()->first()->id,
        ];
    }
}
