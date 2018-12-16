<?php

use Illuminate\Database\Seeder;
use App\User_central_admin;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(User_central_admin::class);
    }
}
