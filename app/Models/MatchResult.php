<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class MatchResult extends Model
{
    use HasFactory;

    protected $fillable = [
        'play_week',
        'team_won_id',
        'team_lost_id',
        'team_won_score',
        'team_lost_score',
    ];

    protected $with = ['won','lost'];

    /**
     * @return HasOne
     */
    public function won(): HasOne
    {
        return $this->hasOne(Club::class, 'id', 'team_won_id');
    }

    /**
     * @return HasOne
     */
    public function lost(): HasOne
    {
        return $this->hasOne(Club::class, 'id', 'team_lost_id');
    }
}
