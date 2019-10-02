<?php

namespace App\Http\Controllers;

use App\Course;
use App\Subject;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {

        if (request('filter')) {
            $courses = Course::with('documents')->has('documents')
                ->where('subject_id', request('filter'))->paginate(30);
        } else {

            $courses = Course::with('documents')->has('documents')->paginate(30);
        }

        $subjects = Subject::all();
        return view('student.index', compact('courses', 'subjects'));
    }


    public function profile()
    {
        return view('student.profile');
    }
}
