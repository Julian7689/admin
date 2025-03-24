<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class challenges extends Model
{
    use HasFactory;

    protected $table = 'challenges';
    protected $fillable = [
        'name',
        'description',
        'category',
       'estado', 
        'dificultad',
        'puntos'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    

}
