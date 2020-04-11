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


        $user = new \App\User();
        $user->name = 'Марина Клучко';
        $user->email = 'marina@mail.com';
        $user->password = bcrypt('marinaPass');
        $user->role = 'teacher';
        $user->save();


        $user = new \App\User();
        $user->name = 'Космос Ламонов';
        $user->email = 'cosmos@mail.com';
        $user->password = bcrypt('cosmosPass');
        $user->role = 'teacher';
        $user->save();


        $user = new \App\User();
        $user->name = 'Александр Петров';
        $user->email = 'alex@mail.com';
        $user->password = bcrypt('alexPass');
        $user->role = 'teacher';
        $user->save();

        $user = new \App\User();
        $user->name = 'Алина Фармонова';
        $user->email = 'alina@mail.com';
        $user->password = bcrypt('alinaPass');
        $user->role = 'teacher';
        $user->save();


        $user = new \App\User();
        $user->name = 'Максим Белоусов';
        $user->email = 'maksim@mail.com';
        $user->password = bcrypt('maksimPass');
        $user->role = 'teacher';
        $user->save();

        $user = new \App\User();
        $user->name = 'Ольга Павлева';
        $user->email = 'olga@mail.com';
        $user->password = bcrypt('olgaPass');
        $user->role = 'teacher';
        $user->save();


        $user = new \App\User();
        $user->name = 'Николай Смирнов';
        $user->email = 'nicolay@mail.com';
        $user->password = bcrypt('nicolayPass');
        $user->role = 'teacher';
        $user->save();
    }
}
