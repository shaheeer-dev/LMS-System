<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    protected $fillable = [ 'TxnRefNo', 'amount', 'description', '  status'];
}
