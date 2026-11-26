<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    public function sneaker()
    {
        return $this->belongsTo(Sneaker::class);
    }
}
