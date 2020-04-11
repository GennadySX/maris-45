<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TeacherDocs extends Model
{
    //

    protected $fillable = [
        'name_id',
        'name',
        'comment',
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
