<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tokens extends Model
{
    use HasFactory;
    protected $table = "tokens";
    protected $fillable = [
        'token_no',
        'phone_no',
        'status',
        'service_id'
    ];

    public function scopeGenerateToken($query)
    {
        $todayDate = now()->format('Y-m-d');
        $latestToken = $query->whereDate('created_at', $todayDate)->latest()->first();
        $tokenNo = $latestToken ? $latestToken->token_no + 1 : 1;
        return $tokenNo;
    }
}
