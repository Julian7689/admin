<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class tasks extends Model
{
    use HasFactory;

    protected $table = 'tasks';

    protected $fillable =
    [
        'title',
        'description',
        'status',
        'date_created',
        'due_date',
        'ranking_id',
        'user_id', 
    ];
    public function ranking()
    {
        return $this->belongsTo(Ranking::class, 'ranking_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
