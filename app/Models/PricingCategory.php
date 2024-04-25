<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PricingCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'duration'
    ];

    public function pricings()
    {
        return $this->hasMany(Pricing::class);
    }
}
