<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Installment extends Model
{
    /** @use HasFactory<\Database\Factories\InstallmentsFactory> */
    use HasFactory;

    public function subscription()
    {
        return $this->belongsTo(Subscription::class);
    }
}
