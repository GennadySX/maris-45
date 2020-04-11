<?php

use Illuminate\Database\Seeder;

class TeacherSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $teacher = new \App\Teacher();

        $teacher->fill([
            'name' => 'Андрей Соколов',
            'department' => 'ИПМ',
            'institute' => 'Институт моды и дизайна',
            'place' => 'Казань, РТ',
            'address' => 'ул. Тестовская 1, Москва, РФ',
            'phone' => '+7 999 111 22 34',
            'education' => 'КНИТУ-КХТИ',
            'speciality' => 'Инжинер технолог',
            'post' => 'Доцент',
            'passport' => '4771-4100',
            'region' => 'отделом уфмс по гододе Москвы, РФ',
            //
            'user_id' => '1',
            'birth' => '1990-01-01',
            'year' => '2014',
            'degreeYes' => '1',
            'degree' => '1',
            'rank' => '1',
            'comment' => 'Я преподаватель',
            'passportDate' => '2014-01-05',
            'picture' => '/public/admin/assets/images/avatar-1.jpg'
        ])->save();



        $teacher = new \App\Teacher();

        $teacher->fill([
            'name' => 'Марина Клучко',
            'department' => 'ИПМ',
            'institute' => 'Институт моды и дизайна',
            'place' => 'Казань, РТ',
            'address' => 'ул. Тестовская 1, Москва, РФ',
            'phone' => '+7 999 111 22 34',
            'education' => 'КНИТУ-КХТИ',
            'speciality' => 'Инжинер технолог',
            'post' => 'Доцент',
            'passport' => '4771-4100',
            'region' => 'отделом уфмс по гододе Москвы, РФ',
            //
            'user_id' => '2',
            'birth' => '1990-01-01',
            'year' => '2014',
            'degreeYes' => '1',
            'degree' => '1',
            'rank' => '1',
            'comment' => 'Я преподаватель',
            'passportDate' => '2014-01-05',
            'picture' => '/public/admin/assets/images/avatar-2.jpg'
        ])->save();


        $teacher = new \App\Teacher();

        $teacher->fill([
            'name' => 'Космос Ламонов',
            'department' => 'ИПМ',
            'institute' => 'Институт моды и дизайна',
            'place' => 'Казань, РТ',
            'address' => 'ул. Тестовская 1, Москва, РФ',
            'phone' => '+7 999 111 22 34',
            'education' => 'КНИТУ-КХТИ',
            'speciality' => 'Инжинер технолог',
            'post' => 'Доцент',
            'passport' => '4771-4100',
            'region' => 'отделом уфмс по гододе Москвы, РФ',
            //
            'user_id' => '3',
            'birth' => '1990-01-01',
            'year' => '2014',
            'degreeYes' => '1',
            'degree' => '1',
            'rank' => '1',
            'comment' => 'Я преподаватель',
            'passportDate' => '2014-01-05',
            'picture' => '/public/admin/assets/images/avatar-3.jpg'
        ])->save();


        $teacher = new \App\Teacher();

        $teacher->fill([
            'name' => 'Александр Петров',
            'department' => 'ИПМ',
            'institute' => 'Институт моды и дизайна',
            'place' => 'Казань, РТ',
            'address' => 'ул. Тестовская 1, Москва, РФ',
            'phone' => '+7 999 111 22 34',
            'education' => 'КНИТУ-КХТИ',
            'speciality' => 'Инжинер технолог',
            'post' => 'Доцент',
            'passport' => '4771-4100',
            'region' => 'отделом уфмс по гододе Москвы, РФ',
            //
            'user_id' => '4',
            'birth' => '1990-01-01',
            'year' => '2014',
            'degreeYes' => '1',
            'degree' => '1',
            'rank' => '1',
            'comment' => 'Я преподаватель',
            'passportDate' => '2014-01-05',
            'picture' => '/public/admin/assets/images/avatar-4.jpg'
        ])->save();


        $teacher = new \App\Teacher();

        $teacher->fill([
            'name' => 'Алина Фармонова',
            'department' => 'ИПМ',
            'institute' => 'Институт моды и дизайна',
            'place' => 'Казань, РТ',
            'address' => 'ул. Тестовская 1, Москва, РФ',
            'phone' => '+7 999 111 22 34',
            'education' => 'КНИТУ-КХТИ',
            'speciality' => 'Инжинер технолог',
            'post' => 'Доцент',
            'passport' => '4771-4100',
            'region' => 'отделом уфмс по гододе Москвы, РФ',
            //
            'user_id' => '5',
            'birth' => '1990-01-01',
            'year' => '2014',
            'degreeYes' => '1',
            'degree' => '1',
            'rank' => '1',
            'comment' => 'Я преподаватель',
            'passportDate' => '2014-01-05',
            'picture' => '/public/admin/assets/images/avatar-5.jpg'
        ])->save();

        $teacher = new \App\Teacher();

        $teacher->fill([
            'name' => 'Максим Белоусов',
            'department' => 'ИПМ',
            'institute' => 'Институт моды и дизайна',
            'place' => 'Казань, РТ',
            'address' => 'ул. Тестовская 1, Москва, РФ',
            'phone' => '+7 999 111 22 34',
            'education' => 'КНИТУ-КХТИ',
            'speciality' => 'Инжинер технолог',
            'post' => 'Доцент',
            'passport' => '4771-4100',
            'region' => 'отделом уфмс по гододе Москвы, РФ',
            //
            'user_id' => '1',
            'birth' => '1990-01-01',
            'year' => '2014',
            'degreeYes' => '1',
            'degree' => '1',
            'rank' => '1',
            'comment' => 'Я преподаватель',
            'passportDate' => '2014-01-05',
            'picture' => '/public/admin/assets/images/avatar-6.jpg'
        ])->save();

        $teacher = new \App\Teacher();

        $teacher->fill([
            'name' => 'Ольга Павлева',
            'department' => 'ИПМ',
            'institute' => 'Институт моды и дизайна',
            'place' => 'Казань, РТ',
            'address' => 'ул. Тестовская 1, Москва, РФ',
            'phone' => '+7 999 111 22 34',
            'education' => 'КНИТУ-КХТИ',
            'speciality' => 'Инжинер технолог',
            'post' => 'Доцент',
            'passport' => '4771-4100',
            'region' => 'отделом уфмс по гододе Москвы, РФ',
            //
            'user_id' => '7',
            'birth' => '1990-01-01',
            'year' => '2014',
            'degreeYes' => '1',
            'degree' => '1',
            'rank' => '1',
            'comment' => 'Я преподаватель',
            'passportDate' => '2014-01-05',
            'picture' => '/public/admin/assets/images/avatar-7.jpg'
        ])->save();

        $teacher = new \App\Teacher();

        $teacher->fill([
            'name' => 'Николай Смирнов',
            'department' => 'ИПМ',
            'institute' => 'Институт моды и дизайна',
            'place' => 'Казань, РТ',
            'address' => 'ул. Тестовская 1, Москва, РФ',
            'phone' => '+7 999 111 22 34',
            'education' => 'КНИТУ-КХТИ',
            'speciality' => 'Инжинер технолог',
            'post' => 'Доцент',
            'passport' => '4771-4100',
            'region' => 'отделом уфмс по гододе Москвы, РФ',
            //
            'user_id' => '8',
            'birth' => '1990-01-01',
            'year' => '2014',
            'degreeYes' => '1',
            'degree' => '1',
            'rank' => '1',
            'comment' => 'Я преподаватель',
            'passportDate' => '2014-01-05',
            'picture' => '/public/admin/assets/images/avatar-8.jpg'
        ])->save();

    }
}
