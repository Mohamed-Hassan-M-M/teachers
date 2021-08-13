<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Classes\CreateRequest;
use App\Http\Requests\Admin\Classes\UpdateRequest;
use App\Models\Classes;
use App\Models\Sector;
use Illuminate\Http\Request;

class ClassesController extends Controller
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
        $classes = Classes::with(['sector', 'subjects'])->orderBy('created_at')->get();
        return view('admin.classes.index', compact(['classes']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sectors = Sector::orderBy('created_at')->get();
        return view('admin.classes.create', compact(['sectors']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateRequest $request)
    {
        Classes::create($request->except(['_token']));
        return redirect(route('admin.classes.index'))->with("pass", __('general.created') .' '. __('general.successfully'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $class = Classes::findOrFail($id);
        return view('admin.classes.show', compact(['class']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sectors = Sector::orderBy('created_at')->get();
        $class = Classes::findOrFail($id);
        return view('admin.classes.edit', compact(['class','sectors']));
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
        $class = Classes::findOrFail($id);
        $class->update($request->all());
        return redirect(route('admin.classes.index'))->with("pass", __('general.updated') .' '. __('general.successfully'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $class = Classes::findOrFail($id);
        $class->delete();
        return redirect()->route('admin.classes.index')->with("pass", __('general.deleted') .' '. __('general.successfully'));
    }
}
