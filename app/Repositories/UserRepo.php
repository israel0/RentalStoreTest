<?php


namespace App\Repositories;
 

//use Your Model
use App\Models\User;
 
 
/************************************************************
  Class ItemRepo.
 ************************************************************/
class UserRepo  

{
    /**
     * @return string
     *  Return the model
     */
  
    public function update($id, $data)
    {
        return User::find($id)->update($data);
    }

    public function GetUserById($user_id)
    {
        return User::where(['id' => $user_id])->first();
    }

    public function getAllTypes()
    {
        return User::all();
    }

    public function findById($userid)
    {
        return User::find($userid);
    }

 

}