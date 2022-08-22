<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    use HasFactory;

    public $fillable = ['name', 'ssm', 'contact_no'];

    public function bookings()
    {
        return $this->hasMany(Booking::class, 'vendor_id', 'id');
    }

    public function services()
    {
        return $this->hasMany(Service::class, 'vendor_id', 'id');
    }
}
