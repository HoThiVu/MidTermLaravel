<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Restaurant>
 */
class RestaurantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'image' => ''.rand(1,5).'.jpg',
            'name' => $this->faker->name(),
            'prices' => ''.rand(1,5).'000',
            'discription' => $this->faker->paragraph(),
            'categories_id' => rand(1,5)

        ];
    }
}
