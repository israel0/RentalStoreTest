<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class StandardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          
    

        $data = [
           ['name' => 'Highest QualIty' ],
           ['name' => 'Qualty'],
           ['name' => 'Low Quality'],
           ['name' => 'Ordinary'],
        ];

        DB::table('standards')->insert($data);

   
    }
}
