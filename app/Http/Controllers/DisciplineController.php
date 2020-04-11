<?php

namespace App\Http\Controllers;

use App\Discipline;
use App\Teacher;
use App\TeacherDiscipline;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        return view('admin.discipline.disciplines')->with(['pageTitle' => 'Дисциплины']);
    }

    public function list(Discipline $discipline)
    {
        $permis = false;
        if (Auth::user()->role === 'admin') {
            $data = $discipline::with('teacherlist', 'rel')->get();
            $permis = true;
        } else {
            $ids = TeacherDiscipline::where('user_id', Auth::id())->get(['discipline_id']);
            $data = $discipline::whereIn('id', $ids)->with('teacherlist', 'rel')->get();
        }

        return response()->json(['status' => true, 'list' => $data, 'teacherlist' => Teacher::all(), 'user' => Auth::user(),]);
    }

    public function teacherAdd(Request $request, TeacherDiscipline $teacherDiscipline)
    {
        $teacherDiscipline->fill($request->all());
        if ($teacherDiscipline->save()) return response()->json(['status' => true]);

        return response()->json(['status' => false]);

    }

    public function teacherRemove(Request $request, TeacherDiscipline $teacherDiscipline)
    {
        $find = TeacherDiscipline::where('user_id', $request->user_id)->where('discipline_id', $request->discipline_id);
        if ($find->first()) {
            $find->delete();
            return response()->json(['status' => true]);
        }
        return response()->json(['status' => false, 'data' => $find]);
    }


    public function new()
    {

        return view('admin.discipline.create')->with(['pageTitle' => 'Создать дисциплину']);
    }


    public function create(Request $request, Discipline $discipline)
    {
        $discipline->fill($request->all());
        return ($discipline->save()) ?
            response()->json(['status' => true, 'data' => $discipline])
            : response()->json(['status' => false, 'data' => $request->all()]);
    }


    public function edit($id)
    {
        $data = Discipline::where('id', $id)->first();
        return view('admin.discipline.edit', compact('data'))->with(['pageTitle' => 'Изменить дисциплину']);
    }


    public function update(Request $request, Discipline $discipline)
    {
        $id = (string)$request->id;
        return ($discipline->where('id', $id)->first() && Discipline::where('id', $id)->update($request->all())) ?
            response()->json(['status' => true, 'data' => $discipline->first()])
            : response()->json(['status' => false, 'data' => $discipline->first()]);
    }


    public function destroy($id)
    {
        return (Discipline::where('id',$id)->delete()) ? back() : redirect('/home');
    }
}
