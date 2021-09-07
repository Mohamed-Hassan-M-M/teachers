<?php

namespace App\Http\Controllers;

use App\Models\Area;
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
    public function index($ids = null)
    {
        if($ids != null){
            $teachers = User::where('type', '2')->whereIn('id', array_values(json_decode($ids)))->paginate(12);
        }
        else{
            $teachers = User::where('type', '2')->paginate(12);
        }
        $types = Sector::groupBy('type')->pluck('type');
        $cities = City::all();
        return view('teacherFilter', compact(['types', 'teachers', 'cities']));
    }

    public function getAreas($id)
    {
        $areas = Area::where('city_id', $id)->get()->toArray();
        return response()->json([
            'status' => 'success',
            'msg' => 'areas',
            'data' => $areas
        ]);
    }

    public function getSectors($id)
    {
        $sectors = Sector::where('type', $id)->get()->toArray();
        return response()->json([
            'status' => 'success',
            'msg' => 'sectors',
            'data' => $sectors
        ]);
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

}
