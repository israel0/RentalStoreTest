<?php

namespace App\Models;

use Eloquent;

class Rental extends Eloquent
{
    protected $fillable = ['name'];

    function items () {
        return $this->belongsTo(Item::class, 'equip_record_id');
 }

}