<?php

namespace App\Http\Controllers;

use App\Teacher;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

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
            compact('data'))->with(['pageTitle' => 'Профиль']);
    }

    public function init()
    {
            $find = Teacher::where('user_id', Auth::id())->first();
            return response()->json(['user'=>Auth::user(), 'teacher' => ($find) ? $find : null]);
    }

    public function userUpdate(Request $request, Teacher $teacher)
    {
        $findIt = Teacher::where('user_id', Auth::id());
        if (isset($request->email)) {
        User::where('id', Auth::id())
            ->update(['email' => $request->email, 'name' =>  $request->name]);
        }
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


    public function userAvatar(Request $request, Teacher $teacher)
    {
        if ($request->hasFile('image')) {
            $filename = md5(Carbon::now()).'.jpg';
            $image = Image::make($request->file('image')) ->save(public_path('/uploads/'.$filename));
            if ($image)
                Teacher::where('user_id', Auth::id())->update(['picture' => '/uploads/'.$filename]);
                return response()->json(['image' => $image->filename]);
        }
        return response()->json(['status' => false]);
    }


    public function userList()
    {
        $userList = User::all();
        return view('admin.user.index', compact('userList'))->with(['pageTitle' => 'Пользователи']);
    }


    public function userUpdateAlone(Request $request)
    {
        User::where('id',$request->id)
            ->update($request->all());
        return response()->json(['status' => true]);
    }

}
