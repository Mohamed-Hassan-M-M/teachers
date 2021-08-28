<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
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
        $blogs = Blog::orderBy('created_at')->get();
        return view('admin.blog.index', compact(['blogs']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $requestInputs = $request->except(['_token', 'image']);

        if ($request->has('image')) {
            $request->file('image')->store('public/blogs');
            $requestInputs['image'] = $request->image->hashName();
        }
        Blog::create($requestInputs);

        return redirect(route('admin.blogs.index'))->with("pass", __('general.created') .' '. __('general.successfully'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blog = Blog::findOrFail($id);
        return view('admin.blog.show', compact(['blog']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        return view('admin.blog.edit', compact(['blog']));
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
        $blog = Blog::findOrFail($id);

        $requestInputs = $request->except(['_token', 'image']);

        if ($request->has('image')){
            $image = $request->file('image')->store('public/blogs');
            $requestInputs['image']  =  $request->image->hashName();
            if($blog->image){
                Storage::disk('local')->delete('public/blogs/' . $blog->image);
            }
        }
        $blog->update($requestInputs);

        return redirect(route('admin.blogs.index'))->with("pass", __('general.updated') .' '. __('general.successfully'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        if($blog->image){
            Storage::disk('local')->delete('public/blogs/' . $blog->image);
        }
        $blog->delete();
        return redirect()->route('admin.blogs.index')->with("pass", __('general.deleted') .' '. __('general.successfully'));
    }
}
