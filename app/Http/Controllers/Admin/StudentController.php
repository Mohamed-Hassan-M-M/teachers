<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Student\CreateRequest;
use App\Http\Requests\Admin\Student\UpdateRequest;
use App\Models\User;
use Illuminate\Http\Request;

class StudentController extends Controller
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
        $students = User::where('type', '3')->orderBy('created_at')->get();
        return view('admin.student.index', compact(['students']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.student.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateRequest $request)
    {
        $requestInputs = $request->except(['_token', 'password']);

        $requestInputs['type'] = 3;
        $requestInputs['password'] = bcrypt($request->password);

        User::create($requestInputs);
        return redirect(route('admin.students.index'))->with("pass", __('general.created') .' '. __('general.successfully'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = User::where('type', '3')->where('id', $id)->firstOrFail();
        return view('admin.student.show', compact(['student']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = User::where('type', '3')->where('id', $id)->firstOrFail();
        return view('admin.student.edit', compact(['student']));
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
        $student = User::findOrFail($id);

        $requestInputs = $request->except(['_token', 'password']);

        if($request->password){
            $requestInputs['password'] = bcrypt($request->password);
        }

        $student->update($requestInputs);

        return redirect(route('admin.students.index'))->with("pass", __('general.updated') .' '. __('general.successfully'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = User::where('type', '3')->where('id', $id)->firstOrFail();
        $student->delete();

        return redirect()->route('admin.students.index')->with("pass", __('general.deleted') .' '. __('general.successfully'));
    }
}
