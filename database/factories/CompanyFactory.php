<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "name" => $this->faker->company(),
            "address" => $this->faker->address(),
            "website" => $this->faker->domainName(),
            "email" => $this->faker->email(),
            "created_at" => now(),
            "updated_at" => now(),
        ];
    }
}