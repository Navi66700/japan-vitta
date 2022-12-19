<?php

namespace App\Http\Controllers;

use App\Models\lesson;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    public function index()
    {
        $lessons = lesson::get();
        return view('backend/lesson/index',[
            'lessons' => $lessons
        ]);
    }

    public function addLesson()
    {
        return view('backend/lesson/add-lessons');
    }

    public function createLesson(Request $request)
    {
        $lesson = new lesson();
        $lesson->lesson_title = $request->lesson_title;
        $lesson->level = $request->level;
        $lesson->description = $request->description;
        $lesson->pdf_file = $request->pdf_file;
        $lesson->lesson_image = $request->lesson_image;
        $lesson->youtube_link = $request->youtube_link;

        $request->file('lesson_image')->store('public/lessons-image');
        $request->file('pdf_file')->store('public/lessons-pdf');

        $lesson->pdf_file = $request->file('pdf_file')->hashName();
        $lesson->lesson_image = $request->file('lesson_image')->hashName();

        $lesson->save();
        return redirect()->back()->with('success', 'Lesson added successfully !!!');

    }

    public function editLesson($id)
    {
        $lessons = lesson::find($id);
        return view('backend/lesson/edit-lessons',[
            'lessons' => $lessons
        ]);
    }

    public function updateLesson(Request $request)
    {
        lesson::where('id',$request->lesson_id)->update([
            'lesson_title' =>$request->lesson_title,
            'level' =>$request->level,
            'description' =>$request->description,
            'youtube_link' =>$request->youtube_link,
        ]);

        $request->file('lesson_image')->store('public/lessons-image');
        $request->file('pdf_file')->store('public/lessons-pdf');

        $lesson_image = $request->file('lesson_image')->hashName();
        $pdf_file = $request->file('pdf_file')->hashName();

        lesson::where('id',$request->lesson_id)->update([
            'lesson_image' => $lesson_image,
            'pdf_file' => $pdf_file
        ]);

        return redirect()->back()->with('success', 'Lesson updated successfully !!!');

    }

    public function deleteLesson($id)
    {
        $lessons = lesson::find($id)->delete();
        return redirect()->back()->with('success', 'Lesson deleted successfully !!!');
    }

}
