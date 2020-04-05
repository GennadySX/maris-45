<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discipline extends Model
{
    //

    protected $fillable = [
        'subject_id',
        'code',
        'countHours',
        'courseWork',
        'examination',
        'nameId',
        'sign',
    ];
}
