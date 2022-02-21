<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\Item;
use App\Repositories\ItemRepo;
use App\Repositories\BookRepo;
use App\Repositories\UserRepo;
use App\Repositories\EquipmentRepo;  
use App\Helpers\Help;
use App\Models\RentHistory;
use App\Http\Requests\ItemRequest;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Spatie\Activitylog\Models\Activity;
use Illuminate\Support\Facades\Auth;


class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    protected $item, $equip, $book, $user;

    public function __construct(ItemRepo $item, BookRepo $book, EquipmentRepo   $equip , UserRepo $user)
    {
           
      

        $this->item = $item;
        $this->book = $book;
        $this->equip = $equip;
        $this->user = $user;
     }


    public function index()
    {


             $data['itemtypes'] =$this->item->getAllTypes();   
             $data['items'] = $this->item->getAll();
             return view('pages.items.index' , $data);

        // return view('pages.support_team.items.index', $d);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
            $data['itemTypes'] = $this->item->getAllTypes(); 
            $data['qualities'] = $this->item->getQualityByTypes();
            $data['states'] = $this->item->getStateByTypes();
            return view('pages.items.create' , $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {     

       $item_id= $this->item->findType($request->item_id)['name'];
       $state_id = $this->item->findStateType($request->state_id)['name'];
       $standard_id = $this->item->findStandardType($request->standard_id)['name'];

  
       $data['user_id'] = 1 ;  //Auth::user()->id;
       $data['name'] = ucwords($request->name);
       $data['item_id'] = $item_id;
       $data['price'] = $request->price;
       $data['description'] = $request->description;
       $data['state_id'] = $state_id;
       $data['standard_id'] = $standard_id;
       $data['image'] = Help::getDefaultUserImage();
       $data['code'] = strtoupper(Str::random(10));

        if($request->hasFile('image')) {
            $image = $request->file('image');
            $f = Help::getFileMetaData($image);
            $f['name'] = 'image.' . $f['ext'];
            $f['path'] = $image->storeAs(Help::getUploadPath($item_id).$data['code'], $f['name']);
            $data['image'] = asset('storage/' . $f['path']);
        }
 
        
          $this->item->create($data); // Create item

         return redirect()->route('items.index')->with('message', 'ITEM ADDED SUCCESSFULLY!');
      
     
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Item $item
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
                 
              $id =  Help::decodeHash($id);
        

        //       $userid = $this->item->find($id)->user_id;
        // $userData =  $this->user->findById($userid);
               
                $data['item'] = $this->item->find($id);
                $data['itemTypes'] = $this->item->getAllTypes(); 
                $data['qualities'] = $this->item->getQualityByTypes();
                $data['states'] = $this->item->getStateByTypes();
                $data['rentals'] = $this->item->getAllRentals();
               
                 return view('pages.items.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $id = Help::decodeHash($id);

        $userid = $this->item->find($id)->user_id;
        $userData =  $this->user->findById($userid);

        $item_id= $this->item->findType($request->item_id)['name'];
        $state_id = $this->item->findStateType($request->state_id)['name'];
        $standard_id = $this->item->findStandardType($request->standard_id)['name'];
   
         
        $item = $this->item->find($id);
        $data['name'] = ucwords($request->name);
        $data['item_id'] = $item_id;
        $data['price'] = $request->price;
        $data['description'] = $request->description;
        $data['transmission'] = $request->transmission;
        $data['state_id'] = $state_id;
        $data['available_at'] = date('Y-m-d H:i:s');
        $data['standard_id'] = $standard_id;
        $data['image'] = Help::getDefaultUserImage();
        $data['code'] = strtoupper(Str::random(10));
    
          // Request //   //     //
        if($request->hasFile('image')) {
            $image = $request->file('image');
            $f = Help::getFileMetaData($image);
            $f['name'] = 'image.' . $f['ext'];
            $f['path'] = $image->storeAs(Help::getUploadPath($item_id).$data['code'], $f['name']);
            $data['image'] = asset('storage/' . $f['path']);
        }
 

           $updated_success =  $this->item->update($id, $data);
               
           if($updated_success) {

            $history['item_name'] = $data['name'];
            $history['price'] =  $data['price'];
            $history['status'] =  $data['transmission'];
            $history['rent_date'] =  $data['available_at'];
            $history['itemType'] = $item_id;
          
            $this->item->historyupdate($userData->id, $history);

           }
              /* UPDATE item RECORD */
          return redirect()->route('items.index')->with('message', 'ITEM UPDATED SUCCESSFULLY!');
          
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        $id = Help::decodeHash($id);
        $item = $this->item->find($id);
        
       // $path = Help::getUploadPath($item->item_type).$item->code;
       
         if(!$this->item->delete($item->id))  {
             return 'something is wrong';
         }  
        return redirect()->route('items.index')->with('message', 'ITEM DELETED SUCCESSFULLY!');
        
    }
    
}

 