<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $table = 'booking';
    protected $fillable = [
        'car_number',
        'pick_up_date',
        'drop_up_date',
        'pick_up_time',
        'drop_up_time',
        'age',
        'vehicle_type',
        'pick_up_location',
        'promoCode',
        'rent_price',
        'first_name',
        'last_name',
        'email',
        'phone_no',
        'payment_type',
    ];
}
