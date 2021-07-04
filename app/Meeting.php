<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meeting extends Model
{
    protected $fillable = [ 'student_id', 'tutor_id', 'subject', 'topic', 'start_time', 'link', ];

    public function user()
    {
        return $this->belongsTo('App\User'); 
    }
}
