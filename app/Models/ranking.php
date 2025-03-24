<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class ranking extends Model
{
    use HasFactory;
    protected $table = 'rankings';

    protected $fillable = [
            'level',
            'position',
    ];
}
