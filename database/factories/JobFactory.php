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
    public function definition()
    {
        return [
            'employer_id' => Employer::factory(),
            'title' => fake()->jobTitle(),
            'salary' => fake()->randomElement(['$50,0000USD', '$10,0000USD', '$30,0000USD', '$80,0000USD', '$150,0000USD']),
            'location' => 'Remote',
            'schedule' => 'Full Time',
            'url' => fake()->url(),
            'featured' => false,
        ];
    }
}
