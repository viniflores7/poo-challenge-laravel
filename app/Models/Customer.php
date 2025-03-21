<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    /** @use HasFactory<\Database\Factories\CustomersFactory> */
    use HasFactory;

    public function subscription()
    {
        return $this->hasOne(Subscription::class);
    }
}
