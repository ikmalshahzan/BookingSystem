<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    public $fillable = [
        'vendor_id',
        'customer_id',
        'service_id',
        'date',
        'time',
    ];

    public function service()
    {
        $this->hasOne(Service::class, 'booking_id', 'id');
    }
}
