<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Classes;
use App\Models\Event;
use App\Models\Sector;
use App\Models\Subject;
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
        $blogs = Blog::all();
        $events = Event::all();
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
        dd($request->all());
        return view('search');
    }
}
