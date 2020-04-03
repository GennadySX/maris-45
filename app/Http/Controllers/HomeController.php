<?php

namespace App\Http\Controllers;

use App\Teacher;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = Auth::user();
        $data->teacher = Teacher::where('user_id', Auth::id())->first();

        return view('admin.profile.profile',
            compact('data'));
    }


    public function userUpdate(Request $request, User $user, Teacher $teacher)
    {
        $findIt = Teacher::where('user_id', Auth::id());
        if (!$findIt->first()) {
            $teacher->fill($request->all());
            if ($teacher->save())
                return response()->json(['data'=> $teacher, 'status'=>true]);
        }
        else
            unset($request['email']);
            $findIt->update($request->all());
            if ($findIt)
                return response()->json(['data'=> $request->all(), 'status'=>true]);
    }
}
