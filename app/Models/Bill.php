<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    /** @use HasFactory<\Database\Factories\BillsFactory> */
    use HasFactory;

    public function installment()
    {
        return $this->belongsTo(Installment::class);
    }
}
