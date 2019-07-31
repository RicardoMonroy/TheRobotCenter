<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;

class WellcomeConroller extends Controller
{
    public function view()
    {
        $courses = Course::paginate();

        return view('welcome', compact('courses'));
    }
}
