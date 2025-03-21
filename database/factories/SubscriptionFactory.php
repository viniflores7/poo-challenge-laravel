<?php

namespace Database\Factories;

use App\Models\Customer;
use App\Models\Package;
use App\Models\Plan;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Subscription>
 */
class SubscriptionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'plan_id' => null,
            'package_id' => null,
            'customer_id' => Customer::factory(),
        ];
    }

    public function planOnly()
    {
        return $this->state(function (array $attributes) {
            return [
                'plan_id' => Plan::factory(),
                'package_id' => null,
            ];
        });
    }

    public function packageOnly()
    {
        return $this->state(function (array $attributes) {
            return [
                'plan_id' => null,
                'package_id' => Package::factory(),
            ];
        });
    }
}
