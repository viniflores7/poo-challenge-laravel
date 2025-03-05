<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceSubscription extends Model
{
    /** @use HasFactory<\Database\Factories\ServiceSubscriptionFactory> */
    use HasFactory;

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public function subscription()
    {
        return $this->belongsTo(Subscription::class);
    }
}
