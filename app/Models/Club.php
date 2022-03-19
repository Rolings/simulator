<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'played',
        'won',
        'drawn',
        'lost',
        'goal_difference',
        'points',
    ];
}
