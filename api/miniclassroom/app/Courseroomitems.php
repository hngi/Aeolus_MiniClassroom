<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Courseroomitems extends Model
{
    protected $table = 'courseroomitems';

    protected $fillable = [
        'user_id',
        'role_id',
        'courseroom_id',
        'media',
        'course_title',
        'course_desc',
        'duration',
        'student_id',
        'joined',
        'price'
    ];

    public function course(){
        return $this->belongsTo('App\Courseroom');
    }
}
