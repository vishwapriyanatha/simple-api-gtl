<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Race extends Model
{
    use HasFactory;


    public function meeting()
    {
        return $this->hasOne(Meeting::class,'id','meeting_id');
    }
}
