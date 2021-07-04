<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AddCourse extends Model
{
    protected $fillable = [

    	'Class','Course_Name', 'Book_Name', 'Description', 'Thumnail',

    ];

     public function enrollments()
    {
        return $this->hasMany(TutorRegisterCourse::class, 'course_id', 'id');
    }

  

}
