<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    protected $fillable = [ 'student_id','tutor_id','title', 'guidelines', 'starts_at', 'ends_at', 'passing_marks', 'total_marks', 'cover_img',   
    ];
}
