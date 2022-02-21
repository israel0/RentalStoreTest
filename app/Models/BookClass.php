<?php

namespace App\Models;

 
use Eloquent;

class BookClass extends Eloquent
{
    protected $fillable = ['name'];

    function bookrecord () {
        return $this->belongsTo(BookRecord::class, 'book_class_id');
    }
}
