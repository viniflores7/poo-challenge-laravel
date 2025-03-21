<?php

namespace Database\Factories;

use App\Models\Service;
use App\Models\Subscription;
use Illuminate\Database\Eloquent\Factories\Factory;

class ServiceSubscriptionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'service_id' => Service::factory(),
            'subscription_id' => Subscription::factory(),
        ];
    }
}
