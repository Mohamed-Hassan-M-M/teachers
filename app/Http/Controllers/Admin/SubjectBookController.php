<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SubBook\CreateRequest;
use App\Http\Requests\Admin\SubBook\UpdateRequest;
use App\Models\BookSubject;
use App\Models\EventCategory;
use Illuminate\Http\Request;

class SubjectBookController extends Controller
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
        $categories = BookSubject::with('subSubjects')->orderBy('created_at')->get();
        return view('admin.subBook.index', compact(['categories']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.subBook.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateRequest $request)
    {
        BookSubject::create($request->except(['_token']));
        return redirect(route('admin.subject_books.index'))->with("pass", __('general.created') .' '. __('general.successfully'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = BookSubject::findOrFail($id);
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
        $category = BookSubject::findOrFail($id);
        return view('admin.subBook.edit', compact(['category']));
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
        $category = BookSubject::findOrFail($id);
        $category->update($request->all());
        return redirect(route('admin.subject_books.index'))->with("pass", __('general.updated') .' '. __('general.successfully'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = BookSubject::findOrFail($id);
        $category->delete();
        return redirect()->route('admin.subject_books.index')->with("pass", __('general.deleted') .' '. __('general.successfully'));
    }
}
