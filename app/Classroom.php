<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    protected $guarded = [];
    public function students()
    {
        return $this->hasMany('App\User', 'user_id');
    }

    public function course()
    {
        return $this->belongsTo('App\Course', 'course_id');
    }
}
