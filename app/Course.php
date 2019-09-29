<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $guarded = [];

    public function teacher()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function documents()
    {
        return $this->hasMany('App\Document', 'course_id');
    }

    public function classroom()
    {
        return $this->hasMany('App\Classroom', 'course_id');
    }

    public function url()
    {
        return '/courses/'.$this->id;
    }
}
