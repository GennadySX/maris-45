<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discipline extends Model
{
    //

    protected $fillable = [
        'name',
        'group',
        'code',
        'countHours',
        'courseWork',
        'examination',
        'nameId',
        'sign',
    ];


    public function teacherlist()
    {
        return $this->belongsToMany( Teacher::class, TeacherDiscipline::class, 'discipline_id', 'user_id');
    }

    public function rel()
    {
        return $this->hasMany( TeacherDiscipline::class, 'discipline_id');
    }



}
