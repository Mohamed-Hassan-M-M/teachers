<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Area;
use App\Models\Event;
use App\Models\EventArea;
use App\Models\EventCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
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
        $events = Event::with(['category'])->orderBy('created_at')->get();
        return view('admin.event.index', compact(['events']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = EventCategory::orderBy('created_at')->get();
        $areas = Area::orderBy('created_at')->get();
        return view('admin.event.create', compact(['categories', 'areas']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $requestInputs = $request->except(['_token', 'area_id', 'image']);

        if ($request->has('image')) {
            $request->file('image')->store('public/events');
            $requestInputs['image'] = $request->image->hashName();
        }
        $event = Event::create($requestInputs);

        foreach ($request->area_id as $area){
            EventArea::create(['event_id'=>$event->id, 'area_id'=>$area]);
        }
        return redirect(route('admin.events.index'))->with("pass", __('general.created') .' '. __('general.successfully'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event = Event::findOrFail($id);
        return view('admin.event.show', compact(['event']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = EventCategory::orderBy('created_at')->get();
        $areas = Area::orderBy('created_at')->get();
        $event = Event::findOrFail($id);
        return view('admin.event.edit', compact(['event','categories', 'areas']));
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
        $event = Event::findOrFail($id);

        $requestInputs = $request->except(['_token', 'area_id', 'image']);

        if ($request->has('image')){
            $image = $request->file('image')->store('public/events');
            $requestInputs['image']  =  $request->image->hashName();
            if($event->image){
                Storage::disk('local')->delete('public/events/' . $event->image);
            }
        }
        $event->update($requestInputs);
        EventArea::where('event_id', $id)->delete();
        foreach ($request->area_id as $area){
            EventArea::create(['event_id'=>$event->id, 'area_id'=>$area]);
        }
        return redirect(route('admin.events.index'))->with("pass", __('general.updated') .' '. __('general.successfully'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Event::findOrFail($id);
        if($event->image){
            Storage::disk('local')->delete('public/events/' . $event->image);
        }
        $event->delete();
        EventArea::where('event_id', $id)->delete();
        return redirect()->route('admin.events.index')->with("pass", __('general.deleted') .' '. __('general.successfully'));
    }
}
