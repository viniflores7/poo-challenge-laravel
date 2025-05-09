<?php

namespace Database\Factories;

use App\Models\Charge;
use App\Models\Installment;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bill>
 */
class BillFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'installment_id' => Installment::factory(),
            'due_at' => now()->addMonth(),
        ];
    }

    public function withCharges($numCharges = 3)
    {
        return $this->has(
            Charge::factory()->count($numCharges),
        );
    }
}
