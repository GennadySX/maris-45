<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TeacherDocs extends Model
{
    //

    protected $fillable = [
        'name_id',
        'sign',
        'ISBN',
        'press',
        'bookYear',
        'pages',
        'doc_number',
        'paper',
        'document',
    ];


}
