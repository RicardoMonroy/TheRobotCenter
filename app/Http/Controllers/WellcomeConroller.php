<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\School;
use App\Group;
use App\Course;
use App\Page;
use App\Student;

class WellcomeConroller extends Controller
{
    public function view()
    {
        $schools = School::paginate();
        $page = Page::find(1);

        return view('welcome', compact('schools', 'page'));
    }

    public function viewschools()
    {
        $schools = School::paginate();
        $user = auth()->user();
        $students = $user->student->group->students;
        $courses = $user->student->group->courses;

        return view('pages/viewschools', compact('schools', 'user', 'students', 'courses'));
    }

    public function details()
    {
        $user = auth()->user();
        $groups = NULL;

        if($user->student){
            $students = $user->student->group->students;
            $courses = $user->student->group->courses;
            
        }elseif($user->teacher){
            $students = Student::all();
            $courses = $user->teacher->courses;
            $groups = $user->teacher->groups;
            
        }elseif(!$user->student){
            $students = Student::all();
            $courses = Course::all();
        }     

        return view('pages.details', compact('user', 'students', 'courses', 'groups'));
    }

    public function clases($id)
    {
        $clases = Group::find($id);
        $clases = $clases->courses;

        return view('pages.group.clases', compact('clases'));
    }

    public function class($id)
    {
        $course = Course::find($id);
        $materials = $course->materials;

        return view('pages.group.clase.class', compact('course', 'materials'));
    }
    
}
