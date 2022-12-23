<?php

namespace App\Http\Controllers;

use App\Models\pastPaper;
use Illuminate\Http\Request;

class PastPaperController extends Controller
{
    //get all past paper details to the table
    public function index()
    {
        $pastPapers = pastPaper::get();
        return view('backend/past-papers/index',[
                'pastPapers' => $pastPapers
            ]
        );
    }

    public function addPapers()
    {
        return view('backend/past-papers/add-papers');
    }


    //create new paper file

    public function createPapers(Request $request)
    {
        $pastPaper = new pastPaper();
        $pastPaper->paper_title = $request->paper_title;
        $pastPaper->level = $request->level;
        $pastPaper->pdf_file = $request->pdf_file;
        $pastPaper->youtube_link = $request->youtube_link;



        $request->file('pdf_file')->store('public/paper-pdf');

        $pastPaper->pdf_file = $request->file('pdf_file')->hashName();


        $pastPaper->save();
        return redirect()->back()->with('success', 'paper added successfully !!!');







}

//Pass Id to the Edit Page
    public function editPaper($id)
    {
        $pastPapers = pastPaper::find($id);
        return view('backend/past-papers/edit-papers',[
            'pastPapers' => $pastPapers
        ]);





    }


    public function updatePaper(Request $request)
    {
        pastPaper::where('id', $request->paper_id)->update([
            'paper_title' => $request->paper_title,
            'level' => $request->level,
        ]);
        $request->file('pdf_file')->store('public/paper-pdf');
        $pdf_file = $request->file('pdf_file')->hashName();

        pastPaper::where('id', $request->paper_id)->update([

            'pdf_file' => $pdf_file
        ]);
        return redirect()->back()->with('success', 'Lesson updated successfully !!!');
    }

    public function deletePaper($id)
    {
        $pastPapers = pastPaper::find($id)->delete();
        return redirect()->back()->with('success', 'Paper deleted successfully !!!');
    }
}
