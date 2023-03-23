<?php

namespace App\Http\Controllers;
use App\Models\Jft;
use Illuminate\Http\Request;

class JftController extends Controller
{
    public function index()
    {
        $jfts = Jft::get();
        return view('backend/SSW/JFT/index',[
            'jfts' => $jfts

        ]);
    }

    public function addJft()
    {
        return view('backend/SSW/JFT/add-jft');
    }

    public function createJft(Request $request)
    {
        $jft = new Jft();
        $jft->pdf_name = $request->pdf_name;
        $jft->video_link = $request->video_link;

        $pdf_file = $request->file('pdf_file')->getClientOriginalName();
        $request->file('pdf_file')->storeAs('public/Jft-pdf', $request->pdf_file->getClientOriginalName());
        $jft->pdf_file = $pdf_file;
        $jft->save();

        return redirect()->back()->with('success', 'JFT added successfully !!!');
    }

    public function viewJft()
    {
        return view('SSW/JFT/index');
    }

    public function editJft($id)
    {

        $jfts = Jft::find($id);
        return view('backend/SSW/JFT/edit-jft',[
            'jfts' => $jfts
        ]);

    }

    public function uploadJftPdf(Request $request) {
        $file = $request->file('pdf_file');
        $destinationPath = 'storage/jft-pdf';
        $file->move($destinationPath, $file->getClientOriginalName());
        return $file->getClientOriginalName();
      }


    public function updateJft(Request $request)
    {
        $jft = JFT::find($request->jft_id);
        $jft->pdf_name = $request->pdf_name;
        $jft->video_link = $request->video_link;
        if($request->has('pdf_file')){
            $JftPdfPath = self::uploadJftPdf($request);
            $jft->pdf_file = $JftPdfPath;
          }
         $jft->update();
         return redirect()->back()->with('success', 'JFT Updated Successfully');
    }


}
