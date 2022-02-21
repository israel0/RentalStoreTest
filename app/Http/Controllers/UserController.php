<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Repositories\RentHistoryRepo;
use App\Repositories\UserRepo;
use Illuminate\Http\Request;
use App\Helpers\Help;

class UserController extends Controller
{

    protected  $renthistory , $user;

    public function __construct(RentHistoryRepo $renthistory , UserRepo $user)
    {
           
        $this->renthistory = $renthistory;
        $this->user = $user;
       
     }
    
    public function index() {
         
        $data['users'] = User::all();
        
        return view('pages.users.index' , $data);
    }

    public function renthistory($user_id) {

          
         $user_id = Help::decodeHash($user_id);
         $data['item_history'] = $this->renthistory->GetRentHistory($user_id);  
         $data['user'] = $this->user->GetUserById($user_id); 
           
     
        return view('pages.users.history', $data);

    }
}
