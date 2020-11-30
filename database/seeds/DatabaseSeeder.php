<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_roles')->insert([
            'name' => 'Admin',
            'slug' =>'admin'
        ]);
        DB::table('user_roles')->insert([
            'name' => 'User',
            'slug' =>'user'
        ]);
        DB::table('users')->insert([
            'role_id' => 1,
            'name' => 'Maulik',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin@333') 
        ]);
        DB::table('users')->insert([
            'role_id' => 2,
            'name' => 'Vinay',
            'username' => 'user',
            'email' => 'vinay@gmail.com',
            'password' => bcrypt('vinay@333') 
        ]);
    }
}
