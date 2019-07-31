<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\School;
use App\Group;
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

    public function viewschools()
    {
        $schools = School::paginate();

        return view('pages/viewschools', compact('schools'));
    }

    public function details($id)
    {
        $groups = Group::All();
        $school = School::find($id);

        return view('pages/details', compact('groups', 'school'));
    }
    
}
