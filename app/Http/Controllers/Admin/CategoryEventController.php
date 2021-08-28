<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CatEvent\CreateRequest;
use App\Http\Requests\Admin\CatEvent\UpdateRequest;
use App\Models\EventCategory;
use Illuminate\Http\Request;

class CategoryEventController extends Controller
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
        $categories = EventCategory::with('events')->orderBy('created_at')->get();
        return view('admin.catEvent.index', compact(['categories']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.catEvent.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateRequest $request)
    {
        EventCategory::create($request->except(['_token']));
        return redirect(route('admin.cat_events.index'))->with("pass", __('general.created') .' '. __('general.successfully'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = EventCategory::findOrFail($id);
        return view('admin.catEvent.show', compact(['category']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = EventCategory::findOrFail($id);
        return view('admin.catEvent.edit', compact(['category']));
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
        $category = EventCategory::findOrFail($id);
        $category->update($request->all());
        return redirect(route('admin.cat_events.index'))->with("pass", __('general.updated') .' '. __('general.successfully'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = EventCategory::findOrFail($id);
        $category->delete();
        return redirect()->route('admin.cat_events.index')->with("pass", __('general.deleted') .' '. __('general.successfully'));
    }
}
