<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\City;
use App\Models\Classes;
use App\Models\Event;
use App\Models\Sector;
use App\Models\Subject;
use App\Models\User;
use Illuminate\Http\Request;

class TeacherController extends Controller
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
        $teachers = User::where('type', '2')->get();
        $types = Sector::groupBy('type')->pluck('type');
        return view('teacherFilter', compact(['sectors', 'classes', 'subjects', 'types', 'teachers']));
    }

}
