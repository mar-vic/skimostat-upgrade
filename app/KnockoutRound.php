<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KnockoutRound extends Model
{
    use HasFactory;

    public function knockouts() {
        return $this->belongsTo('App\Knockouts', 'knockoutsId');
    }

    public function heats() {
        return $this->hasMany('App\Heat', 'knockoutRoundId');
    }
}