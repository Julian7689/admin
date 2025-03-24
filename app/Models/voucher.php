<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class voucher extends Model
{
    use HasFactory;
    protected $table = 'vouchers';

    protected $fillable = [
        'user_id',
        'voucher_code',
        'amount',
        'status'
    ];

    // Relación con User
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
