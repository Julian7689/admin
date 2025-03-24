<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class payments extends Model
{
    use HasFactory;
    protected $table = 'payments';

    protected $fillable = [
        'Monto',
        'medioPago',
        'fechaPago',
        'Comprobante_idComprobante',
        'Comprobante_Comprobantecol',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
