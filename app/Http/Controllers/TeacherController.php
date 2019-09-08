<?php

namespace App\Http\Controllers;

use App\User;
use App\Teacher;
use App\Course;
use Caffeinated\Shinobi\Models\Role;
use Illuminate\Http\Request;
use Caffeinated\Shinobi\Models\Permission;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teachers = Teacher::All();

        return view('teachers.index', compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::get();
        $courses = Course::orderBy('code', 'ASC')->get();

        return view('teachers.create', compact('users', 'courses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $teacher = Teacher::create($request->all());

        $teacher->courses()->sync($request->get('courses'));

        return redirect()->route('teachers.index', $teacher->id)
            ->with('info', 'Nivel guardado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $teacher = Teacher::find($id);

        return view('teachers.show', compact('teacher'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $teacher = Teacher::find($id);

        $courses = Course::get();

        return view('teachers.edit', compact('teacher', 'courses'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $teacher = Teacher::find($id);
        $teacher->update($request->all());

        $teacher->courses()->sync($request->get('courses'));

        return redirect()->route('teachers.index', $teacher->id)
            ->with('info', 'Profesor actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $teacher = Teacher::find($id)->delete();

        return back()->with('info', 'Eliminado correctamente');
    }
}

