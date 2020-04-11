<?php

use Illuminate\Database\Seeder;

class TeacherDisciplineSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
            $tc = new \App\TeacherDiscipline();
            $tc->fill([
                'user_id' => '1',
                'discipline_id' => '1',
                'permission'=>'1'
            ])->save();

        $tc = new \App\TeacherDiscipline();
        $tc->fill([
            'user_id' => '2',
            'discipline_id' => '1',
            'permission'=>'1'
        ])->save();

        $tc = new \App\TeacherDiscipline();
        $tc->fill([
            'user_id' => '3',
            'discipline_id' => '1',
            'permission'=>'1'
        ])->save();

        $tc = new \App\TeacherDiscipline();
        $tc->fill([
            'user_id' => '1',
            'discipline_id' => '2',
            'permission'=>'1'
        ])->save();

        $tc = new \App\TeacherDiscipline();
        $tc->fill([
            'user_id' => '1',
            'discipline_id' => '3',
            'permission'=>'1'
        ])->save();


        $tc = new \App\TeacherDiscipline();
        $tc->fill([
            'user_id' => '2',
            'discipline_id' => '2',
            'permission'=>'1'
        ])->save();

        $tc = new \App\TeacherDiscipline();
        $tc->fill([
            'user_id' => '2',
            'discipline_id' => '3',
            'permission'=>'1'
        ])->save();

        $tc = new \App\TeacherDiscipline();
        $tc->fill([
            'user_id' => '3',
            'discipline_id' => '2',
            'permission'=>'1'
        ])->save();

        $tc = new \App\TeacherDiscipline();
        $tc->fill([
            'user_id' => '3',
            'discipline_id' => '3',
            'permission'=>'1'
        ])->save();

    }
}
