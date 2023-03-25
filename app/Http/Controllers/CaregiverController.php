<?php

namespace App\Http\Controllers;

use App\Models\Caregiver;
use App\Models\CaregiverVideo;
use Illuminate\Http\Request;

class CaregiverController extends Controller
{
   public function index()
   {
    $caregivers = Caregiver::get();
    $caregiver_videos = CaregiverVideo::get();
    return view('backend/SSW/SSW JOBS/Caregiver/index',[
        'caregivers' => $caregivers,
        'caregiver_videos' => $caregiver_videos
    ]);
   }

   public function addCaregiver()
   {
    return view('backend/SSW/SSW JOBS/Caregiver/add-caregiver');
   }

   public function addCaregiverVideo()
   {
    return view('backend/SSW/SSW JOBS/Caregiver/add-caregiver-video');
   }
}
