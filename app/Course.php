<?php
//To create the teacher function to check the enrolled students and their progress 
namespace App;
//Illuminate-Database-Eloquent-Model;
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

    public function enrolled()
    {
        $check = Classroom::where('course_id', $this->id)->where('user_id', auth()->id())->first();
        return $check ? true : false;
    }

    public function progress()
    {
        return Progress::where('course_id', $this->id)->where('student_id', auth()->id())->get();
    }
}
