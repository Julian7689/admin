<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class plans extends Model
{
    use HasFactory;

    protected $table = 'plans';
    protected $fillable = [
        'name_plan',
        'duracion',
        'Descripcionplan',
        'estadoPlan',
    ];
    public const PLAN_BASICO = 'Básico';
    public const PLAN_PLATINO = 'Platino';
    public const PLAN_FORMULA1 = 'Fórmula 1';

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
