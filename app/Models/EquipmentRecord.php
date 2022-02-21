<?php

namespace App\Models;

 
use Eloquent;

class EquipmentRecord extends Eloquent
{
    protected $fillable = ['author', 'isbn' , 'item_id' , 'book_class_id'];

    function items () {
        return $this->belongsTo(Item::class, 'equip_record_id');
    }
}
