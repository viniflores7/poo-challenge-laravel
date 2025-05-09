<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Charge;

class Bill extends Model
{
    /** @use HasFactory<\Database\Factories\BillsFactory> */
    use HasFactory;

    public function installment()
    {
        return $this->belongsTo(Installment::class);
    }

    public function charges()
    {
        return $this->hasMany(Charge::class);
    }

    public function getTotalAttribute()
    {
        return $this->charges->sum('price');
    }
}
