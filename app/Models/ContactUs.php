<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    use HasFactory;
    protected $table = 'contact_us';
    protected $fillable = [
        'feedback_type',
        'location',
        'name',
        'email',
        'phone_no',
        'aggrement',
        'message',
        'terms_conditions'
    ];
}
