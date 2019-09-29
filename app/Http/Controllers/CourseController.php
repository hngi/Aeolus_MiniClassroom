<?php

namespace App\Http\Controllers;

use App\Classroom;
use App\Course;
use App\Document;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        //
    }

    public function show(Course $course)
    {
        $related = Course::has('documents')->where('subject_id', $course->subject_id)->where('id','<>',$course->id)->get();
        return view('courses.show', compact('course','related'));
    }

    public function document(Course $course, Document $document)
    {
        $related = Document::where('course_id', $document->course_id)->where('id','<>',$document->id)->get();
        return view('courses.document', compact('document','related'));
    }

    public function save()
    {
        $course = auth()->user()->courses()->create(request()
            ->validate(['title' => 'required',
                'subject_id' => 'required',
                'description' => 'required']));
        return redirect('/teacher/courses/'.$course->id);
    }

    public function addDocument(Course $course)
    {
        $course->documents()->create(
            request()
                ->validate(['title' => 'required',
                    'intro' => 'required',
                    'document' => 'required',
                    'chapter' => 'required'])
        );
        return redirect('/teacher/courses/'.$course->id);
    }
    
    public function enroll()
    {
        $classroom = Classroom::firstOrCreate(
            [
                'user_id' => auth()
            ],
            [
                'st'
            ]);
    }
}
