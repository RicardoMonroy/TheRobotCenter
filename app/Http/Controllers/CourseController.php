<?php

namespace App\Http\Controllers;

use App\Course;
use App\Material;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::All();

        return view('courses.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = Course::get();
        $materials = Material::get();

        return view('courses.create', compact('courses', 'materials'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $course = Course::create($request->all());

        if ($request->file('picture')){
            $path = Storage::disk('public')->put('PortadasCursos', $request->file('picture'));
            $course->fill(['picture' => asset($path)])->save();
        }

        $course->materials()->sync($request->get('materials'));

        return redirect()->route('courses.index', $course->id)
            ->with('info', 'Curso guardado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $course = Course::find($id);
        $materials = $course->materials;

        return view('courses.show', compact('course', 'materials'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $course = Course::find($id);

        $materials = Material::get();

        return view('courses.edit', compact('course', 'materials'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $course = Course::find($id);
        $course->update($request->all());

        if ($request->file('picture')){
            $path = Storage::disk('public')->put('PortadasCursos', $request->file('picture'));
            $course->fill(['picture' => asset($path)])->save();
        }

        $course->materials()->sync($request->get('materials'));

        return redirect()->route('courses.index', $course->id)
            ->with('info', 'Curso actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $course = Course::find($id)->delete();

        return back()->with('info', 'Eliminado correctamente');
    }
}
