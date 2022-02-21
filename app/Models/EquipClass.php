<?php

namespace App\Models;

 
use Eloquent;

class EquipClass extends Eloquent
{
    protected $fillable = ['name'];

    function bookrecord () {
            return $this->belongsTo(EquipmentRecord::class, 'equip_class_id');
    }
}

 
 
