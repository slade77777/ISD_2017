<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['name' => 'admin01', 'email' => 'admin01@gmail.com', 'password' => 'password' , 'role' => 1 ],
            ['name' => 'admin02', 'email' => 'admin02@gmail.com', 'password' => 'password' , 'role' => 2 ],
            ['name' => 'admin03', 'email' => 'admin03@gmail.com', 'password' => 'password' , 'role' => 2 ],
        ]);
    }
}
