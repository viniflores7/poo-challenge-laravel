<?php

namespace Database\Factories;

use App\Models\Bill;
use App\Models\Subscription;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Installment>
 */
class InstallmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'subscription_id' => Subscription::factory(),
            'total' => $this->faker->randomFloat(2, 10, 100),
        ];
    }

    public function withBills($numBills = 12)
    {
        return $this->has(
            Bill::factory()->count($numBills),
        );
    }
}
