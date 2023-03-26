<?php

namespace App\Http\Controllers;

use App\Models\Agriculture;
use App\Models\AgricultureVideo;
use App\Models\Food;
use App\Models\FoodVideo;
use Illuminate\Http\Request;

class AgricultureController extends Controller
{
    public function index()
    {
        $agricultures = Agriculture::get();
        $agriculture_videos = AgricultureVideo::get();
        return view('backend/SSW/SSW JOBS/Agriculture/index',[
            'agricultures' => $agricultures,
            'agriculture_videos' => $agriculture_videos
        ]);
    }

    public function addAgri()
    {
        return view('backend/SSW/SSW JOBS/Agriculture/add-agriculture');
    }

    public function addAgriVideo()
    {
        return view('backend/SSW/SSW JOBS/Agriculture/add-agriculture-video');
    }

    public function createAgriculture(Request $request)
    {
        $agri = new Agriculture();
        $agri->agriculture_title = $request->agriculture_title;
        $pdf_file = $request->file('pdf_file')->getClientOriginalName();
        $request->file('pdf_file')->storeAs('public/agriculture-pdf', $request->pdf_file->getClientOriginalName());
        $agri->pdf_file = $pdf_file;

        $agri->save();

        return redirect()->back()->with('success', 'Agriculture added successfully !!!');

    }

    public function updateAgriculture($id)
    {
        $agriculture = Agriculture::find($id);
        return view('backend/SSW/SSW JOBS/Agriculture/edit-agriculture',[
            'agriculture' => $agriculture
        ]);


    }


    public function uploadAgriculturePDF(Request $request) {
        $file = $request->file('pdf_file');
        $destinationPath = 'storage/agriculture-pdf';
        $file->move($destinationPath, $file->getClientOriginalName());
        return $file->getClientOriginalName();
    }

    public function editAgriculture(Request $request)
    {
        $agriculture = Agriculture::find($request->agriculture_id);
        $agriculture->agriculture_title = $request->agriculture_title;
        if($request->has('pdf_file')){
            $agriculturepdfpath = self::uploadAgriculturePDF($request);
            $agriculture->pdf_file = $agriculturepdfpath;
        }
        $agriculture->update();
        return redirect()->back()->with('success', 'Agriculture Updated Successfully');
    }


    public function deleteAgriculture($id)
    {
        $agriculture = Agriculture::find($id)->delete();
        return redirect()->back()->with('success', 'Agriculture deleted successfully !!!');
    }


    public function createAgricultureVideo(Request $request)
    {
        $agriculture_video = new agricultureVideo();
        $agriculture_video-> agri_video_link = $request->agri_video_link;
        $agriculture_video-> agri_video_name = $request->agri_video_name;
        $agriculture_video->save();

        return redirect()->back()->with('success', 'Food Video Added successfully !!!');

    }
    public function updateAgricultureVideo($id)
    {
        $agriculture_videos = AgricultureVideo::find($id);
        return view('backend/SSW/SSW JOBS/Agriculture/edit-agriculture-video',[
            'agriculture_videos' => $agriculture_videos
        ]);

    }
    public function editAgricultureVideo(Request $request)
    {
        $agriculture_videos = AgricultureVideo::find($request->agriculture_video_id);
        $agriculture_videos->agri_video_link = $request->agri_video_link;
        $agriculture_videos->agri_video_name = $request->agri_video_name;
        $agriculture_videos->update();
        return redirect()->back()->with('success', 'Food Video Updated Successfully');
    }

    public function deleteAgricultureVideo($id)
    {
        $agriculture_video = AgricultureVideo::find($id)->delete();
        return redirect()->back()->with('success', 'Agriculture Video deleted successfully !!!');
    }


}
