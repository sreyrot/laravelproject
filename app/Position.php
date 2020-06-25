<?php

namespace App;
use App\User;
use App\Position;
use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    public function positions(){
        return $this->belongsTo(User::class);
    }
}
