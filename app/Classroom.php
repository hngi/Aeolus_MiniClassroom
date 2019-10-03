<?php

namespace App;
//Illuminate-Database-Eloquent-Model;

use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    protected $guarded = [];
    public function student()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function course()
    {
        return $this->belongsTo('App\Course', 'course_id');
    }
}
