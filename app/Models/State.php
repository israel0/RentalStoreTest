<?php

namespace App\Models;

 
use Eloquent;

class State extends Eloquent
{
    protected $fillable = ['name'];

    function items () {
        return $this->belongsTo(Item::class, 'state_id');
    }
}
