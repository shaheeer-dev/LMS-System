<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TutorProfile extends Model
{
    protected $fillable = [ 'user_id', 'slot_id'];

     public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function TutorProfile()
    {
        return $this->hasOne(User::class);
    }
}
