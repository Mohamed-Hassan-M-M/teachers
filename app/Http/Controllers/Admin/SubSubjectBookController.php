<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BookSubject;
use App\Models\BookSubSubject;
use Illuminate\Http\Request;

class SubSubjectBookController extends Controller
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
        $subCategories = BookSubSubject::with(['books', 'subject'])->orderBy('created_at')->get();
        return view('admin.subsubBook.index', compact(['subCategories']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = BookSubject::orderBy('created_at')->get();
        return view('admin.subsubBook.create', compact(['categories']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        BookSubSubject::create($request->except(['_token']));
        return redirect(route('admin.subsubject_books.index'))->with("pass", __('general.created') .' '. __('general.successfully'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $subCategory = BookSubSubject::findOrFail($id);
        return view('admin.subsubBook.show', compact(['subCategory']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = BookSubject::orderBy('created_at')->get();
        $subCategory = BookSubSubject::findOrFail($id);
        return view('admin.subsubBook.edit', compact(['subCategory','categories']));
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
        $subCategory = BookSubSubject::findOrFail($id);
        $subCategory->update($request->all());
        return redirect(route('admin.subsubject_books.index'))->with("pass", __('general.updated') .' '. __('general.successfully'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subCategory = BookSubSubject::findOrFail($id);
        $subCategory->delete();
        return redirect()->route('admin.subsubject_books.index')->with("pass", __('general.deleted') .' '. __('general.successfully'));
    }
}
