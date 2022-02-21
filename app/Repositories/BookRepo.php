<?php

namespace App\Repositories;
 
//use Your Model

use App\Models\Book;
/**
 * Class BookRepo.
 */
class BookRepo  
{
    /**
     * @return string
     *  Return the model
     */
    public function getbooks()
    {
        return BookRecord::all();
    }
 
}
