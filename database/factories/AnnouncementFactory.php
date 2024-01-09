<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class AnnouncementFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'titale'=>fake()->title(),
            'description'=> fake()->paragraph(),
            'price'=>fake()->randomFloat(2, 20, 30),
            'category_id'=>fake()->numberBetween(1,9),
            'user_id'=>fake()->numberBetween(1,9),
        ];
    }
}
