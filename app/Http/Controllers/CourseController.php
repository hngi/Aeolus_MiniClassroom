<?php

namespace App\Http\Controllers;

use App\Classroom;
use App\Course;
use App\Document;
use App\Progress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CourseController extends Controller
{
    public function index()
    {
        //$related=course::has('documents')
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

    public function save(Request $request)
    {
        $request->validate(['title' => 'required',
                'subject_id' => 'required',
                'image' => 'required',
                'description' => 'required']);

        $path = Storage::disk('public')->putFile('courses',$request->file('image'));
        $all = $request->all();
        $all['image'] = $path;

        $course = auth()->user()->courses()->create($all);

        return redirect('/teacher/courses/'.$course->id);
    }

    public function addDocument(Course $course, Request $request)
    {
        $request->validate([
                'title' => 'required',
                'intro' => 'required',
                'document' => 'required',
                'video' => 'required',
                'chapter' => 'required']);

        $path = Storage::disk('public')->putFile('docs',$request->file('document'));
        $all = $request->all();
        $all['document'] = $path;
        //dd($all);
        $course->documents()->create($all);

        return redirect('/teacher/courses/'.$course->id);
    }
    
    public function enroll()
    {
        Classroom::firstOrCreate(
            [
                'user_id' => auth()->id(),
                'course_id' => request('course_id')
            ]);
        return back();
    }

    public function completed(Document $document)
    {
        Progress::create([
            'student_id' => auth()->id(),
            'course_id' => $document->course_id,
            'chapter_id' => $document->chapter
        ]);
        return back();
    }

    public function students(Course $course)
    {
        return view('teacher.students', compact('course'));
    }

}
