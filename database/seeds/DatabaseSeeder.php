<?php

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
        $this->call(RoleTableSeeder::class);
        $this->call(StatusTableSeeder::class);
        $this->call(NameTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(BrandTableSeeder::class);
    }
}
