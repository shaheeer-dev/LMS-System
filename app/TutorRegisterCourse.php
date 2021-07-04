<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TutorRegisterCourse extends Model
{
    protected $fillable= [ 'user_id', 'course_id', 'course_name', 'class',];

     public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function course()
    {
        return $this->belongsTo(AddCourse::class, 'course_id');
    }
    public function enrollments()
    {
        return $this->hasMany(AddCourse::class, 'user_id', 'id');
    }
    
}
