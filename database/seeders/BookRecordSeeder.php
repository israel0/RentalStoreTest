<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class BookRecordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('book_records')->delete();

        $this->createNewRecords();
    }



    protected function createNewRecords()
    {      

        $data = [

            [
                'author' => 'John Doe',
                'isbn' => 1223445566,
                'item_id' => 1,
                'book_class_id' => 1,
            ],

            [
                'author' => 'John Doe 2',
                'isbn' => 1223445566,
                'item_id' => 1,
                'book_class_id' => 2,
            ],

            [
                'author' => 'John Doe 3',
                'isbn' => 1223445566,
                'item_id' => 1,
                'book_class_id' => 3,
            ],

            [
                'author' => 'John Doe 4',
                'isbn' => 1223445566,
                'item_id' => 1,
                'book_class_id' => 4,
            ],

            
        ];
        DB::table('book_records')->insert($data);
    }
}
