<?php

namespace Database\Factories;

use App\Models\Bill;
use App\Models\Plan;
use App\Models\Package;
use App\Models\Service;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Charge>
 */
class ChargeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $chargeableModels = [
            Plan::class,
            Package::class,
            Service::class,
        ];

        $chargeableType = $this->faker->randomElement($chargeableModels);
        $chargeable = $chargeableType::factory();

        return [
            'bill_id' => Bill::factory(),
            'chargeable_id' => $chargeable,
            'chargeable_type' => $chargeableType,
            'price' => $this->faker->randomFloat(2, 10, 100),
        ];
    }
}
