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
        $cities = City::all();
        return view('teacherFilter', compact(['teachers', 'cities']));
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

    public function getTeachers($area_id = null, $subject_id = null)
    {
        $teachers = User::query();
        $teachers->where('type', '2');
        if($area_id != null && $area_id != ''){
            $teachers->whereHas('areas', function($area) use($area_id) {
                return $area->where('id', $area_id);
            });
        }
        if($subject_id != null && $subject_id != ''){
            $teachers->whereHas('subjects', function($subject) use($subject_id) {
                return $subject->whereIn('id', $subject_id);
            });
        }
        $teachers->get()->toArray();
        return response()->json([
            'status' => 'success',
            'msg' => 'subjects',
            'data' => $teachers
        ]);
    }

}
