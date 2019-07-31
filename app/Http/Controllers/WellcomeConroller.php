<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\Page;

class WellcomeConroller extends Controller
{
    public function view()
    {
        $courses = Course::paginate();
        $page = Page::first();

        return view('welcome', compact('courses', 'page'));
    }
}
