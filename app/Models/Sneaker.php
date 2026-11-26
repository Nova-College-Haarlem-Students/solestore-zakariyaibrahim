<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sneaker extends Model
{
    protected $fillable = [
        'name',
        'colorway',
        'release_year',
        'description',
        'brand_id',
    ];

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }


    public function prices()
    {
        return $this->hasMany(Price::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function orderrows()
    {
        return $this->hasMany(Orderrow::class);
    }

    public function currentPrice()
    {
        return $this->prices()
            ->where('in_effect_date', '<=', now())
            ->orderBy('in_effect_date', 'desc')
            ->first();
    }
}
