<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->unique()->name();
        return [
            'name' => $name,
            'slug' =>  Str::slug($name),
            'brand' => $this->faker->company(),
            'body' => $this->faker->text(),
            'extract' => ($this->faker)->text(50),
            'stock' => $this->faker->numberBetween(1, 200), // password
            'price' => $this->faker->numberBetween(200, 500),
        ];
    }
}
