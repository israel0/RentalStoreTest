<?php
 
namespace App\Models;

use Eloquent;
 

class RentHistory extends Eloquent
{
    protected $fillable = ['item_name' , 'itemtype' ,'rent_date' , 'status' , 'price'];

     
}

