<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RaceRunner extends Model
{
    use HasFactory;

    public function runner()
    {
        return $this->hasOne(Runner::class, 'id', 'runner_id');
    }

    public function race()
    {
        return $this->hasOne(Race::class,'id','race_id');
    }
}
