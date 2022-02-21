<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class EquipmentRecordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('equipment_records')->delete();

        $this->createNewRecords();
    }



    protected function createNewRecords()
    {      

        $data = [

            [
                'item_id' => 2,
                'equip_class_id' => 1,
            ],

            [
                'item_id' => 2,
                'equip_class_id' => 2,
            ],

            [
                'item_id' => 2,
                'equip_class_id' => 3,
            ],

            [
                'item_id' => 2,
                'equip_class_id' => 4,
            ],

       
            
        ];
        DB::table('equipment_records')->insert($data);
    }
}
