<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'brand' => $this->faker->company(),
            'stock' => $this->faker->numberBetween(1, 200), // password
            'price' => $this->faker->numberBetween(200, 500),
        ];
    }
}
