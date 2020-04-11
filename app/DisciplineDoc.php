<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DisciplineDoc extends Model
{
    //

    protected $fillable = [
        'user_id',
        'discipline_id',
        'doc_id',
    ];





    public function discipline()
    {
        return $this->belongsTo(Discipline::class,  'discipline_id');
    }

    public function doc()
    {
        return $this->belongsTo(TeacherDocs::class,  'doc_id');
    }
}
