<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $guarded = [];

    public function courses()
    {
        $this->hasMany('App\Course', 'subject_id');
    }
}
