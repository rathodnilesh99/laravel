<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class CourseController extends Controller
{
    public function index()
    {
        return view('pages.course');
    }

    public function show()
    {
        return view('pages.course-details');
    }
}
