<?php

namespace App\Models;

 
use Eloquent;

class BookRecord extends Eloquent
{
    protected $fillable = ['author', 'isbn' , 'item_id' , 'book_class_id'];

    function items () {
        return $this->belongsTo(Item::class, 'book_record_id');
    }
}
