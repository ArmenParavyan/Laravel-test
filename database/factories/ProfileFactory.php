<?php

namespace Database\Factories;


use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Profile>
 */
class ProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "bio" => $this->faker->sentence,
            "customer_id" => function () {
                return Customer::inRandomOrder()->first()->id;
            }
        ];
    }
}
