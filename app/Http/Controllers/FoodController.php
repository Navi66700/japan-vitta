<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;
use App\Models\FoodVideo;

class FoodController extends Controller
{
    public function index()
    {
        $foods = Food::get();
        $food_videos = FoodVideo::get();
        return view('backend/SSW/SSW JOBS/Foods/index',[
            'foods' => $foods,
            'food_videos' => $food_videos
        ]);
    }

    public function addFood()
    {
        return view('backend/SSW/SSW JOBS/Foods/add-food');
    }

    public function addFoodVideo()
    {
        return view('backend/SSW/SSW JOBS/Foods/add-food-video');
    }
}
