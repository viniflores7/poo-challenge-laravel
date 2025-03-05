<?php

namespace Database\Factories;

use App\Models\Installment;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bill>
 */
class BillsFactory extends Factory
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
            'total' => $this->faker->randomFloat(2, 10, 100),
            'due_date' => $this->faker->dateTimeThisYear(),
        ];
    }
}
