<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call(UserSeeder::class);
        $this->call(ItemTypeSeeder::class);
        $this->call(BookClassSeeder::class);
        $this->call(BookRecordSeeder::class);
        $this->call(EquipmentClassSeeder::class);
        $this->call(EquipmentRecordSeeder::class);
        $this->call(StandardSeeder::class);
        $this->call(StateSeeder::class);
        $this->call(ItemTableSeeder::class);
        $this->call(RentalSeeder::class);
        $this->call(RentHistroySeeder::class);

    }
}
