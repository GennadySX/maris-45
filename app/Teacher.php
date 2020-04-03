<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    //

    protected $fillable = [
        'name',
        'department',
        'institute',
        'place',
        'address',
        'phone',
        'education',
        'speciality',
        'post',
        'passport',
        'region',
        //
        'user_id',
        'birth',
        'year',
        'degreeYes',
        'degree',
        'rank',
        'comment',
        'passportDate',
        ];


    public $timestamps = false;
}
