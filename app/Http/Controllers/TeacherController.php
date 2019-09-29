<?php

namespace App\Http\Controllers;

use App\Course;
use App\Document;
use App\Subject;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        $courses = auth()->user()->courses;

        $subjects = Subject::all();
        return view('teacher.index', compact('courses','subjects'));
    }

    public function course(Course $course)
    {
        $subjects = Subject::all();
        $related = auth()->user()->courses->where('id','<>',$course->id);
        return view('teacher.course', compact('course','related','subjects'));
    }

    public function document(Course $course, Document $document)
    {
        $related = Document::where('course_id', $document->course_id)->where('id','<>',$document->id)->get();
        return view('teacher.document', compact('document','related'));
    }
}
