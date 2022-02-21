<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
           
        $data = [
           
            ['name' => 'New Item'],
            ['name' => 'Used Item'],
          
         ];
 
         DB::table('states')->insert($data);
    }
}
