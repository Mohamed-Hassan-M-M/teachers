<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\BookSubject;
use App\Models\BookSubSubject;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
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
    public function index()
    {
        $books = Book::paginate(12);
        $subjects = BookSubject::all();
        return view('bookFilter', compact(['books', 'subjects']));
    }


    public function getSubBooks($subject_id = null)
    {

        $booksubs = BookSubSubject::query();
        $booksubsret = [];
        if($subject_id != null && $subject_id != 'empty'){
            $subject_id = json_decode($subject_id);
            $booksubs = $booksubs->whereHas('subject', function($subject) use($subject_id) {
                return $subject->whereIn('book_subjects.id', $subject_id);
            });
            $booksubsret = $booksubs->get()->toArray();
        }

        return response()->json([
            'status' => 'success',
            'msg' => 'booksubs',
            'data' => $booksubsret
        ]);
    }

    public function getBooks($subject_id = null)
    {

        $books = Book::query();
        $booksret = [];
        if($subject_id != null && $subject_id != 'empty'){
            $subject_id = json_decode($subject_id);
            $books = $books->whereHas('subSubject', function($subject) use($subject_id) {
                return $subject->whereIn('book_sub_subjects.id', $subject_id);
            });
            $booksret = $books->get()->toArray();
        }

        return response()->json([
            'status' => 'success',
            'msg' => 'books',
            'data' => $booksret
        ]);
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

    public function getPreview($id)
    {
        $book = Book::findOrFail($id);
        $ext = $ext = pathinfo($book->content, PATHINFO_EXTENSION);
        $headers = array(
            'Content-Type' => 'application/'.$ext,
        );
        return Storage::response('public/books/content/' . $book->content, $book->title);
    }

}
