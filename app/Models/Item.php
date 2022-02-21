<?php

namespace App\Models;

 
 
use App\Models\Standard;
use App\Models\State;
use App\Models\ItemType;
use App\Models\BookRecord;
use App\Models\EquipmentRecord;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Eloquent;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;
 
// use App\Models\Rental;
 

class Item extends Eloquent
{
    use HasFactory, Notifiable , LogsActivity;

    protected $fillable = [
        'name', 'user_id' , 'available_at', 'price', 'standard_id', 'state_id', 'description', 'image' ,'item_id' ,'transmission'
    ];

      Protected static $logAttributes = ['item_id','transmission' , 'available_at'];

    //   protected static $recordEvents = ['updated_at'];

      protected static $logName = 'Products';

      public function getDescriptionForEvent (string $eventName) : string
    
      {
          return  'This product status has been  '. '' .$eventName .'';
      }



   


}
