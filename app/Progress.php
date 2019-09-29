<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Progress extends Model
{
    protected $guarded = [];
    public function course()
    {
        return $this->belongsTo('App\Course', 'course_id');
    }
}
