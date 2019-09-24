<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    //
    protected $table = 'classroom';
    protected $fillable = [
        'user_id',
        'role_id',
        'classroom'
    ];

    public function userClassroom()
    {
        return $this->belongsTO('App\User');
    }

    public function classRoomCourses()
    {
        return $this->hasMany('App\Classroom_items');
    }
}
