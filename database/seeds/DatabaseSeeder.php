<?php

use App\TIFUsers;
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
        TIFUsers::factory(1)->create();
        // $this->call(UsersTableSeeder::class);
    }
}
