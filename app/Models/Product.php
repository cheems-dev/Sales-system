<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'brand',
        'stock',
        'price',
    ];

    public function details()
    {
        return $this->hasMany(Detail::class);
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }
}
