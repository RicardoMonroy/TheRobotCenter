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
        $page = Page::find(1);

        return view('welcome', compact('courses', 'page'));
    }

    public function viewschools()
    {
        $schools = School::paginate();

        return view('pages/viewschools', compact('schools'));
    }

    public function details($id)
    {
        $school = School::find($id);
        //$groups = Group::where('school_id', $id)->get();
        $groups = $school->groups;

        return view('pages.details', compact('groups', 'school'));
    }

    public function clases($id)
    {
        $clases = Group::find($id);
        $clases = $clases->course;

        return view('pages.group.clases', compact('clases'));
    }

    public function class($id)
    {
        $course = Course::find($id);

        return view('pages.group.clase.class', compact('course'));
    }
    
}
