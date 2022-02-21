<?php


namespace App\Repositories;
 

//use Your Model
use App\Models\RentHistory;
 
/************************************************************
  Class ItemRepo.
 ************************************************************/
class RentHistoryRepo  

{
    /**
     * @return string
     *  Return the model
     */
  
    public function update($id, $data)
    {
        return RentHistory::find($id)->update($data);
    }

     
    
    public function GetRentHistory($user_id)
    {
        return RentHistory::where(['user_id' => $user_id])->get();
    }

    public function getAllTypes()
    {
        return RentHistory::all();
    }

 

}