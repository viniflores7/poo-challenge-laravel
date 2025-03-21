<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    /** @use HasFactory<\Database\Factories\ServicesFactory> */
    use HasFactory;

    public function package()
    {
        return $this->belongsToMany(Package::class, 'service_packages');
    }

    public function subscription()
    {
        return $this->belongsTo(Subscription::class);
    }
}
