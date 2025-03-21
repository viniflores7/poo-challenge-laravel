<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    /** @use HasFactory<\Database\Factories\PackagesFactory> */
    use HasFactory;

    public function plan()
    {
        return $this->belongsTo(Plan::class);
    }

    public function services()
    {
        return $this->belongsToMany(Service::class, 'service_packages');
    }

    public function subscription()
    {
        return $this->hasOne(Subscription::class);
    }

    public function getPriceAttribute()
    {
        $servicesTotal = $this->services->sum('price');

        return $this->plan->price + $servicesTotal;
    }
}
