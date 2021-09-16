<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Classes;
use App\Models\Event;
use App\Models\Sector;
use App\Models\Subject;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $sectors = Sector::all();
        $classes = Classes::all();
        $subjects = Subject::all();
        $blogs = Blog::latest()->get();
        $events = Event::latest()->take(3)->get();
        return view('home', compact(['sectors', 'classes', 'subjects', 'blogs', 'events']));
    }

    public function getClasses($id)
    {
        $classes = Classes::where('sector_id', $id)->get()->toArray();
        return response()->json([
            'status' => 'success',
            'msg' => 'classes',
            'data' => $classes
        ]);
    }

    public function getSubjects($id)
    {
        $subjects = Subject::where('class_id', $id)->get()->toArray();
        return response()->json([
            'status' => 'success',
            'msg' => 'subjects',
            'data' => $subjects
        ]);
    }

    public function search(Request $request)
    {
        $teachers = User::where('type', '2')->whereHas('subjects' , function($subject) use ($request){
            return $subject->where('subjects.id', $request->subject_id);
        })->orderBy('position', 'asc')->pluck('id');
        return redirect()->route('teacher.grid', $teachers);
    }
}
