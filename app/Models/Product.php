<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'brand',
        'body',
        'stock',
        'extract',
        'price',
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function details()
    {
        return $this->hasMany(Detail::class);
    }

    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }
}
