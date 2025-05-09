<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Charge extends Model
{
    /** @use HasFactory<\Database\Factories\ChargesFactory> */
    use HasFactory;

    public function bill()
    {
        return $this->belongsTo(Bill::class);
    }

    public function chargeable(): MorphTo
    {
        return $this->morphTo();
    }

    public function getPriceAttribute()
    {
        return $this->chargeable->price;
    }
}
