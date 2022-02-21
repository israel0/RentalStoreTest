<?php

namespace Database\Seeders;
 
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        DB::table('users')->delete();

        $this->createNewRecords();
    }

    public function createNewRecords()
    {

        $data = [

            [
            'name' => 'Israel Akinsola 1',
            'email' => 'seyeakinsola@gmail.com',
            'password'=> Hash::make('test123'),
            'admin'=> 0,
            ],

            [
                'name' => 'Israel Akinsola 2',
                'email' => 'seconduser@gmail.com',
                'password'=> Hash::make('test123'),
                'admin'=> 0,
                ],
 
             
        ];
        DB::table('users')->insert($data);

    }
}
