<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $guarded = [];

    public function course()
    {
        return $this->belongsTo('App\Course', 'course_id');
    }

    public function url()
    {
        return $this->course->url().'/resources/'.$this->id;
    }
}
