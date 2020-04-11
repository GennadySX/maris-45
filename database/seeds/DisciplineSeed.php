<?php

use Illuminate\Database\Seeder;

class DisciplineSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $discipline = new \App\Discipline();
        $discipline->name = 'Физика';
        $discipline->group = '7261-11';
        $discipline->code = '71-ас414';
        $discipline->countHours = '70';
        $discipline->courseWork = '1';
        $discipline->examination = '1';
        $discipline->nameId = '1';
        $discipline->sign = 'bachelor';
        $discipline->save();


        $discipline = new \App\Discipline();
        $discipline->name = 'Информатика';
        $discipline->group = '7261-12';
        $discipline->code = '70-ас414';
        $discipline->countHours = '70';
        $discipline->courseWork = '0';
        $discipline->examination = '0';
        $discipline->sign = 'magistracy';
        $discipline->save();


        $discipline = new \App\Discipline();
        $discipline->name = 'Алгоритмы';
        $discipline->group = '7211-10';
        $discipline->code = '72-ас414';
        $discipline->countHours = '70';
        $discipline->courseWork = '1';
        $discipline->examination = '0';
        $discipline->nameId = '1';
        $discipline->sign = 'speciality';
        $discipline->save();

        $discipline = new \App\Discipline();
        $discipline->name = 'Биг Дата';
        $discipline->group = '14-2540';
        $discipline->code = '73-ас414';
        $discipline->countHours = '70';
        $discipline->courseWork = '0';
        $discipline->examination = '0';
        $discipline->nameId = '1';
        $discipline->sign = 'bachelor';
        $discipline->save();

    }
}
