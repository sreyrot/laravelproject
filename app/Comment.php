<?php

namespace App;
use App\User;
use App\Student;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function user(){
        return $this->belongsTo(User::class);
     }
    public function student(){
        return $this->belongsTo(Student::class);
     }
}
