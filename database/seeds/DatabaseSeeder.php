<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(TeacherSeed::class);
        $this->call(DisciplineSeed::class);
        $this->call(TeacherDisciplineSeed::class);
        $this->call(TeacherDocsSeed::class);
        $this->call(DisciplineDocSeed::class);
    }
}
