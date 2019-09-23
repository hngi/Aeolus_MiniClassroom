<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classroom_items extends Model
{
    //

    public function classRoom()
    {
        return $this->belongsTo('App/Classroom');
    }
}
