<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Product::factory(30)->create()->each(function (Product $product) {
            Image::factory(3)->create([
                'imageable_id' => $product->id,
                'imageable_type' => Product::class
            ]);
        });
    }
}
