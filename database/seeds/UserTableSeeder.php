<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::insert([
        	'name'=>'Hồng Phúc',
        	'email'=>'admin@gmail.com',
        	'avatar'=>'a.jpg',
        	'password'=>bcrypt('admin'),
        	'role_id'=>1
        ]);
    }
}
