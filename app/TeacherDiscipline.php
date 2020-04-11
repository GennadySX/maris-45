<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TeacherDiscipline extends Model
{
    //
    protected $table = 'teachers_discipline';

    protected $fillable = ['user_id', 'discipline_id'];


    public function teacherlist()
    {
        return $this->belongsTo(Discipline::class, 'discipline_id');
    }


    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
