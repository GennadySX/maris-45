<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TeacherDiscipline extends Model
{
    //
    protected $table = 'teachers_discipline';

    protected $fillable = ['user_id', 'discipline_id'];

}
