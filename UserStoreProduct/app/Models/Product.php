<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function shop(): BelongsTo
    {
        return $this->belongsTo(owner::class);
    }

    public function shopOwner(): HasOneThrough
    {
        return $this->hasOneThrough(Owner::class, Shop::class);
    }
}
