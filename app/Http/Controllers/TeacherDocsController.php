<?php

namespace App\Http\Controllers;

use App\TeacherDocs;
use Illuminate\Http\Request;

class TeacherDocsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('admin.discipline-docs.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function new()
    {
        return view('admin.discipline-docs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TeacherDocs  $teacherDocs
     * @return \Illuminate\Http\Response
     */
    public function show(TeacherDocs $teacherDocs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TeacherDocs  $teacherDocs
     * @return \Illuminate\Http\Response
     */
    public function edit(TeacherDocs $teacherDocs)
    {
        return view('admin.discipline-docs.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TeacherDocs  $teacherDocs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TeacherDocs $teacherDocs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TeacherDocs  $teacherDocs
     * @return \Illuminate\Http\Response
     */
    public function destroy(TeacherDocs $teacherDocs)
    {
        //
    }
}
