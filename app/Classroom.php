<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    //

    public function userClassroom()
    {
        return $this->belongsTO('App\User');
    }

    public function classRoomCourses()
    {
        return $this->hasMany('App\Classroom_items');
    }
}
