<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Courserooms extends Model
{
    protected $table = 'courserooms';
    protected $fillable = [
        'user_id',
        'role_id',
        'classroom',
        'icon'
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
