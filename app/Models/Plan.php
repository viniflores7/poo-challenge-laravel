<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    /** @use HasFactory<\Database\Factories\PlansFactory> */
    use HasFactory;

    public function package()
    {
        return $this->hasOne(Package::class);
    }

    public function subscription()
    {
        return $this->hasOne(Subscription::class);
    }
}
