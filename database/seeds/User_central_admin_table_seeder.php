<?php

use Illuminate\Database\Seeder;
use App\User_central_admin;

class User_central_admin_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new User_central_admin();
        $admin->type = 'central_admin';
        $admin->username = 'superadmin';
        $admin->password = 'as';
        $admin->email = 'superadmin@gmail.com';
        $admin->save();
    }
}
