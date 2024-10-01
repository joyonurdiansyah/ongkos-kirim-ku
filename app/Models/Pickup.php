<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Pickup extends Model
{
    use HasFactory;

    protected $guarded = [];

    // Mutator untuk mengubah format tanggal sebelum disimpan
    public function setSellerPickupDateAttribute($value)
    {
        $this->attributes['seller_pickup_date'] = Carbon::createFromFormat('Y-m-d', $value)->format('Y-m-d');
    }

    // Accessor untuk mengubah format tanggal saat diambil
    public function getSellerPickupDateAttribute($value)
    {
        return Carbon::parse($value)->format('d/m/Y');
    }
}
