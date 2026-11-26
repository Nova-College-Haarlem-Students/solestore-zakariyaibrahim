<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    public function sneaker()
    {
        return $this->belongsTo(Sneaker::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
