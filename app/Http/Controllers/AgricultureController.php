<?php

namespace App\Http\Controllers;

use App\Models\Agriculture;
use App\Models\AgricultureVideo;
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
}
