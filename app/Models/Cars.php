<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cars extends Model
{
    use HasFactory;
    protected $table = 'cars';
    protected $fillable = [
        'vehicle_name',
        'vehicle_type',
        'brand',
        'number_of_seats',
        'vehicle_number',
        'location_store',
        'image',
        'price',
    ];
}
