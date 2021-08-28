<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Teacher\CreateRequest;
use App\Http\Requests\Admin\Teacher\UpdateRequest;
use App\Models\Area;
use App\Models\Subject;
use App\Models\TeacherArea;
use App\Models\TeacherSocial;
use App\Models\TeacherSubject;
use App\Models\User;
use Facade\Ignition\Support\Packagist\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
    public function store(CreateRequest $request)
    {
        $requestInputs = $request->except(['_token', 'subject_id', 'area_id', 'social_link', 'password', 'image']);

        if ($request->has('image')) {
            $request->file('image')->store('public/teachers');
            $requestInputs['image'] = $request->image->hashName();
        }

        $requestInputs['type'] = 2;
        $requestInputs['password'] = bcrypt($request->password);

        $teacher = User::create($requestInputs);

        foreach ($request->social_link as $social){
            if($social != null && $social != '' && !empty($social)){
                TeacherSocial::create(['teacher_id'=>$teacher->id, 'social_link'=>$social]);
            }
        }

        foreach ($request->area_id as $area){
            TeacherArea::create(['teacher_id'=>$teacher->id, 'area_id'=>$area]);
        }

        foreach ($request->subject_id as $subject){
            TeacherSubject::create(['teacher_id'=>$teacher->id, 'subject_id'=>$subject]);
        }

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
        $teacher = User::with(['areas', 'subjects', 'socialLink'])->where('type', '2')->where('id', $id)->firstOrFail();
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
        $teacher = User::with(['areas', 'subjects', 'socialLink'])->where('type', '2')->where('id', $id)->firstOrFail();
        return view('admin.teacher.edit', compact(['teacher','areas','subjects']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, $id)
    {
        $teacher = User::findOrFail($id);

        if ($request->has('image')){
            $image = $request->file('image')->store('public/teachers');
            $requestInputs['image']  =  $request->image->hashName();
            if($teacher->image){
                Storage::disk('local')->delete('public/teachers/' . $teacher->image);
            }
        }

        if($request->password){
            $requestInputs['password'] = bcrypt($request->password);
        }

        if(count($request->social_link) > 0) {
            TeacherSocial::where('teacher_id', $id)->delete();
            foreach ($request->social_link as $social){
                if($social != null && $social != '' && !empty($social)){
                    TeacherSocial::create(['teacher_id'=>$teacher->id, 'social_link'=>$social]);
                }
            }
        }

        if(count($request->area_id) > 0) {
            TeacherArea::where('teacher_id', $id)->delete();
            foreach ($request->area_id as $area) {
                TeacherArea::create(['teacher_id' => $teacher->id, 'area_id' => $area]);
            }
        }

        if(count($request->subject_id) > 0) {
            TeacherSubject::where('teacher_id', $id)->delete();
            foreach ($request->subject_id as $subject) {
                TeacherSubject::create(['teacher_id' => $teacher->id, 'subject_id' => $subject]);
            }
        }

        $requestInputs = $request->except(['_token', 'subject_id', 'area_id', 'social_link', 'password', 'image']);

        $teacher->update($requestInputs);

        return redirect(route('admin.teachers.index'))->with("pass", __('general.updated') .' '. __('general.successfully'));
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
        if($teacher->image){
            Storage::disk('local')->delete('public/teachers/' . $teacher->image);
        }
        $teacher->delete();

        TeacherSocial::where('teacher_id', $id)->delete();
        TeacherArea::where('teacher_id', $id)->delete();
        TeacherSubject::where('teacher_id', $id)->delete();

        return redirect()->route('admin.teachers.index')->with("pass", __('general.deleted') .' '. __('general.successfully'));
    }
}
