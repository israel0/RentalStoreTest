<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class RentHistroySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rent_histories')->delete();

        $this->createNewRecords();
    }



    protected function createNewRecords()
    {      

        $data = [

            [
                'item_name' => 'Olive Book',
                'itemtype' => 'Books',
                'user_id' =>'5',
                'rent_date' => Carbon::now(),
                'price' => 100,
                'status' => 'Rented'
            ],

            [
                'item_name' => 'Olive Book',
                'itemtype' => 'Books',
                'user_id' => '6',
                'rent_date' => Carbon::now(),
                'price' => 100,
                'status' => 'Rented'
            ],
      
            [
                'item_name' => 'Equipments Alaya',
                'itemtype' => 'Equipments',
                'user_id' => '6',
                'rent_date' => Carbon::now(),
                'price' => 1000,
                'status' => 'Returned'
            ],


            
        ];
        DB::table('rent_histories')->insert($data);
    }
}
