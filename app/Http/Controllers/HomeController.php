<?php

namespace App\Http\Controllers;


use App\Models\User;
use App\Repositories\RentHistoryRepo;
use App\Repositories\UserRepo;
use App\Repositories\ItemRepo;
use App\Models\Item;
use App\Models\item_id;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{


    protected  $renthistory , $user , $item;

    public function __construct(RentHistoryRepo $renthistory , UserRepo $user , ItemRepo $item)
    {
           
        $this->renthistory = $renthistory;
        $this->item = $item;
        $this->user = $user;

       // $this->middleware('auth');
       
     }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */


    public function index()
    {

       $data['books'] = $this->item->getTypes()->where('item_id' , 'Books');
       $data['equipments'] = $this->item->getTypes()->where('item_id' , 'Equipments');
       $data['items'] = $this->item->getTypes();  
       return view('/home' , $data);

    }

    public function reports () {

        // TOTAL EQUIPMENT RENTED
        $rented_equipments = Item::select([
       
            \DB::raw("DATE_FORMAT(available_at , '%Y-%m') as month"),
            \DB::raw('COUNT(id) as data'),
            \DB::raw('SUM(id) as total')

         ])->where(['transmission'=>'Rented' , 'item_id' => 'equipments'])
         ->groupBy('item_id')
         ->groupBy('month')
         ->orderBy('month')
         ->get();

        
         $equipment_report_rented = [];
         
         $rented_equipments->each(function($item) use (&$equipment_report_rented) {

            $equipment_report_rented[$item->month] [$item->item_id] = [
                'count' => $item->data ,
                'amount' => $item->total
            ];
       
        });
        
         // UNIQUE RENTED EQUIPMENT 
        $equipment_itemid_rented = $rented_equipments->pluck('item_id')
        ->sortBy('item_id')
        ->unique();

        // TOTAL RETURNED equipments

         $returned_equipments = Item::select([
            
            \DB::raw("DATE_FORMAT(available_at , '%Y-%m') as month"),
            \DB::raw('COUNT(id) as data'),
            \DB::raw('SUM(id) as total')

         ])->where(['transmission'=>'Returned' , 'item_id' => 'equipments'])
         ->groupBy('item_id')
         ->groupBy('month')
         ->orderBy('month')
         ->get();

        
        //  REPORT EQUIPMENT RETURNED
         $equipment_report_returned = [];
         $returned_equipments->each(function($item) use (&$equipment_report_returned) {
            $equipment_report_returned[$item->month] [$item->item_id] = [
                'count' => $item->data ,
                'amount' => $item->total
            ];
       
        });


       // UNIQUE RETURNED EQUIPMENT 
        $equipment_itemid_returned = $returned_equipments->pluck('item_id')
        ->sortBy('item_id')
        ->unique();



    //  TOTAL BOOKS RENTED
        $rented_books = Item::select([
            
            \DB::raw("DATE_FORMAT(available_at , '%Y-%m') as month"),
            \DB::raw('COUNT(id) as data'),
            \DB::raw('SUM(id) as total')

         ])->where(['transmission'=>'Rented' , 'item_id' => 'Books'])
         ->groupBy('item_id')
         ->groupBy('month')
         ->orderBy('month')
         ->get();

        
         $book_report_rented = [];
         $rented_books->each(function($item) use (&$book_report_rented) {

            $book_report_rented[$item->month] [$item->item_id] = [
                'count' => $item->data ,
                'amount' => $item->total
            ];
       
        });
        

        $book_itemid_rented = $rented_books->pluck('item_id')
        ->sortBy('item_id')
        ->unique();


        // TOTAL RETURNED BOOKS
         $returned_books = Item::select([
            
            \DB::raw("DATE_FORMAT(available_at , '%Y-%m') as month"),
            \DB::raw('COUNT(id) as data'),
            \DB::raw('SUM(id) as total')

         ])->where(['transmission'=>'Returned' , 'item_id' => 'Books'])
         ->groupBy('item_id')
         ->groupBy('month')
         ->orderBy('month')
         ->get();

        
        //  REPORT FOR BOOKS RETURNED
         $book_report_returned = [];
         $returned_books->each(function($item) use (&$book_report_returned) {

            $book_report_returned[$item->month] [$item->item_id] = [
                'count' => $item->data ,
                'amount' => $item->total
            ];
       
        });


        // UNIQUE ID FOR BOOK ITEM
        $book_itemid_returned = $returned_books->pluck('item_id')
        ->sortBy('item_id')
        ->unique();

        return view('reports' , 
        
        compact('book_report_rented' ,
                'book_itemid_rented' ,
                'book_report_returned' ,
                'book_itemid_returned',
                'equipment_report_rented' ,
                'equipment_itemid_rented' ,
                'equipment_report_returned' ,
                'equipment_itemid_returned'
            ));
    }
    
}
