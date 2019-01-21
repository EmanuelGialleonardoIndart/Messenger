<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'maxnu',
            'email'=>'manugiainda@gmail.com',
            'password'=>bcrypt('1234')
        ]);
        User::create([
            'name'=>'juan',
            'email'=>'juan@gmail.com',
            'password'=>bcrypt('1234')
        ]);
        User::create([
            'name'=>'pepe',
            'email'=>'pepe@gmail.com',
            'password'=>bcrypt('1234')
        ]);
    }
}
