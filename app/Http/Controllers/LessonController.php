<?php

namespace App\Http\Controllers;

use App\Models\lesson;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Stroage;


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
        $lesson->youtube_link = $request->youtube_link;

        $lesson_image = $request->file('lesson_image')->getClientOriginalName();
        $request->file('lesson_image')->storeAs('public/lessons-image', $request->lesson_image->getClientOriginalName());
        $pdf_file = $request->file('pdf_file')->getClientOriginalName();
        $request->file('pdf_file')->storeAs('public/lessons-pdf', $request->pdf_file->getClientOriginalName());
        $lesson->lesson_image = $lesson_image;
        $lesson->pdf_file = $pdf_file;

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

    public function viewLevelOne()
    {
        $levelones = lesson::where('level','=','N1')->get();
        return view('levels/N1/index',[
            'levelones' => $levelones
        ]);
    }

    public function viewLevelTwo()
    {
        $leveltwo = lesson::where('level','=','N2')->get();
        return view('levels/N2/index',[
            'leveltwo' => $leveltwo
        ]);
    }

    public function viewLevelThree()
    {
        $levelthree = lesson::where('level','=','N3')->get();
        return view('levels/N3/index',[
            'levelthree' => $levelthree
        ]);
    }

    public function viewLevelFour()
    {
        $levelfour = lesson::where('level','=','N4')->get();
        return view('levels/N4/index',[
            'levelfour' => $levelfour
        ]);
    }

    public function viewLevelFive()
    {
        $levelfive = lesson::where('level','=','N5')->get();
        return view('levels/N5/index',[
            'levelfive' => $levelfive
        ]);
    }

    public function viewLevelOneDetails($id)
    {
        $lessononeDetails = lesson::find($id);
        return view('levels/N1/view-level-one',[
            'lessononeDetails' => $lessononeDetails
        ]);
    }

    public function viewLevelTwoDetails($id)
    {
        $lessontwoDetails = lesson::find($id);
        return view('levels/N2/view-level',[
            'lessontwoDetails' => $lessontwoDetails
        ]);
    }


    public function viewLevelThreeDetails($id)
    {
        $lessonthreeDetails = lesson::find($id);
        return view('levels/N3/view-level',[
            'lessonthreeDetails' => $lessonthreeDetails
        ]);
    }

    public function viewLevelFourDetails($id)
    {
        $lessonfourDetails = lesson::find($id);
        return view('levels/N4/view-level',[
            'lessonfourDetails' => $lessonfourDetails
        ]);
    }

    public function viewLevelFiveDetails($id)
    {
        $lessonfiveDetails = lesson::find($id);
        return view('levels/N5/view-level',[
            'lessonfiveDetails' => $lessonfiveDetails
        ]);
    }


    public function pdfDownload($id)
    {
        $data = lesson::where('id',$id)->first();
        $file_path = public_path("storage/lessons-pdf/{$data->pdf_file}");
        return response()->download($file_path);
    }

    public function pdfDownloadTwo($id)
    {
        $data = lesson::where('id',$id)->first();
        $file_path = public_path("storage/lessons-pdf/{$data->pdf_file}");
        return response()->download($file_path);
    }

    public function pdfDownloadThree($id)
    {
        $data = lesson::where('id',$id)->first();
        $file_path = public_path("storage/lessons-pdf/{$data->pdf_file}");
        return response()->download($file_path);
    }
    public function pdfDownloadFour($id)
    {
        $data = lesson::where('id',$id)->first();
        $file_path = public_path("storage/lessons-pdf/{$data->pdf_file}");
        return response()->download($file_path);
    }


    public function pdfDownloadFive($id)
    {
        $data = lesson::where('id',$id)->first();
        $file_path = public_path("storage/lessons-pdf/{$data->pdf_file}");
        return response()->download($file_path);
    }


}
