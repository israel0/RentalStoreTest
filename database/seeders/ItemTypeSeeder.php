<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ItemTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()

    {

         $data = [
            ['name' => 'Books' , 'item_id' => 1],
            ['name' => 'Equipments' , 'item_id' => 2],
         ];

         DB::table('item_types')->insert($data);

    }
}
