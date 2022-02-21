<?php

namespace App\Models;

 
use Eloquent;

class ItemType extends Eloquent
{
    protected $fillable = ['name'];

    public function items () {
        return $this->belongsTo(Item::class , 'item_type');
    }
}
