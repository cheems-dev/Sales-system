<?php

namespace Database\Seeders;

use App\Models\Detail;
use App\Models\Product;
use App\Models\Sale;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Storage::deleteDirectory('images');
        Storage::makeDirectory('images');
        $this->call(UserSeeder::class);
        $this->call(ProductSeeder::class);
        Sale::factory(30)->create();
        Detail::factory(30)->create();
    }
}
