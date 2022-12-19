<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PastPaperController extends Controller
{
    public function index()
    {
        return view('backend/past-papers/index');
    }
}
