<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->delete();

        $this->createNewRecords();
    }



    protected function createNewRecords()
    {      

        $data = [

            [
                'name' => 'Hospital Bed',
                'item_id' => 2,
                'user_id' => 1,
                'standard_id' => 2,
                'state_id' => 2,
                'description' => 'Hospital Bed is an Equipment useed in Hospitals',
                'price' => 30,
                'available_at' => \DB::raw('CURRENT_TIMESTAMP'),
                'transmission' => 'No Action Yet',
                'image' => 'http://127.0.0.1:8000/dist/images/profile-13.jpg',
            ],

            [
                'name' => 'Hospital Bed',
                'item_id' => 2,
                'user_id' => 2,
                'standard_id' => 2,
                'state_id' => 2,
                'description' => 'Hospital Bed is an Equipment useed in Hospitals',
                'price' => 30,
                'available_at' => \DB::raw('CURRENT_TIMESTAMP'),
                'transmission' => 'No Action Yet',
                'image' => 'http://127.0.0.1:8000/dist/images/profile-13.jpg',
            ],


            [
                'name' => 'Hospital Bed',
                'item_id' => 1,
                'user_id' => 2,
                'standard_id' => 2,
                'state_id' => 2,
                'description' => 'Hospital Bed is an Equipment useed in Hospitals',
                'price' => 30,
                'available_at' => \DB::raw('CURRENT_TIMESTAMP'),
                'transmission' => 'No Action Yet',
                'image' => 'http://127.0.0.1:8000/dist/images/profile-13.jpg',
            ],

  
        ];
        DB::table('items')->insert($data);
    }
}
