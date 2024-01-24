<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class AdFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'=>fake()->words(4, true),
            'description'=> fake()->paragraph(3),
            'price'=>fake()->numberBetween(1,9999),
            'category_id'=>fake()->numberBetween(1,10),
            'user_id'=>fake()->numberBetween(1,20),
            'is_accepted'=> 1,
        ];
    }
}
