<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Courseroom extends Model
{
    //
    protected $table = 'courserooms';
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
        return $this->hasMany('App\Courseroomitems');
    }
}
