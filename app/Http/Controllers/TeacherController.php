<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Blog;
use App\Models\City;
use App\Models\Classes;
use App\Models\Contact_us;
use App\Models\Event;
use App\Models\Review;
use App\Models\Sector;
use App\Models\Subject;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    public function teacherPage($id)
    {
        $teacher = User::with(['reviews' => function($query){
            return $query->where('status', '1');
        }])->where('id', $id)->firstOrFail();
        $subjects = Subject::whereIn('id', $teacher->subjects)->distinct()->get();
        $classes = Subject::select('class_id')->whereIn('id', $teacher->subjects->pluck('id'))->groupBy('class_id')->pluck('class_id');
        $classes = Classes::whereIn('id', $classes)->distinct()->get();
        $sectors = Classes::select('sector_id')->whereIn('id', $classes->pluck('id'))->groupBy('sector_id')->pluck('sector_id');
        $sectors = Sector::whereIn('id', $sectors)->distinct()->get();
        return view('teacher', compact(['teacher', 'classes', 'sectors', 'subjects']));
    }

    public function review(Request $request)
    {
        $review = new Review();
        $review->message = $request->message;
        $review->rate = $request->rate;
        $review->student_id = auth()->user()->id;
        $review->teacher_id = $request->teacher_id;
        $review->created_at = Carbon::now();
        $review->save();

        $sumRate = Review::where('teacher_id', $request->teacher_id)->sum('rate');

        $teacher = User::findOrFail($request->teacher_id);
        $teacher->rating = $sumRate / ($teacher->count_rate + 1);
        $teacher->count_rate = $teacher->count_rate + 1;
        $teacher->save();

        return redirect()->back()->with('success', 'your review send');
    }

    public function about()
    {
        return view('about');
    }

    public function contactPage()
    {
        return view('contact');
    }

    public function contact(Request $request)
    {
        Contact_us::create($request->all());
        return redirect()->route('teacher.contact.page');
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
        if($area_id != null && $area_id != 'empty'){
            $teachers = $teachers->whereHas('areas', function($area) use($area_id) {
                return $area->where('areas.id', $area_id);
            });
        }
        if($subject_id != null && $subject_id != 'empty'){
            $subject_id = json_decode($subject_id);
            $teachers = $teachers->whereHas('subjects', function($subject) use($subject_id) {
                return $subject->whereIn('subjects.id', $subject_id);
            });
        }
        $teachers = $teachers->get()->toArray();
        return response()->json([
            'status' => 'success',
            'msg' => 'subjects',
            'data' => $teachers
        ]);
    }

}
