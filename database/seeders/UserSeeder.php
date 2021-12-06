<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'  => 'Luis Davaria',
            'email' => 'daprimovaria@gmail.com',
            'phone' => '938296302',
            'address' => 'Av.Pedro P. Diaz Mz.31 Lt.1',
            'password' => bcrypt('12345678'),
        ]);

        User::factory(30)->create()->each(function (User $user) {
            Image::factory(1)->create([
                'imageable_id' => $user->id,
                'imageable_type' => User::class
            ]);
        });
    }
}
