<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AvailableTimeSlot extends Model
{
    protected $fillable = [ 'day', 'time', 'user_id'];

     public function user()
    {
        return $this->belongsTo(User::class);
    }

}
