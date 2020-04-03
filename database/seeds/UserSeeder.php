<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $user = new \App\User();
       $user->name = 'Андрей Соколов';
       $user->email = 'admin@mail.com';
       $user->password = bcrypt('adminPass');
       $user->role = 'admin';
       $user->save();
    }
}
