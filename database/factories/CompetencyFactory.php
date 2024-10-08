<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Competency>
 */
use App\Models\User;
class CompetencyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $card_name = fake()->randomElement(['NPORS DUMPER FT','NPORS DUMPER REAR','NPORS 360 TRACKED','NPORS 360 WHEELED']);
        return [
            'card_name'=> $card_name,
             'card_number'=>fake()->numberBetween(5000, 6000),
             'user_id' => fake()->randomElement(User::pluck('id')),
        ];
    }
}
