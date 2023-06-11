<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'address',
        'phone',
        'product_id',
        'product_image',
        'product_name',
        'product_price',
        'qty',
        'total_price',
        'status'
    ];

    public function cars()
    {
        return $this->belongsTo(Car::class);
    }
}
