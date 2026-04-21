<?php

namespace Database\Factories;

use App\Models\Item;
use Illuminate\Database\Eloquent\Factories\Factory;


class ItemFactory extends Factory
{
 
    public function definition(): array
    {
        return [
            'name' => $this->faker->word(),
            'category_id' => \App\Models\Category::factory(),
            'price' => $this->faker->randomFloat(2, 1000,100000),
            'stock' => $this->faker->numberBetween(1, 100),
            'description' => $this->faker->sentence(),
            'img' => $this->faker->imageUrl(),
            'is_available' => $this->faker->boolean(),
        ];
    }
}
