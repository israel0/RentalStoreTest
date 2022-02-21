<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class EquipmentClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('equip_classes')->delete();

        $this->createNewRecords();
    }



    protected function createNewRecords()
    {      

        $data = [

            [
                'name' => 'Agricultural equipment',
            ],

            [
                'name' => 'Media equipment',
            ],

            [
                'name' => 'Hospital equipment',
            ],

            [
                'name' => 'Building equipment',
            ],

       
            
        ];
        DB::table('equip_classes')->insert($data);
    }
}
