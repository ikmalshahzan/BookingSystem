<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    public $fillable = ['name', 'description', 'vendor_id'];

    public function vendor()
    {
        $this->belongsTo(Vendor::class, 'vendor_id', 'id');
    }
}
