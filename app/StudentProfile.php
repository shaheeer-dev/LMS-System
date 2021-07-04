<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentProfile extends Model
{
     public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function student_profile()
    {
        return $this->hasMany(User:: class);
    }
}
