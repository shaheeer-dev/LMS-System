<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Message extends Model
{

  protected $table = "messages";
  protected $fillable = ['from', 'to', 'message', 'is_read'];
    /**
     * A message belong to a user
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function msg1()
    {
      return $this->belongsTo('App\User', 'from');
    }
        public function msg2()
    {
      return $this->belongsTo('App\User', 'to');
    }

    
}
