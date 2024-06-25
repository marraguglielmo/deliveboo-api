<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function dishes()
    {
        return $this->belongsToMany(Dish::class)->withPivot('quantity', 'total_price');
    }

    protected $fillable = ['shipping_price', 'total_price', 'payment_method', 'name', 'surname', 'email', 'phone_number', 'address', 'note'];
}
