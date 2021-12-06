<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    protected $fillable = [
        'fecha',
        'user_id'
    ];
    /**
     * Relación uno a muchos inversa
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Relación uno a muchos
     */
    public function details()
    {
        return $this->hasMany(Detail::class);
    }
}
