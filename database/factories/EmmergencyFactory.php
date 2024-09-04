<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Emmergency>
 */
class EmmergencyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $relationship = fake()->randomElement(['Spouse','Friend','Cousin','Child']);
        return [
            'name'=> fake()->name(),
            'address'=>fake()->address(),
            'phone'=>fake()->phoneNumber(),
            'relationship'=> $relationship,
             'user_id' => fake()->randomElement(User::pluck('id')),
        ];
    }
}
