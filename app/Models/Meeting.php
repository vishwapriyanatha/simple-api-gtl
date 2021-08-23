<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meeting extends Model
{
    use HasFactory;

    public function race()
    {
        return $this->hasMany(Race::class,'race_id','id');
    }
}
