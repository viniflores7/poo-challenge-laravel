<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Plan;
use App\Models\Package;
use App\Models\Service;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Package>
 */
class PackageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word,
            'plan_id' => Plan::factory(),
            'price' => $this->faker->randomFloat(2, 10, 100),
        ];
    }

    public function withServices($numServices = 3)
    {
        return $this->has(
            Service::factory()->count($numServices),
        );
    }
}
