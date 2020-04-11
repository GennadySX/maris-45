<?php

use Illuminate\Database\Seeder;

class DisciplineDocSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $doc = new \App\DisciplineDoc();
        $doc->fill([
            'user_id' =>'1',
            'discipline_id' =>'1',
            'doc_id' =>'1',
        ])->save();



        $doc = new \App\DisciplineDoc();
        $doc->fill([
            'user_id' =>'2',
            'discipline_id' =>'1',
            'doc_id' =>'2',
        ])->save();


        $doc = new \App\DisciplineDoc();
        $doc->fill([
            'user_id' =>'3',
            'discipline_id' =>'1',
            'doc_id' =>'3',
        ])->save();



        $doc = new \App\DisciplineDoc();
        $doc->fill([
            'user_id' =>'1',
            'discipline_id' =>'2',
            'doc_id' =>'4',
        ])->save();



        $doc = new \App\DisciplineDoc();
        $doc->fill([
            'user_id' =>'2',
            'discipline_id' =>'2',
            'doc_id' =>'5',
        ])->save();


        $doc = new \App\DisciplineDoc();
        $doc->fill([
            'user_id' =>'3',
            'discipline_id' =>'3',
            'doc_id' =>'6',
        ])->save();


        $doc = new \App\DisciplineDoc();
        $doc->fill([
            'user_id' =>'1',
            'discipline_id' =>'3',
            'doc_id' =>'7',
        ])->save();







    }
}
