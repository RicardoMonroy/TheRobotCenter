<?php

namespace App\Http\Controllers;

use App\Group;
use App\Level;
use App\School;
use App\Course;
use Illuminate\Http\Request;
use Caffeinated\Shinobi\Models\Permission;

class GroupController extends Controller
{
    public function schools($id)
    {
        dd('schools');
        $school = School::find($id);
        $courses = Course::paginate();

        return view('groups.schools', compact('school', 'courses'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $groups = Group::paginate();

        return view('groups.index', compact('groups'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $levels = Level::get();
        $schools = School::get();

        return view('groups.create', compact('levels', 'schools'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $group = Group::create($request->all());

        return redirect()->route('groups.index', $group->id)
            ->with('info', 'Nivel guardado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        dd('hola');
        $group = Group::find($id);

        return view('groups.show', compact('group'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $group = Group::find($id);

        $levels = Level::get();
        $schools = School::get();

        return view('groups.edit', compact('group', 'levels', 'schools'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $group = Group::find($id);
        $group->update($request->all());

        return redirect()->route('groups.index', $group->id)
            ->with('info', 'Nivel actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $group = Group::find($id)->delete();

        return back()->with('info', 'Eliminado correctamente');
    }
}
