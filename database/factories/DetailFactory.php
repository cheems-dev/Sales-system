<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Sale;
use Illuminate\Database\Eloquent\Factories\Factory;

class DetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $id = Product::all()->random()->id;
        $quantity = Product::where('id', $id)->sum('stock');
        return [
            'quantity_total' => $quantity,
            'sale_id' => Sale::all()->random()->id,
            'product_id' => $id,

        ];
    }
}
