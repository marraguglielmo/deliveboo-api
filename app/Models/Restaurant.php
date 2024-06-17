<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Restaurant extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function foods()
    {
        return $this->hasMany(Food::class);
    }

    public function types()
    {
        return $this->belongsToMany(Type::class);
    }

    protected $fillable = ['business_name', 'slug', 'email', 'address', 'phone_number', 'user_id'];
}
