<?php

namespace App\Http\Controllers;

use App\Discipline;
use App\DisciplineDoc;
use App\TeacherDiscipline;
use App\TeacherDocs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $disciplinelist = Discipline::all();
        $list = (Auth::user()->role === 'admin')  ? DisciplineDoc::with('discipline', 'doc')->orderBy('created_at', 'desc')->get() : DisciplineDoc::with('discipline', 'doc')->where('user_id', Auth::id())->get();
        return view('admin.discipline-docs.index', compact('list', 'disciplinelist'))->with(['pageTitle' => 'Учебники']);
    }


    public function create(Request $request, TeacherDocs $teacherDocs, DisciplineDoc $disciplineDoc, TeacherDiscipline $teacherDiscipline)
    {
        $teacherDocs->user_id = Auth::id();
        $teacherDocs->fill([
            'name_id'=> $request->name_id,
            'name'=> $request->name,
            'comment'=> $request->comment,
            'sign'=> $request->sign,
            'ISBN'=> $request->ISBN,
            'press'=> $request->press,
            'bookYear'=> $request->bookYear,
            'pages'=> $request->pages,
            'doc_number'=> $request->doc_number,
            'paper'=> $request->paper,
            'document'=> $request->document,
        ]);
        if ($teacherDocs->save()) {
            $disciplineDoc->fill([
                'user_id'=>Auth::id(),
                'discipline_id' => $request->name_id,
                'doc_id' => $teacherDocs->id,
            ]);
            $teacherDiscipline->where('discipline_id', $request->name_id)->update(['permission'=>'1']);
            return ($disciplineDoc->save())  ? response()->json(['status' => true, 'item' =>  DisciplineDoc::with('discipline', 'doc')->where('id', $disciplineDoc->id)->first()])
                : response()->json(['status'=>false, 'err' => '$disciplineDoc not created']);
        }
        return response()->json(['status'=>false, 'err' => '$teacherDocs not created']);
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
        return view('admin.discipline-docs.edit')->with(['pageTitle' => 'Изменить учебники']);
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


    public function destroy($id)
    {
        $item = DisciplineDoc::where('id', $id)->first();
        TeacherDocs::where('id', $item->discipline_id)->delete();
       return back();
    }
    public function destroyPost(Request $request, DisciplineDoc $disciplineDoc, TeacherDocs $teacherDocs, TeacherDiscipline $teacherDiscipline)
    {
        $item = DisciplineDoc::where('id', $request->id)->first()->discipline_id;
        $teacherDiscipline->where('discipline_id', $item)->update(['permission'=>'0']);
        if (DisciplineDoc::where('id', $request->id)->delete() && TeacherDocs::where('id', $item)->delete()) {
            return response()->json(['status'=>true]);
            }
        return response()->json(['status'=>true]);

    }
}
