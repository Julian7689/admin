<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class pqrs extends Model
{
    use HasFactory;

    protected $table = 'pqrs';

    protected $fillable =
    [
        'title',
        'description',
        'arguments',
        'answers',
        'typepqr'
    ];
    public function users()

    {
        return $this->belongsToMany(User::class, 'user_pqr', 'pqr_id', 'users_id_user');
    }

}
