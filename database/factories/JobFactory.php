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
            'title' => $this->faker->jobTitle,
            'salary' => $this->faker->randomElement(['$30,000 - $50,000', '$50,000 - $70,000', '$70,000 - $90,000', '$90,000 - $110,000', '$110,000 - $130,000', '$130,000 - $150,000']),
            'location' => $this->faker->city,
            'schedule' => $this->faker->randomElement(['Full-time', 'Part-time', 'Temporary', 'Internship']),
            'url' => $this->faker->url,
            'featured' => $this->faker->boolean,
            'employer_id' => Employer::factory(),
        ];
    }
}
