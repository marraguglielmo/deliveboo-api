<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    use HasFactory;

    protected $fillable = ['shipping_price', 'total_price', 'payment_method', 'name', 'surname', 'email', 'phone_number', 'address', 'note', 'date'];
}
