<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Courseitems extends Model
{
    //

    protected $table = 'courseitems';

    protected $fillable = [
        'user_id',
        'role_id',
        'courseroom_id',
        'media',
        'course_title',
        'course_desc',
        'duration',
        'student_id',
        'joined'
    ];

    public function course(){
        return $this->belongsTo('App\Courseroom');
    }
}
