<?php

namespace App\Http\Controllers;

use App\School;
use App\Course;
use Illuminate\Http\Request;
use Caffeinated\Shinobi\Models\Permission;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\SchoolsExport;

class SchoolController extends Controller
{ 

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $schools = School::All();

        return view('schools.index', compact('schools'));
    }

    /**
     * Show the form for creating |a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permissions = Permission::get();

        return view('schools.create', compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $school = School::create($request->all());

        if ($request->file('picture')){
            $path = Storage::disk('public')->put('logos', $request->file('picture'));
            $school->fill(['picture' => asset($path)])->save();
        }

        return redirect()->route('schools.index', $school->id)
            ->with('info', 'Colegio guardado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\School  $school
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $school = School::find($id);

        return view('schools.show', compact('school'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\School  $school
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $school = School::find($id);

        return view('schools.edit', compact('school'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\School  $school
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $school = School::find($id);
        $school->update($request->all());

        if ($request->file('picture')){
            $path = Storage::disk('public')->put('logos', $request->file('picture'));
            $school->fill(['picture' => asset($path)])->save();
        }

        return redirect()->route('schools.index', $school->id)
            ->with('info', 'Colegio actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\School  $school
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $school = School::find($id)->delete();

        return back()->with('info', 'Eliminado correctamente');
    }

    public function exportExcel()
    {
        return Excel::download(new SchoolsExport, 'Colegios.xlsx');
    }
}
