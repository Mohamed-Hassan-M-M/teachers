<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Classes;
use App\Models\Event;
use App\Models\Sector;
use App\Models\Subject;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:web');
    }

    public function index()
    {
        $events = Event::count();
        $sectors = Sector::count();
        $classes = Classes::count();
        $subjects = Subject::count();
        $teachers = User::where('type', '2')->count();
        $students = User::where('type', '3')->count();
        return view('admin.home', compact(['teachers', 'students', 'events', 'sectors', 'classes', 'subjects']));
    }

}
