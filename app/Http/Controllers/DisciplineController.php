<?php

namespace App\Http\Controllers;

use App\Discipline;
use App\Teacher;
use Illuminate\Http\Request;

class DisciplineController extends Controller
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
        return view('admin.discipline.disciplines');
    }


    public function new()
    {

        return view('admin.discipline.create');
    }


    public function create(Request $request, Discipline $discipline)
    {
        $discipline->fill($request->all());
        return ($discipline->save()) ?
            response()->json(['status' => true, 'data' => $discipline])
            : response()->json(['status' => false, 'data' => $request->all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Discipline $discipline
     * @return \Illuminate\Http\Response
     */
    public function show(Discipline $discipline)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Discipline $discipline
     * @return \Illuminate\Http\Response
     */
    public function edit(Discipline $discipline)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Discipline $discipline
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Discipline $discipline)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Discipline $discipline
     * @return \Illuminate\Http\Response
     */
    public function destroy(Discipline $discipline)
    {
        //
    }
}
