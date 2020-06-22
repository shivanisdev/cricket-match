<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $guarded = [];

    public function team()
    {
        return $this->belongsTo(Team::class, 'jersey_number');
    }
}
