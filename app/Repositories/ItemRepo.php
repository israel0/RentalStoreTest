<?php

 namespace App\Repositories;
 

//use Your Model
use App\Models\ItemType;
use App\Models\Rental;
use App\Models\State;
use App\Models\Standard;
use App\Models\Item;
use App\Models\RentHistory;
use App\Model\BookRecord;
/************************************************************
  Class ItemRepo.
 ************************************************************/
class ItemRepo  
{
    /**
     * @return string
     *  Return the model
     */
  
    public function update($id, $data)
    {
        return Item::find($id)->update($data);
    }

    public function historyupdate($id, $history)
    {
        return RentHistory::find($id)->update($history);
    }


    public function delete($id)
    {
        return Item::destroy($id);
    }

    public function create($data)
    {
        return Item::create($data);
    }

    public function getUserByType($type)
    {
        return Item::where(['item_type' => $type])->orderBy('name', 'asc')->get();
    }

    public function getAllTypes()
    {
        return ItemType::all();
    }

    public function getQualityByTypes()
    {
        return Standard::all();
    }

    public function getStateByTypes()
    {
        return State::all();
    }

    public function getTypes()
    {
        return Item::all();
    }


    public function find($id)
    {
        return Item::find($id);
    }

    public function getAll()
    {
        return Item::orderBy('name', 'asc')->get();
    }

    
    public function findRental($id)
    {
        return Rental::find($id);
    }
    
    public function getAllRentals()
    {
        return Rental::orderBy('name', 'asc')->get();
    }

    public function findType($id)
    {
        return ItemType::find($id);
    }
    
    public function findStateType($id)
    {
        return State::find($id);
    }

    public function findStandardType($id)
    {
        return Standard::find($id);
    }
}
