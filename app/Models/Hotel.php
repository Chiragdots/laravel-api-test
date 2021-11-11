<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;



    public function reviews()
    {
        return $this->hasMany(Review::class, 'hotel_id', 'id');
    }

    // this method user for active scope for get hotel
    public function scopeActive($query)
    {
        return $query->where('status', 'Active');
    }

}
