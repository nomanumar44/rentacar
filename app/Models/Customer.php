<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $table = 'customers';
    protected $fillable = [
        'dob',
        'license_no',
        'license_country',
        'license_expiry',
        'address',
        'city',
        'state',
        'zipcode',
        'country',
        'number_of_traveller',
        'comment',
    ];
}
