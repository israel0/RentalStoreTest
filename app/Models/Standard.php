<?php

namespace App\Models;

 
use Eloquent;


class Standard extends Eloquent
{
    protected $fillable = ['name'];

    function items () {
        return $this->belongsTo(Item::class, 'standard_id');
    }
}
