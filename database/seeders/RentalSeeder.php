<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RentalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('rentals')->delete();
        $this->createNewRecords();
        
    }



    protected function createNewRecords()
    {      

        $data = [

            [
                'name' => 'Pending',
                 
            ],

            [
                'name' => 'Rented',
            ],

            [
                'name' => 'Returned',
            ],
    
            
        ];
        DB::table('rentals')->insert($data);
    }
}
