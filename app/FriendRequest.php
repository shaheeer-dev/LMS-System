<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FriendRequest extends Model
{
    protected $fillable = [ 'sender', 'recipient', 'approved'];
    
      public function user1() {
        return $this->belongsTo('App\User', 'sender');
    }
    public function user2() {
        return $this->belongsTo('App\User', 'recipient');
    }
}
