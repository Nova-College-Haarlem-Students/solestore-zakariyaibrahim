<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Orderrow extends Model
{
    public function order()
    {
        return $this->belongsTo(Order::class);
    }
    public function sneaker()
    {
        return $this->belongsTo(Sneaker::class);
    }
}
