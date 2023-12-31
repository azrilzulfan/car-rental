<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $fillable = ['image', 'name', 'price'];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
