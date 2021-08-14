<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Area;
use App\Models\Subject;
use App\Models\User;
use Illuminate\Http\Request;

class TeacherController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teachers = User::with(['areas', 'subjects'])->where('type', '2')->orderBy('created_at')->get();
        return view('admin.teacher.index', compact(['teachers']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $areas = Area::orderBy('created_at')->get();
        $subjects = Subject::orderBy('created_at')->get();
        return view('admin.teacher.create', compact(['areas', 'subjects']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        User::create([
            'name_ar'=>'2',
            'name_en'=>'2',
            'description_ar'=>'2',
            'description_en'=>'2',
            'position'=>'2',
            'mobile'=>'2',
            'email'=>'2',
            'password'=>'2',
            'image'=>'2',
            'type'=>'2',
        ]);
        return redirect(route('admin.teachers.index'))->with("pass", __('general.created') .' '. __('general.successfully'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $teacher = User::with(['areas', 'subjects'])->where('type', '2')->where('id', $id)->firstOrFail();
        return view('admin.teacher.show', compact(['teacher']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $areas = Area::orderBy('created_at')->get();
        $subjects = Subject::orderBy('created_at')->get();
        $teacher = User::with(['areas', 'subjects'])->where('type', '2')->where('id', $id)->firstOrFail();
        return view('admin.teacher.edit', compact(['teacher','areas','subjects']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $teacher = User::where('type', '2')->where('id', $id)->firstOrFail();
        $teacher->delete();
        return redirect()->route('admin.teachers.index')->with("pass", __('general.deleted') .' '. __('general.successfully'));
    }
}
