<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\BookSubSubject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
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
        $books = Book::with(['subSubject'])->orderBy('created_at')->get();
        return view('admin.book.index', compact(['books']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = BookSubSubject::orderBy('created_at')->get();
        return view('admin.book.create', compact(['categories']));
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
            $request->file('image')->store('public/books');
            $requestInputs['image'] = $request->image->hashName();
        }

        if ($request->has('content')) {
            $request->file('content')->store('public/books/content');
            $requestInputs['content'] = $request->content->hashName();
        }
        Book::create($requestInputs);

        return redirect(route('admin.books.index'))->with("pass", __('general.created') .' '. __('general.successfully'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book = Book::findOrFail($id);
        return view('admin.book.show', compact(['book']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = BookSubSubject::orderBy('created_at')->get();
        $book = Book::findOrFail($id);
        return view('admin.book.edit', compact(['book','categories']));
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
        $book = Book::findOrFail($id);

        $requestInputs = $request->except(['_token', 'image']);

        if ($request->has('image')){
            $image = $request->file('image')->store('public/books');
            $requestInputs['image']  =  $request->image->hashName();
            if($book->image){
                Storage::disk('local')->delete('public/books/' . $book->image);
            }
        }

        if ($request->has('content')){
            $content = $request->file('content')->store('public/books/content');
            $requestInputs['content']  =  $request->content->hashName();
            if($book->content){
                Storage::disk('local')->delete('public/books/content/' . $book->content);
            }
        }

        $book->update($requestInputs);
        return redirect(route('admin.books.index'))->with("pass", __('general.updated') .' '. __('general.successfully'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = Book::findOrFail($id);
        if($book->image){
            Storage::disk('local')->delete('public/books/' . $book->image);
        }
        if($book->content){
            Storage::disk('local')->delete('public/books/content/' . $book->content);
        }
        $book->delete();
        return redirect()->route('admin.books.index')->with("pass", __('general.deleted') .' '. __('general.successfully'));
    }

    public function getDownload($id)
    {
        $book = Book::findOrFail($id);
        $ext = $ext = pathinfo($book->content, PATHINFO_EXTENSION);
        $headers = array(
            'Content-Type' => 'application/'.$ext,
        );
        return Storage::download('public/books/content/' . $book->content, $book->title, $headers);
    }

}
