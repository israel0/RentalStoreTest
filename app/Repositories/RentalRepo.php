<?php

namespace App\Repositories;

 
//use Your Model

/**
 * Class RentalRepo.
 */
class RentalRepo  
{
  
    public function find($id)
    {
        return Rental::find($id);
    }

    public function getAll()
    {
        return Rental::orderBy('name', 'asc')->get();
    }

}
