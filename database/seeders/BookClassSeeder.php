<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('book_classes')->delete();

        $this->createNewRecords();
    }



    protected function createNewRecords()
    {      

        $data = [

            [
                'name' => 'Academic Books',
            ],

            [
                'name' => 'Business Books',
            ],

            [
                'name' => 'Financial Books',
            ],

            [
                'name' => 'History Books',
            ],

       
            
        ];
        DB::table('book_classes')->insert($data);
    }
}
