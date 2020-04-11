<?php

use Illuminate\Database\Seeder;

class TeacherDocsSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $td = new \App\TeacherDocs();
        $td->fill([
            'name_id' => '1',
            'user_id' => '1',
            'name' => 'Python для профессионалов',
            'comment' => 'Учебник по прораммирование языка python',
            'ISBN' => 'рф14-07',
            'press' => 'ООО Издатель',
            'bookYear' => '2014',
            'pages' => '320',
            'doc_number' => 'лс-74',
            'paper' => 'БМ-1С',
            'document' => '2010-02-04',
        ])->save();


        $td = new \App\TeacherDocs();
        $td->fill([
            'name_id' => '1',
            'user_id' => '2',
            'name' => 'Java для биг даты',
            'comment' => 'Данные и их структуры',
            'ISBN' => 'рф15-07',
            'press' => 'ООО Издатель',
            'bookYear' => '2017',
            'pages' => '320',
            'doc_number' => 'лс-14',
            'paper' => 'БМ-1С',
            'document' => '2010-02-04',
        ])->save();


        $td = new \App\TeacherDocs();
        $td->fill([
            'name_id' => '1',
            'user_id' => '3',
            'name' => 'Java SE 8',
            'comment' => 'Язык java в пути начало',
            'ISBN' => 'рф12-07',
            'press' => 'ООО Издатель',
            'bookYear' => '2015',
            'pages' => '320',
            'doc_number' => 'лс-21',
            'paper' => 'БМ-1С',
            'document' => '2010-02-04',
        ])->save();

        $td = new \App\TeacherDocs();
        $td->fill([
            'name_id' => '2',
            'user_id' => '1',
            'name' => 'Java 11',
            'comment' => 'Новые подходы и их действие',
            'ISBN' => '201-07',
            'press' => 'ООО Издатель',
            'bookYear' => '2010',
            'pages' => '50',
            'doc_number' => 'лс-37',
            'paper' => 'БМ-1С',
            'document' => '2010-02-04',
        ])->save();

        $td = new \App\TeacherDocs();
        $td->fill([
            'name_id' => '2',
            'user_id' => '2',
            'name' => 'Dart',
            'comment' => 'Язык dart, еще один подарок от Google',
            'ISBN' => 'рф74-07',
            'press' => 'ООО Издатель',
            'bookYear' => '2018',
            'pages' => '320',
            'doc_number' => 'лс-20',
            'paper' => 'БМ-1С',
            'document' => '2010-02-04',
        ])->save();

        $td = new \App\TeacherDocs();
        $td->fill([
            'name_id' => '2',
            'user_id' => '3',
            'name' => 'React',
            'comment' => 'Повлиять индустрии IT',
            'ISBN' => 'рф14-07',
            'press' => 'ООО Издатель',
            'bookYear' => '2010',
            'pages' => '247',
            'doc_number' => 'лс-17',
            'paper' => 'БМ-1С',
            'document' => '2010-02-04',
        ])->save();


        $td = new \App\TeacherDocs();
        $td->fill([
            'name_id' => '2',
            'user_id' => '3',
            'name' => 'React Native',
            'comment' => 'JS теперь над мобильными разработками',
            'ISBN' => 'рф14-07',
            'press' => 'ООО Издатель',
            'bookYear' => '2010',
            'pages' => '247',
            'doc_number' => 'лс-17',
            'paper' => 'БМ-1С',
            'document' => '2010-02-04',
        ])->save();


    }
}
