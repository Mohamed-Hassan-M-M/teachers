<?php

namespace App\Http\Controllers;

use App\Models\EventCategory;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventController extends Controller
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
    public function index($id = null)
    {
        if($id != null){
            $events = Event::whereHas('Category', function ($query) use ($id){
                return $query->where('event_categories.id', $id);
            })->orderBy('date', 'DESC')->paginate(6);
        }
        else{
            $events = Event::orderBy('date', 'DESC')->paginate(6);
        }
        $categories = EventCategory::get();
        $populars = Event::latest()->take(4)->get();
        return view('events', compact(['events', 'categories', 'populars']));
    }

    public function eventPage($id)
    {
        $event = Event::findOrFail($id);
        $categories = EventCategory::all();
        $populars = Event::latest()->take(4)->get();
        return view('eventDet', compact(['event', 'categories', 'populars']));
    }

}
